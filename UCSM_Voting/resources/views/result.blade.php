<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="MDB/css/mdb.css">
    <link rel="stylesheet" href="media2.css">
    <title>ucsm voting</title>
  </head>
  <body>
   
     <section>
     <div class="container">
        <div class="row">
            <div class="col-md-12"><br>
                    <div class="card card-md">
                        <div class="card-header">
                            <h3 class="card-description text-center">Title</h3>
                        </div>
                        <div class="card-body"style="height:380px;">
                            <div class="col-md-6" style="position: absolute;">
                                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="col-md-6" style="float:right;">
                                <table class="table table-striped ">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                   
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    
                                      </tr>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                     
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                      
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
     </div>
    </section>
    <script>
        window.onload = function() {
        
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: " Fresher Welcome Vote Count "
            },
            data: [{
                type: "pie",
                startAngle: 25,
                toolTipContent: "<b>{label}</b>: {y}%",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - {y}%",
                dataPoints: [
                    { y: 32, label: "Person 1" },
                    { y: 33, label: "Person 2" },
                    { y: 35, label: "Person 3" }
                    
                ]
            }]
        });
        chart.render();
        
        }
        </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="MDB/js/jquery-3.3.1.min.js"></script>
    <script src="MDB/js/bootstrap.min.js"></script>
    <script src="MDB/js/mdb.min.js"></script>
    <script src="MDB/js/popper.min.js"></script>
  
</html>