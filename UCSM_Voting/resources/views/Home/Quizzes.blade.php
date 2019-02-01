@php
use App\Quiz_user;
use Illuminate\Http\Request;

@endphp
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
              #cl{
                margin-top:200px;
              }
              .con{

                text-align:center;
              }
            @media only screen and (max-width: 480px) and (min-width: 250px){
              #cl{
                margin-top:150px;
              }
              #bg{
                margin-top:150px;
              }
              .con{
                margin-top:100px;
              }
            }
            @media only screen and  (min-width: 600px){

              #cl{
                margin-top:230px;
              }
              #bg{
                margin-top:230px;
              }
              .con{
                margin-top:150px;
              }
            }
            @media only screen and  (min-width: 600px){
              #cl{
                margin-top:200px;
              }
              #bg{
                margin-top:200px;
              }
            }
               </style>
  </head>
  <body>
   <!---nav bar =================-->

  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark light-color">

<!-- Navbar brand -->
<a class="navbar-brand " href="../" style="color:black;"><i class="fas fa-chevron-left"></i></a>
<h2 class="navbar-brand f" id="countdowntimer" style="color:black;" >Quizz</h2>

<!-- Collapse button -->

<i class="fas fa-bars navbar-toggler" data-toggle="collapse" data-target="#basicExampleNav" style="color:black;" ></i>
<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link b" href="../Home" style="color:black;">Home
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
      <a class="nav-link" href="http://bit.ly/tclubregister" style="color:black;">Register as club member</a>
    </li>

    <!-- Dropdown -->


  </ul>
  <!-- Links -->


</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
  <!-- nab bar =================-->
  @php
  $request = request();
  $pzea = 0;
  $pz = Quiz_user::where('name',$request->session()->get('name'))->get();

  foreach ($pz as $pze)
    $pzea = $pze->Quiz_id;

  @endphp

@if($pzea != 2 && $pzea != 1 )
  <div class="container" id="cl">
        <div class="row">
              <div style="margin-left:auto;margin-right:auto;" class="text-center">


                   <div class="card-description">
                   You Have 15 minutes for this quiz
                   </div>

                  <button class="btn btn-primary " id="start" >Start Quizz</div>
              </div>
        </div>
      </div>


   @elseif($pzea == 2)


      <div class="container con">
            <div class="row">
                <div class="col-sm-12">
                   <div class="card-body" style="width:100%;height:100px;vertical-align: center;">
                          <h1 class="card-description text-center">
                                  Time up!
                          </h1>
                          <a href="http://bit.ly/tclubregister"><h6>Register as Technology Club Memeber?</h6></a>
                   </div>
                </div>
            </div>
        </div>


    @elseif($pzea == 1)




  <div class="container con">
        <div class="row">
            <div class="col-sm-12">
               <div class="card-body" style="width:100%;height:100px;vertical-align: center;" id="bg">
                      <h1 class="card-description text-center">
                              Thank You!
                      </h1>
                      <a href="http://bit.ly/tcregister"><h6 class="text-center">Register as Technology Club Memeber?</h6></a>
               </div>
            </div>
        </div>
  </div>

    @endif


    <section>
        <div class="container" id="hello">
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
                                                <input type="radio" class="custom-control-input" value= "{{ $q->item1 }}"  id="{{ str_replace(' ','',$q->item1) }}" name="{{ str_replace(' ','',$q->item1) }}">
                                                <label class="custom-control-label" for="{{ str_replace(' ','',$q->item1) }}">{{ $q->item1 }}</label>
                                            </div>

                                            <!-- Group of default radios - option 2 -->
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" value= "{{ $q->item2 }}"  id="{{ str_replace(' ','',$q->item2) }}" name="{{ str_replace(' ','',$q->item1) }}">
                                                <label class="custom-control-label" for="{{ str_replace(' ','',$q->item2) }}">{{ $q->item2 }}</label>
                                            </div>

                                            <!-- Group of default radios - option 3 -->
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" value= "{{ $q->item3 }}"  id="{{ str_replace(' ','',$q->item3) }}" name="{{ str_replace(' ','',$q->item1) }}">
                                                <label class="custom-control-label" for="{{ str_replace(' ','',$q->item3) }}">{{ $q->item3 }}</label>
                                            </div>
                                             <!-- Group of default radios - option 3 -->
                                            <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" value= "{{ $q->item4 }}"  id="{{ str_replace(' ','',$q->item4) }}" name="{{ str_replace(' ','',$q->item1) }}">
                                                    <label class="custom-control-label" for="{{ str_replace(' ','',$q->item4) }}">{{ $q->item4 }}</label>
                                                </div>
                                </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--==============submit Section==========-->
            <div class="row">
                <div class="col-sm-12"><br>
                    <button type="submit" class="btn btn-info btn-block waves-effect" id="submit-btn">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
            <!--==============submit Section==========-->
        </div>
    </section>




    <script>





    document.getElementById('hello').hidden = true;
      document.getElementById('cl').hidden= false;
      document.getElementById('start').onclick = function(){
        document.getElementById('cl').hidden= true;
        document.getElementById('hello').hidden = false;

        var timeleft = 900;
        var secondleft= 60;

    var downloadTimer = setInterval(function(){
    timeleft--;
    secondleft--;

    document.getElementById("countdowntimer").textContent =  Math.floor(timeleft / 60) + ":"+secondleft+" "+" minutes left";
    if(timeleft <= 0 && secondleft <=0 ){
      clearInterval(downloadTimer);
       @php
       $name = $request->session()->get('name');
Quiz_user::where('name','=', $name)->update(['quiz_id' => 2]);

       @endphp
        window.location = "Homequiz";
    }

    },1000);


      };


    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="css/MDB/js/jquery-3.3.1.min.js"></script>
    <script src="css/MDB/js/bootstrap.min.js"></script>
    <script src="css/MDB/js/mdb.min.js"></script>
    <script src="css/MDB/js/popper.min.js"></script>

</html>
