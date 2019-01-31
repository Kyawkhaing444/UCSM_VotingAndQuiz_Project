<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/MDB/css/mdb.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
<nav class="navbar navbar-expand-lg navbar-dark light-color">

<!-- Navbar brand -->
<a class="navbar-brand " href="../public" style="color:black;"><i class="fas fa-chevron-left"></i></a>
<h2 class="navbar-brand f" href="#" style="color:black;" >Quizz</h2>

<!-- Collapse button -->

<i class="fas fa-bars navbar-toggler" data-toggle="collapse" data-target="#basicExampleNav" style="color:black;" ></i>
<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link b" href="../public" style="color:black;">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="list" style="color:black;">Vote</a>
    </li>
    <li class="nav-item " >
      <a class="nav-link" href="Homeshop" style="color:black;">Shop</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="Homequiz" style="color:black;">Quizz</a>
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
<!--/.Navbar-->
  <!-- nab bar =================-->
  @if(Session::has('quizmessage'))

  <div class="container con">
        <div class="row">
            <div class="col-sm-12">
               <div class="card" style="width:100%;height:100px;vertical-align: center;">
                      <h1 class="card-description text-center">
                              Thank You!
                      </h1>
                      <a href="http://bit.ly/tcregister"><h3>Register as Technology Club Memeber?</h3></a>
               </div>
            </div>
        </div>
    </div>

  @else

    <section>
        <div class="container">
                {!! Form::open(['method'=>'POST','action'=>'QuizUserController@store','files'=>true]) !!}
       @foreach ($quiz as $q)


            <div class="row">
                <div class="col-sm-12">

                    <div class="card" style="margin-top:10px;">
                                <div class="card-header">
                                   {{ $q->id }} .{{ $q->question }}
                                </div>
                                <div class="card-body">
                                    <!-- Default unchecked -->
                                        <!-- Group of default radios - option 1 -->
                                        <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="{{str_replace(' ', '', $q->item1)}}" name="{{ $q->item1 }}">
                                                <label class="custom-control-label" for="defaultGroupExample1">{{ $q->item1 }}</label>
                                            </div>

                                            <!-- Group of default radios - option 2 -->
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="{{str_replace(' ', '', $q->item2)}}" name="{{ $q->item2 }}">
                                                <label class="custom-control-label" for="defaultGroupExample2">{{ $q->item2 }}</label>
                                            </div>

                                            <!-- Group of default radios - option 3 -->
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="{{str_replace(' ', '', $q->item3)}}" name="{{ $q->item3 }}">
                                                <label class="custom-control-label" for="defaultGroupExample3">{{ $q->item3 }}</label>
                                            </div>
                                             <!-- Group of default radios - option 3 -->
                                            <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="{{str_replace(' ', '', $q->item4)}}" name="{{ $q->item4 }}">
                                                    <label class="custom-control-label" for="defaultGroupExample4">{{ $q->item4 }}</label>
                                                </div>
                                </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--==============submit Section==========-->
            <div class="row">
                <div class="col-sm-12"><br>
                    <button type="submit" class="btn btn-info btn-block waves-effect">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
            <!--==============submit Section==========-->
        </div>
    </section>
    @endif


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="css/MDB/js/jquery-3.3.1.min.js"></script>
    <script src="css/MDB/js/bootstrap.min.js"></script>
    <script src="css/MDB/js/mdb.min.js"></script>
    <script src="css/MDB/js/popper.min.js"></script>

</html>
