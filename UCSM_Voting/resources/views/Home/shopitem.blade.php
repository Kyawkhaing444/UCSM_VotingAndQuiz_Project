<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/MDB/css/mdb.css">
    <link rel="stylesheet" href="../css/media.css">
    <title>ucsm voting</title>
  </head>
  <body>
    <section>
      <div class="container">
        <!---King & Queen -->
    @foreach ($shop_item as $s)



          <div class="row">

                <div class="col-sm-12">
               <div class="card shop" style="margin-top:20px;padding-top:10px;">
                    <div class="amount" style="margin-left:70%;">
                            1000 Kyats
                        </div>
                  <img class="card-img-top image" src="../images/{{ $s->photoURL }}" alt="Card image cap"  style="width:90%;margin-left:5%;padding-bottom:10px;height:300px !important;">
                  <div class="card-footer">
                      <h5 class="description"> {{ $s->name }}</h4>
                  </div>
                </div>
              </div>
         </div>
         @endforeach


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
