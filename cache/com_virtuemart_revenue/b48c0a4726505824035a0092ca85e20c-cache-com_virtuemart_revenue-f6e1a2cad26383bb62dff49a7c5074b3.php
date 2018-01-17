<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1422:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2017-12-19', 0,0,0], ['2017-12-20', 0,0,0], ['2017-12-21', 0,0,0], ['2017-12-22', 0,0,0], ['2017-12-23', 0,0,0], ['2017-12-24', 0,0,0], ['2017-12-25', 0,0,0], ['2017-12-26', 0,0,0], ['2017-12-27', 0,0,0], ['2017-12-28', 0,0,0], ['2017-12-29', 0,0,0], ['2017-12-30', 0,0,0], ['2017-12-31', 0,0,0], ['2018-01-01', 0,0,0], ['2018-01-02', 0,0,0], ['2018-01-03', 0,0,0], ['2018-01-04', 0,0,0], ['2018-01-05', 0,0,0], ['2018-01-06', 0,0,0], ['2018-01-07', 0,0,0], ['2018-01-08', 0,0,0], ['2018-01-09', 0,0,0], ['2018-01-10', 0,0,0], ['2018-01-11', 0,0,0], ['2018-01-12', 0,0,0], ['2018-01-13', 0,0,0], ['2018-01-14', 0,0,0], ['2018-01-15', 0,0,0], ['2018-01-16', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Tuesday, 19 December 2017 to Wednesday, 17 January 2018',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}s:6:"output";s:0:"";}