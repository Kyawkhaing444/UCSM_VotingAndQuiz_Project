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
    <title>ucsm voting</title>
  </head>
  <body>
    <section>
        <div class="container">
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
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="group1">
                                                <label class="custom-control-label" for="defaultGroupExample1">{{ $q->item1 }}</label>
                                            </div>

                                            <!-- Group of default radios - option 2 -->
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="group1">
                                                <label class="custom-control-label" for="defaultGroupExample2">{{ $q->item2 }}</label>
                                            </div>

                                            <!-- Group of default radios - option 3 -->
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="group1">
                                                <label class="custom-control-label" for="defaultGroupExample3">{{ $q->item3 }}</label>
                                            </div>
                                             <!-- Group of default radios - option 3 -->
                                            <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="defaultGroupExample4" name="group1">
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
                    <button class="btn btn-info btn-block waves-effect">Submit</button>
                </div>
            </div>
            <!--==============submit Section==========-->
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="css/MDB/js/jquery-3.3.1.min.js"></script>
    <script src="css/MDB/js/bootstrap.min.js"></script>
    <script src="css/MDB/js/mdb.min.js"></script>
    <script src="css/MDB/js/popper.min.js"></script>

</html>
