  <!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>rchase.com - Speed Monitor</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<style>

/* Copyright 2012 Google Inc. All Rights Reserved. */

.google-visualization-tooltip-action: hover {
  background-color: #eeeeee;
}
.google-visualization-tooltip {
  border:solid 1px #bdbdbd;
  border-radius: 2px;
  background-color: white;
  position: absolute;
  box-shadow: 0px 2px 2px 0px rgba(204, 204, 204, 0.6);
  font-size: 12px;
  padding: 0px;
  -moz-box-shadow: 0px 2px 2px 0px rgba(204, 204, 204, 0.6);
  -webkit-box-shadow: 0px 2px 2px 0px rgba(204, 204, 204, 0.6);
  width: 325px !important;
  height: 200px !important;
}
.google-visualization-tooltip-action-list {
  list-style-type: none;
  margin: 0;
  padding: 0.5em 0em 0.5em 0em;
  cursor: hand;
}
.google-visualization-tooltip-action {
  margin: 0;
  cursor: pointer;
  padding: 0.5em 2em 0.5em 1em;
}
.google-visualization-tooltip-action:hover {
  background-color: #eeeeee;
}
.google-visualization-tooltip-item-list {
  list-style-type: none;
  margin: 1em 0 1em 0;
  padding: 0em;
}
.google-visualization-tooltip-item {
  margin: 0.65em 0em 0.65em 0em;
  padding: 0em 2em 0em 1em;
}
.google-visualization-tooltip-item-list
.google-visualization-tooltip-item:first-child {
  margin: 1em 0em 1em 0em;
}
.google-visualization-tooltip-separator {
  margin: 0;
  padding: 0;
  height: 1px;
  background-color: #dddddd;
}
.google-visualization-tooltip-square {
  display: inline-block;
  /* IE does not support inline-block fall back to float left */
  float: left\9;
  clear: none;
  width: 0.5em;
  height: 0.5em;
  margin: 0.16em 0.7em 0em 0em;
  border-bottom: solid 0.1em white;
}

/* Hide the other display points from tooltip */
.google-visualization-tooltip-square { display:none !important;}
.google-visualization-tooltip-item span:nth-child(2) { display:none !important; height: 0px !important}
.google-visualization-tooltip-item span:nth-child(3) { display:none;}



    </style>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">rchase.com</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sm.php">Speed Monitor</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="sm.php">Speed Monitor</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Speed Monitor</h1>
      <div class="row center">
        <h5 class="header col s12 light">An Open Source Internet Speed Analysis Tool</h5>
      </div>
      <div class="row center">
        <a href="https://github.com/reillychase/speedmonitor" id="download-button" class="btn-large waves-effect waves-light orange" target="_blank">View on Github</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="medium material-icons">timeline</i></h2>
            <h5 class="center">Analytics Dashboard</h5>

            <p class="light">Responsive and easy to use Analytics Dashboard with charting of internet speeds. Built with Google Charts API and includes Range Filter control for selecting any time frame.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="medium material-icons">visibility</i></h2>
            <h5 class="center">Network Visibility</h5>

            <p class="light">Gain deeper insight to network speeds, correlate network problems with the internet speeds at the time, bring awareness to any patterns in network degradation, and notify the right people when speeds are below threshold.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="medium material-icons">mail_outline</i></h2>
            <h5 class="center">Automatic Notifications</h5>

            <p class="light">Receive an email notification when speeds drop below a certain threshold, automatically post to Twitter to notify the ISP, or automatically create a support ticket to get attention to the problem fast!</p>
          </div>
        </div>
      </div>

    </div>

    <br><br>

<div class="row">
<div class="col s12 center">
<h1 class="header center orange-text">Your Current Speed</h1>
<h5 class="header center light">HTML5 Speed Test. No Flash or Java!</h5>

<!--OST Widget code start--><iframe src="http://openspeedtest.com/Get-widget.php" width="735" scrolling="no" height="490" frameborder="0">
</iframe><br /><div style="text-align:center; width: 725px;"></div><!-- OST Widget code end -->
</div>
</div>
<div class="row">
<div class="col s12">
<h1 class="header center orange-text">Business Deluxe 100</h1>
<h5 class="header center light">Advertised as 100down/20up</h5>
<div id="dashboard_business">
<div id="dual_chart_business" style="width: 100%; height: 500px;"></div>
<div id="range_filter_business" style="width: 100%; z-index=-1"></div>
</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="col s12 center">
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Comcast219" data-widget-id="728317503655399424">Tweets by @Comcast219</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

