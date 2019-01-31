@extends('layouts.Admin.dashboard')

@section('content')
<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">

    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

      <!--Card content-->
      <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
          <span style="font-weight: bolder;">Dashboard</span>
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
    @foreach ($parti_cata as $pc)

                <section>
                        <div class="container">
                           <div class="row">
                               <div class="col-md-12"><br>
                                       <div class="card card-md">
                                           <div class="card-header">
                                               <h3 class="card-description text-center">{{ $pc->name }}</h3>
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
                                                                  <th scope="col">Name</th>
                                                                  <th scope="col">Point</th>

                                                                </tr>
                                                              </thead>
                                                        @foreach ($parti as $p)
                                                        @php
                                                        $cata = parti_cata::find($p->cata_id);
                                                     @endphp
                                                     @if ($cata == $pc->name)

                                                       <tbody>

                                                         <tr>
                                                           <th scope="row">1</th>
                                                           <td>{{ $p->name }}</td>
                                                           <td>{{ $p->point }}</td>

                                                         </tr>

                                                       </tbody>
                                                       @endif
            @endforeach
                                                     </table>
                                               </div>
                                           </div>
                                       </div>
                               </div>
                           </div>
                        </div>
                       </section>
                       @php
                           $pa = participant::where('cata_id','=',$pc->id)->sortByDesc('point');
                           $va = participant::where('cata_id','=',$pc->id)->count();
                           $a=[];
                           $apo = [];
                           foreach($pa as $ai){
                             if($i < 3){
                                 $a[$i] = $ai->name;
                                 $apo[$i] = $ai->point;
                             }
                           }
                       @endphp
                       <script>
                            window.onload = function() {

                                var p1 =  {{ $a[0] }};
                                var p2 =  {{ $a[1] }};
                                var p3 = {{ $a[2]}};
                                var va = {{ $va }};

                                var po1 = {{ $apo[0] }};
                                var po2 =  {{ $apo[1] }};
                                var po3 = {{ $apo[2]}};

                                var v1 = (po1/va)*100;
                                var v2= (po2/va)*100;
                                var v3 = (po3/va)*100;

                            var chart = new CanvasJS.Chart("chartContainer", {
                                theme: "light2", // "light1", "light2", "dark1", "dark2"
                                exportEnabled: true,
                                animationEnabled: true,
                                title: {
                                    text: ""
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
                                        { y: v1, label: p1 },
                                        { y: v2, label: p2 },
                                        { y: v3, label: p3 }

                                    ]
                                }]
                            });
                            chart.render();

                            }
                            </script>



    @endforeach

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
