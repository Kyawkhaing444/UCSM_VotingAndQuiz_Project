<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 id="timer"></h1>
    <script>
            var counter = 0;
            var timeleft = 65;
            function convertSeconds(s){
                var min = floor(s / 60);
                var sec = s % 60;
                return min + ':' + sec;
            }
  function setup(){
      noCanvas();
    var timer = select('#timer');
    timer.html(convertSeconds(timeleft-counter));

    function timeit(){
      counter++;
      timer.html(convertSeconds(timeleft-counter));
    }

    setInterval(timeit , 1000);

  }

    </script>
</body>
</html>
