# Speed Monitor
An Open Source Internet Speed Analysis Tool

See live example at http://rchase.com/sm.php

Speed Monitor tracks internet speeds over time by performing a speed test at set intervals (for example 15 minutes), and displaying the results using Google Charts API. If an internet speed test drops below a predefined threshold, an email is sent to notify the administrator, and a tweet is sent to the ISP. 

# Install Instructions
1. Download using the "Download ZIP" button
2. Unzip to a web directory
3. Remove sm.py and sm_config.py from the web directory, move them to any non web directory like ~/scripts
4. Create the database that will be used by running the MySQL_db_skeleton.sql file on your MySQL database.
5. Create a MySQL user with access only to the database created above
6. Edit db_config.php and sm_config.py, add your database information.
7. Enter your down_speed, up_speed, and down_limit in sm_config.py
8. Create a twitter account. Then go to https://apps.twitter.com
You will need to generate Key and Access tokens, then enter them into sm_config.py for twitter authentication
9. Create a Cronjob to run ~/scripts/sm.py as frequently as desired. For example, every 15 minutes.

TIP: Use "~/scripts/sm.py > /dev/null 2>&1" as the location of your Cron Job script to redirect script output to /dev/null (so you won't get email notifications every time it runs)

WARNING: Not recommended for use on a metered internet connection (Satellite/4G/others), uses lots of bandwidth for tests (About 250mb/per test on my 100mbps connection)
