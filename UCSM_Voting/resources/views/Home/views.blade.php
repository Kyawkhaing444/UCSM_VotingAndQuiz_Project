<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/MDB/css/mdb.css">
    <link rel="stylesheet" href="../css/media2.css">
    <title>ucsm voting</title>
  </head>
  <body>
  <!---nav bar =================-->

  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark light-color">

<!-- Navbar brand -->
<a class="navbar-brand " href="../selection" style="color:black;"><i class="fas fa-chevron-left"></i></a>
<h2 class="navbar-brand " href="#" style="color:black;" >selection</h2>

<!-- Collapse button -->

<i class="fas fa-bars navbar-toggler" data-toggle="collapse" data-target="#basicExampleNav" style="color:black;" ></i>
<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link b" href="../home" style="color:black;">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="../list" style="color:black;">Vote</a>
    </li>
    <li class="nav-item " >
      <a class="nav-link" href="../Homeshop" style="color:black;">Shop</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="../Homequiz" style="color:black;">Quizz</a>
    </li>

    <!-- Dropdown -->
   

  </ul>
  <!-- Links -->

  
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
  <!-- nab bar =================-->
    <section>
      <div class="container">
        <!---King & Queen -->
           <div class="row">

             <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
           <img class="card-img image"src="../images/{{ $parti->photoURL }}" alt="Card image cap" style="margin-top:0px;margin-bottom:10px;">
          @if($parti->title == "")
           <h5 class="description" id="song-name">{{ $parti->title }}</h5>
          @endif
           <h5 class="description">{{ $parti->name }}</h4>

            <form>
                    <div class="col text-center">
                            <div class="md-form text-center" style="width:50%;margin-left:auto;margin-right:auto;">
                                    <input type="text" id="form1" class="form-control" >
                                    <label for="form1" class="text-center" style="margin-left:35px;" >Enter Code</label>
                             </div>
                     </div>
            </form>
            </div>
            <div class="card-footer" >

                    <button class="btn btn-info btn-sm waves-effect" style="float:right">VOTE</button>
                    <button href="" class="btn btn-info btn-sm waves-effect" style="float:right">Cancle</button>

            </div>

           </div>
             </div>


            </div>



                <!---King & Queen -->

      </div>
    </section>

      <section>
     <div class="container">

     </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../css/MDB/js/jquery-3.3.1.min.js"></script>
    <script src="../css/MDB/js/bootstrap.min.js"></script>
    <script src="../css/MDB/js/mdb.min.js"></script>
    <script src="../css/MDB/js/popper.min.js"></script>

</html>