</div>
<br>
<br>
<div class="row">
<div class="col s12">
<h1 class="header center orange-text">Xfinity Blast! 75</h1>
<h5 class="header center light">Advertised as 75down/10up</h5>
<div id="dashboard_residential">
<div id="dual_chart_residential" style="width: 100%; height: 500px;"></div>
<div id="range_filter_residential" style="width: 100%; z-index=-1"></div>
</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="col s12 center">
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/ComcastUser219" data-widget-id="728317350529765377">Tweets by @ComcastUser219</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

</div>
<br>
<br>
    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Speed Monitor</h5>
          <p class="grey-text text-lighten-4">Speed Monitor is based on the original source code of AlekseyP's Comcast Complainer <a href="http://pastebin.com/WMEh802V">http://pastebin.com/WMEh802V</a>, and improved with database storage, email notification triggers, Google Charts API, and Materialize CSS frontend.The purpose of Speed Monitor is not only to complain to the ISP, but also to give deeper insight into internet speeds over time.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="white-text" href="/">rchase.com</a></li>
            <li><a class="white-text" href="sm.php">Speed Monitor</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="http://github.com/reillychase" target="_blank">GitHub</a></li>
            <li><a class="white-text" href="http://linkedin.com/in/reillychase" target="_blank">LinkedIn</a></li>
            <li><a class="white-text" href="http://twitter.com/_rchase_" target="_blank">Twitter</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://rchase.com">Reilly Chase</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<?php

require 'db_config.php';
try {
$dbh = new PDO("mysql:dbname=$nameofdb2;host=$host2", $dbusername2, $dbpassword2);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}


// Get Business Stats

$query = "SELECT * FROM comcast_uptime.business";
$stmt = $dbh ->prepare($query);
$stmt->execute();

$result = $stmt->fetchAll();

$business_stats = array();

foreach( $result as $row ){

    $time_val = $row[1] . ' UTC';
    $time_val = str_replace('-','/',$time_val);

    $business_stats[] = array($time_val, $row[2], $row[3], $row[4], $row[5]);
  }


$business_stats = json_encode($business_stats);


try {
$dbh = new PDO("mysql:dbname=$nameofdb;host=$host", $dbusername, $dbpassword);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}


$query = "SELECT * FROM comcast_uptime.residential";
$stmt = $dbh->prepare($query);
$stmt->execute();

$result = $stmt->fetchAll();

$residential_stats = array();

foreach( $result as $row ){

    $time_val = $row[1] . ' UTC';
    $time_val = str_replace('-','/',$time_val);

    $residential_stats[] = array($time_val, $row[2], $row[3], $row[4], $row[5]);
  }





$residential_stats = json_encode($residential_stats);


?>
<script>

 // Load the Visualization API and the piechart package.

  google.load("visualization", "1", {packages:["corechart", 'geochart', 'line', 'controls']});
google.setOnLoadCallback(drawVisualization);
function drawVisualization() {

// Business Chart
  var data = new google.visualization.DataTable();

    data.addColumn('datetime', 'Time');
    data.addColumn('number', 'Download');
    data.addColumn('number', 'Upload');
    data.addColumn('number', 'Ping');
    data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});



  var business_stats = <?php echo $business_stats ?>;


  for (var i in business_stats) {

    var date_conv = new Date(business_stats[i][0]);
    business_stats[i][0] = date_conv;
    business_stats[i][1] = parseFloat(business_stats[i][1]);
    business_stats[i][2] = parseFloat(business_stats[i][2]);
    business_stats[i][3] = parseFloat(business_stats[i][3]);
    business_stats[i][4] = '<a href="' + business_stats[i][4] + '" target="_blank"><img src="' + business_stats[i][4] + '"></a>';
  }
      data.addRows(business_stats);
    

    var rangeFilter = new google.visualization.ControlWrapper({
        controlType: 'ChartRangeFilter',
        containerId: 'range_filter_business',
        options: {

            filterColumnIndex: 0,
            ui: {
                chartOptions: {
                    colors: ["blue", "green", "orange"],
             seriesType: 'bars',    
 
            series: {

              0: {type: "line", targetAxisIndex:0},
              1: {type: "line", targetAxisIndex:0},
              2: {side: 'right', type: "bar", targetAxisIndex:0}, // Right y-axis.

            },
            
              axes: {
            y: {
              
              1: {side: 'right'} // Right y-axis.
            }
          },
                    height: 50,
                    width: '100%',
                    chartArea: {
                        width: '80%'
                    }
                },
                minRangeSize: 21600000, // 86400000ms = 1 day
                snapToData: false
            }
        },
        view: {
            columns: [0, 1, 2, 3, 4]
        },
        state: {
            range: {
                // set the starting range to
                start: new Date(new Date().getTime() - 60 * 60 * 6 * 1000 * 1),
                end: new Date()
            }
        }
    });
    
    var chart = new google.visualization.ChartWrapper({
        chartType: 'ComboChart',
        containerId: 'dual_chart_business',
        options: {
          tooltip: {isHtml: true,
              trigger: 'selection'},
          focusTarget: 'category',
            // width and chartArea.width should be the same for the filter and chart
            'legend':'top',
            'title':'Actual Speeds',
            height: 500,
            width: '100%',
            chartArea: {
                width: '80%'
            },


           seriesType: 'bars',    
 
            series: {
              0: {type: "line", targetAxisIndex:0},
              1: {type: "line", targetAxisIndex:0},
              2: {side: 'right', type: "bar", targetAxisIndex:0}, // Right y-axis.




            },
            
              axes: {
            y: {
              
              1: {side: 'right'} // Right y-axis.

            }
          },

          colors: ["blue", "green", "#ff9800"]
    }});
    
    // Create the dashboard
    var dash = new google.visualization.Dashboard(document.getElementById('dashboard_business'));
    // bind the chart to the filter
    dash.bind([rangeFilter], [chart]);
    // draw the dashboard
    dash.draw(data);

