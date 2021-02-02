<?php 

require_once("./lib/Loader.php");

session_start();

$load = new Loader($_SESSION['email']);

$_SESSION['id'] = $load -> userID;

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/myCode.js"></script>

  <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <div class="gradient-green" id="bg">
        <!------------ Navbar --------------->
        <div class="row ">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-dark-blue">

                    <a class="navbar-brand" href="index.php">
                        <h5 class=" ">Squirrel Cloud</h5>
                    </a>
                    <div class=" dropdown login-dropdown ml-auto">
                        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle"><i class="fa fa-user-o p-1"></i><?= $load -> username?></a>
                        <div class="dropdown-menu dropdown-menu-right login">

                        </div>
                    </div>
                    
                </nav>
            </div>
        </div>
        <!------------ /Navbar --------------->

        <!------------ Content --------------->
        <div class="row p-4">
            <!------------ Right panel --------------->
            <div class="col-md-2">
                <!-------->
                <div class="card b-white pt-3">

                    <img class="card-img-top profile-img mx-auto" src="./img/default-profile.jpg" alt="">

                    <div class="card-body text-center">
                        <h4 class="card-title">User name</h4>
                        <small> Last login on: </small>
                    </div>
                </div>
                <ul class="list-group  ">
                    <li class="list-group-item b-white">Dashboard</li>
                    <li class="list-group-item b-white">Images</li>
                    <li class="list-group-item b-white">Music</li>
                    <li class="list-group-item b-white">Video</li>
                    <li class="list-group-item b-white">Configuration</li>
                </ul>
                <!-------->
            </div>
            <!------------ /Right panel --------------->

            <!------------ Files --------------->
            <div class="col">

                <?= $load -> printImages()?>
                <div class="row justify-content-center">
                    <div class="col-md-1">
                        <button id="btn-upload" type="button" class="btn btn-outline-primary btn-lg">
                            <i class="fa fa-plus" style="color:black"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!------------ /Files --------------->
        </div>
        <!------------ /Content --------------->
    </div>
    <div class="container-fluid container-custom to-front pt-5">

        <div class="row justify-content-center pt-5" style="height:75vh;">

            <div class="col-md-4 round-10 f-white bg-dark align-self-center p-2 border border-primary" style="opacity: 0.8;">
                <form action="./lib/controller.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="file" class="form-control-file" name="file" id="">
                        <small id="fileHelpId" class="form-text text-muted">Help text</small>
                    </div>
                    <form class="form-inline">
                        <div class="form-group">
                            <button type="button" id="btn-upload-cancel" class="btn btn-outline-danger"> Cancel </button>
                            <button type="submit" class="btn btn-primary pull-right"> Upload </button>
                        </div>
                    </form>
                </form>
            </div>

        </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>