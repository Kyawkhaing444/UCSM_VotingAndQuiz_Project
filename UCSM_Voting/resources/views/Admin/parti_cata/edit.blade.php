@extends('layouts.Admin.participant')

@section('content')
<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
          <span style="font-weight: bolder;">Update Participant Catagory</span>
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


                <div class="col-lg-12" style="margin: 32px 8px 16px 4px">
                        {!! Form::model($parti_cata,['method'=>'POST','action'=>['parti_cataController@update',$parti_cata->id],'files'=>true]) !!}

                        {!! Form::hidden('_method', 'PATCH') !!}

                                          <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon9"><i class="fas fa-user"></i></span>
                                                  </div>

                                                 {!! Form::text('name',$parti_cata->name,['class'=>'form-control','placeholder' => 'Name']) !!}

                                                </div>

                                                    <div class="d-flex">

                                                <div class="ml-auto">


                                                            <a href="../../participant" class="btn btn-white waves-effect btn-md" style="float:left;"

                                                              >Cancel</a>


                                                                      <button type="submit" class="btn btn-success waves-effect btn-md"

                                                                        >Update Shop</button>

                                                                </div>

                                                    </div>


                              {!! Form::close() !!}

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
