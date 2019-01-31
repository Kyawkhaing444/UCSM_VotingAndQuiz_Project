<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/MDB/css/mdb.css">
    <link rel="stylesheet" href="css/media.css">
    
    <link rel="stylesheet" href="css/style.css">
    <title>ucsm voting</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<style>

.pre{
margin-left:auto;
margin-right:auto;
}
@media only screen and (max-width: 480px) and (min-width: 250px){
    .card{
        margin-top:160px;
    }
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">
	
   
    <div id="loader-container">
        
    <div class="row">
        <div class="col-sm-12 ">
            <div class="card pre">
                <div class="card-body">
                    <img src="images/logo.png" style="border-radius:50%;widht:150px;height:150px;margin-left:auto;margin-right:auto;">
                </div>
            </div>
        </div>
    </div>
     
    </div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 4000);
}

function showPage() {
  document.getElementById("loader-container").style.display = "none";
  
  window.location = "Home";
}


            
            // Update the count down every 1 second
            

    var timeleft = 4;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);

      
</script>

</body>
</html>
