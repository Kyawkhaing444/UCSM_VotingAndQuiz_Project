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
    <style>
     .nav-link,.f,.description{
    font-weight:normal;
    font-style:normal;
  }
    </style>
  </head>

  <body>
   <!---nav bar =================-->

  <!--Navbar-->
  <section>
<nav class="navbar navbar-expand-lg navbar-dark light-color">

<!-- Navbar brand -->
<a class="navbar-brand " href="../list" style="color:black;"><i class="fas fa-chevron-left"></i></a>
<h2 class="navbar-brand f" href="#" style="color:black;" >{{$cata}}</h2>

<!-- Collapse button -->

<i class="fas fa-bars navbar-toggler" data-toggle="collapse" data-target="#basicExampleNav" style="color:black;" ></i>
<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link b f" href="../Home" style="color:black;">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link f" href="../list" style="color:black;">Vote</a>
    </li>
    <li class="nav-item " >
      <a class="nav-link f" href="../Homeshop" style="color:black;">Shop</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link f" href="../Homequiz" style="color:black;">Quizz</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="http://bit.ly/tcregister" style="color:black;">Quizz</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="http://bit.ly/tcregister" style="color:black;">Register</a>
    </li>

    <!-- Dropdown -->


  </ul>
  <!-- Links -->


</div>
<!-- Collapsible content -->

</nav>
</section>
<!--/.Navbar-->
  <!-- nab bar =================-->
    <section>
      <div class="container">
        <!---King & Queen -->
        @php
            $i = 1 ;
        @endphp
          @foreach ($parti as $p)


<a href="../Homeviews/{{ $p->id }}/{{$cata}}/1" style="color : black;">
        <div class="row">

            <div class="col-sm-12">
           <div class="card shop">
              <img class="card-img-top m" src="../images/{{ $p->photoURL }}" alt="Card image cap" >
              <div class="card-footer">
                  <h5 class="description"> {{ $i++ }}. {{ $p->name }}</h4>
              </div>
            </div>
          </div>
     </div>
    </a>
     @endforeach


            </div>

                <!---King & Queen -->

      </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../css/MDB/js/jquery-3.3.1.min.js"></script>
    <script src="../css/MDB/js/bootstrap.min.js"></script>
    <script src="../css/MDB/js/mdb.min.js"></script>
    <script src="../css/MDB/js/popper.min.js"></script>

</html>
