<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    
    <script src="./jqfloat.min.js"></script>
    <script language="javascript" src="javascripts/jquery.vibrate.min.js"></script>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    .bg-hex{
        background-image: url("./bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .container-fluid{
        height: 750px;
    }

    table {
        background-image: linear-gradient(to bottom, red 0%, blue 100%); /* the gradient */
        background-origin: border-box; /* set background to start from border-box */
        border-spacing: 5px; /* space between each cell */
        border: 5px solid transparent; /* optional */
    }
  </style>
  <body>
      
    <div class="container-fluid bg-hex">
    <div class="row" style="height:200px"></div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="./hex-img.png" class="img-fluid" id="hex">
            </div>
            <div class="col-md-3 offset-1">
                <img src="./hex-audio.png" class="img-fluid" id="hex">
            </div>
            <div class="col-md-3 offset-1">
                <a href="table.php">
                    <img src="./hex-video.png" class="img-fluid" id="hex">
                </a>
                
            </div>
        </div>
    </div>
    
   
    <script>
        $(document).ready(function() {$('.img-fluid').jqFloat()})
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>