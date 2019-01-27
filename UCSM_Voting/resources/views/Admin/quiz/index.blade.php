@extends('layouts.Admin.quiz')

@section('content')
<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
          <span style="font-weight: bolder;">Quizzes</span>
        </h4>

        <form class="d-flex justify-content-center">
          <!-- Default input -->
          <input type="search" placeholder="Search" aria-label="Search" class="form-control">
          <button class="btn btn-primary btn-sm my-0 p" type="submit">
            <i class="fas fa-search"></i>
          </button>

        </form>

      </div>

    </div>
    <!-- Heading -->

    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card content-->
          <div class="card-body">

                <nav class=" md-pills nav-justified">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">

                          <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Add Quiz</a>

                        </div>
                      </nav>

                      <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"  style="background-color : white;margin-top:32px;">

                              <div class="col-lg-12" style="margin: 16px 8px 16px 4px" >
                                          {!! Form::open(['method'=>'POST','action'=>'QuizController@store','files'=>true]) !!}

                                                  <div class="input-group mb-3">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon9"  style="width:45px;"><i class="fas fa-user"></i></span>
                                                          </div>

                                                         {!! Form::text('question',null,['class'=>'form-control','placeholder' => 'Question']) !!}

                                                       </div>
                                                       <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                              <span class="input-group-text" id="basic-addon10"  style="width:45px;"><i class="fas fa-user"></i></span>
                                                            </div>

                                                           {!! Form::text('item1',null,['class'=>'form-control','placeholder' => 'Item1']) !!}

                                                         </div>
                                                         <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text" id="basic-addon11"  style="width:45px;"><i class="fas fa-user"></i></span>
                                                                </div>

                                                               {!! Form::text('item2',null,['class'=>'form-control','placeholder' => 'item2']) !!}

                                                             </div>
                                                             <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                      <span class="input-group-text" id="basic-addon12"  style="width:45px;"><i class="fas fa-user"></i></span>
                                                                    </div>

                                                                   {!! Form::text('item3',null,['class'=>'form-control','placeholder' => 'item3']) !!}

                                                                 </div>
                                                                 <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                          <span class="input-group-text" id="basic-addon13"  style="width:45px;"><i class="fas fa-user"></i></span>
                                                                        </div>

                                                                       {!! Form::text('item4',null,['class'=>'form-control','placeholder' => 'item4']) !!}

                                                                     </div>
                                                                 <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                          <span class="input-group-text" id="basic-addon14"  style="width:45px;"><i class="fas fa-user"></i></span>
                                                                        </div>

                                                                       {!! Form::text('answer',null,['class'=>'form-control','placeholder' => 'Answer']) !!}


                                                                        <div class="justify-content-center ">
                                                                              <button type="submit" class="btn btn-success waves-effect btn-md" style="size: 50px;padding-right: 300px ; padding-left:300px;

                                                                              margin-top: 32px;
                                                                              margin-left: 100px;
                                                                              margin-right: 64px;

                                                                              "  >Add Question</button>
                                                                            </div>



                                      {!! Form::close() !!}
                            </div>
                            </div>


                              </div>
                          </div>



            <canvas id="myChart"></canvas>

          </div>

        </div>
        <!--/.Card-->

      </div>
      <!--Grid column-->
    </div>
  </div>
        <!--/.Card-->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
</main>
<!--Main layout-->

@endsection
