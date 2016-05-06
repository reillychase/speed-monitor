#!/usr/bin/python
import os
import sys
import csv
import datetime
import time
import twitter
import MySQLdb
import re
from sm_config import *

def test():

    #run speedtest-cli
    print 'running test'
    a = os.popen("python /usr/bin/speedtest-cli --share --simple").read()
    print 'ran'
    #split the 3 line result (ping,down,up)
    print a
    #if speedtest could not connect set the speeds to 0
    if "Cannot" in a:
        p = 100
        d = 0
        u = 0
    #extract the values for ping down and up values
    else:
        p = re.findall('Ping: (.+?) ', a)[0]
        d = re.findall('Download: (.+?) ', a)[0]
        u = re.findall('Upload: (.+?) ', a)[0]
        ss = re.findall('Share results: (.+)', a)[0]

    # Open database connection
    db = MySQLdb.connect(host,db_user,db_pass,db_name)

    # prepare a cursor object using cursor() method
    cursor = db.cursor()

    try:
        # Execute the SQL command
        cursor.execute("INSERT INTO residential (time,d,u,p,ss) VALUES (NOW(),%s,%s,%s,%s)", (d,u,p,ss))
        # Commit your changes in the database
        db.commit()
    except Exception,e:
        print str(e)
        # Rollback in case there is any error
        db.rollback()

    # disconnect from server
    db.close()

    my_auth = twitter.OAuth(TOKEN,TOKEN_KEY,CON_SEC,CON_SEC_KEY)
    twit = twitter.Twitter(auth=my_auth)

    #try to tweet if speedtest couldnt even connect. Probably wont work if the internet is down
    if "Cannot" in a:
        try:
            tweet="Hey @Comcast @ComcastCares why is my internet down? I pay for 75down/10up in Valparaiso IN? #comcastoutage #comcast"
            twit.statuses.update(status=tweet)
        except:
            pass

    # tweet if down speed is less than whatever I set
    elif eval(d)<46:
        print "trying to tweet"
        try:
            # i know there must be a better way than to do (str(int(eval())))
            tweet="Hey @Comcast why is my internet speed " + str(int(eval(d))) + "down/" + str(int(eval(u))) + "up when I pay for 75down/10up in Valparaiso IN? @ComcastCares @xfinity #comcast"                        
            twit.statuses.update(status=tweet)
        except Exception,e:
            print str(e)
            pass
    return
        
if __name__ == '__main__':
        test()
        print 'completed'