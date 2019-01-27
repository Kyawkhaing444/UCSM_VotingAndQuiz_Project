@extends('layouts.Admin.shop')

@section('content')
<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
          <span style="font-weight: bolder;">Update Shop Item</span>
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
                        {!! Form::model($shop_item,['method'=>'POST','action'=>['ShopitemController@update',$shop_item->id],'files'=>true]) !!}

                        {!! Form::hidden('_method', 'PATCH') !!}

                                          <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon9"><i class="fas fa-user"></i></span>
                                                  </div>

                                                 {!! Form::text('name',$shop_item->name,['class'=>'form-control','placeholder' => 'Name']) !!}

                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="basic-addon10"  style="width:45px;"><i class="fas fa-user"></i></span>
                                                    </div>

                                                      @php
                                                      $sh = [];
                                                      foreach($shop as $s){
                                                         $sh[$s->id] = $s->name;
                                                      }
                                                      @endphp

                                                   {!! Form::select('shop',$sh, null, ['placeholder' => 'Select Catagory Name ...','class'=>'form-control']); !!}

                                                 </div>

                                                 <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="basic-addon11"><i class="fas fa-user"></i></span>
                                                        </div>

                                                       {!! Form::text('price',$shop_item->price,['class'=>'form-control','placeholder' => 'price']) !!}

                                                      </div>


                                                      <div class="input-default-wrapper mt-3">
                                                        <span class="input-group-text mb-3" id="input1"><i class="fas fa-images"></i></span>

                                                        <input type="file" id="photoURL" class="input-default-js" name="photoURL">
                                                        <label class="label-for-default-js rounded-right mb-3" for="photoURL"><span class="span-choose-file">Choose
                                                            file</span>

                                                          <div class="float-right span-browse">Browse</div>

                                                        </label>

                                                      </div>

                                                    <div class="d-flex">

                                                <div class="ml-auto">


                                                            <a href="../../shop" class="btn btn-white waves-effect btn-md" style="float:left;"

                                                              >Cancel</a>


                                                                      <button type="submit" class="btn btn-success waves-effect btn-md"

                                                                        >Update Shop Item</button>

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