// Residential Chart

  var data = new google.visualization.DataTable();

  data.addColumn('datetime', 'Time');
    data.addColumn('number', 'Download');
    data.addColumn('number', 'Upload');
    data.addColumn('number', 'Ping');
    data.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});


      var residential_stats = <?php echo $residential_stats ?>;


  for (var i in residential_stats) {

    var date_conv = new Date(residential_stats[i][0]);
    residential_stats[i][0] = date_conv;
    residential_stats[i][1] = parseFloat(residential_stats[i][1]);
    residential_stats[i][2] = parseFloat(residential_stats[i][2]);
    residential_stats[i][3] = parseFloat(residential_stats[i][3]);
    residential_stats[i][4] = '<a href="' + residential_stats[i][4] + '" target="_blank"><img src="' + residential_stats[i][4] + '"></a>';



  }
      data.addRows(residential_stats);
    

    var rangeFilter_residential = new google.visualization.ControlWrapper({
        controlType: 'ChartRangeFilter',
        containerId: 'range_filter_residential',
        options: {

            filterColumnIndex: 0,
            ui: {
                chartOptions: {
                    colors: ["blue", "green", "#ff9800"],
             seriesType: 'bars',    
 
            series: {

              0: {type: "line", targetAxisIndex:0},
              1: {type: "line", targetAxisIndex:0},
              2: {type: "bar", targetAxisIndex:0}, // Right y-axis.

            },
            

                    height: 50,
                    width: '100%',
                    chartArea: {
                        width: '80%'
                    }
                },
                minRangeSize: 21600000, // 86400000ms = 1 day
                snapToData: false
            }
        },
        view: {
            columns: [0, 1, 2, 3, 4]
        },
        state: {
            range: {
                // set the starting range to
                start: new Date(new Date().getTime() - 60 * 60 * 6 * 1000 * 1),
                end: new Date()
            }
        }
    });
    
    var chart_residential = new google.visualization.ChartWrapper({
        chartType: 'ComboChart',
        containerId: 'dual_chart_residential',
        options: {
          tooltip: {isHtml: true,
              trigger: 'selection'},
          focusTarget: 'category',
            // width and chartArea.width should be the same for the filter and chart
            height: 500,
            width: '100%',
            'legend':'top',
            'title':'Actual Speeds',
            chartArea: {
                width: '80%'
            },


           seriesType: 'bars',    
 
            series: {
              0: {type: "line", targetAxisIndex:0},
              1: {type: "line", targetAxisIndex:0},
              2: {type: "bar", targetAxisIndex:0}, // Right y-axis.



            },
            


          colors: ["blue", "green", "#ff9800"]
    }});
    
    // Create the dashboard
    var dash_residential = new google.visualization.Dashboard(document.getElementById('dashboard_residential'));
    // bind the chart to the filter
    dash_residential.bind([rangeFilter_residential], [chart_residential]);
    // draw the dashboard
    dash_residential.draw(data);
}

  </script>


  </body>
</html>



