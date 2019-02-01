<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/MDB/css/mdb.css">
   
    
    <link rel="stylesheet" href="css/style.css">
    <title>ucsm voting</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<style>

.pre{
margin-left:auto;
margin-right:auto;
margin-top:150px;

}
.images{
    margin-left:auto;
    margin-right:auto;
 
    width:200px;
    height:200px;
   

}
@media only screen and (max-width: 480px) and (min-width: 250px){
        .images{
            margin-top:100px;
        }
        .logo{
            border-radius:50%;width:180px;height:180px;padding-left:30px;
        }

}
@media only screen and  (min-width: 600px){
    .images{
            margin-top:300px;
            width:300px;
            height:300px;
            
        }
        .logo{
            border-radius:50%;width:250px;height:250px;padding-left:30px;
          
        }
        .load{
            height:50px;
            width:200px;
        }

}
@media only screen and  (min-width: 600px){
    .images{
            margin-top:100px;
            width:300px;
            height:300px;
            
        }
        .logo{
            border-radius:50%;width:250px;height:250px;padding-left:30px;
          
        }
        .load{
            height:50px;
            width:200px;
        }

}

</style>
</head>
<body onload="myFunction()" style="margin:0;">
	
   
    <div id="loader-container">
        
    <div class="row">
        <div class="col-md-12" >
                <div class="images">
                <img src="images/logo.png"  class="logo" ><br>
                <img src="images/30(1).gif" class="load" style="padding-left:10px;padding-top:10px;">
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
