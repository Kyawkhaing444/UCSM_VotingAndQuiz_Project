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
    <link rel="stylesheet" href="../css/media2.css">
    <title>ucsm voting</title>
  </head>
  <body>
    <section>
      <div class="container">
        <!---King & Queen -->
           <div class="row">

             <div class="col-sm-12">
            <div class="card kq">
           <img class="card-img-top image"src="../images/{{ $parti->photoURL }}" alt="Card image cap" style="margin-top:10px;">
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
