<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="sidebar.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="sidebar.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</head>

<body>

    <div class="wrapper">
        <div id="content" class="w-100">

            <div class="container-fluid ">
                <div class="row">
                    <div class="col p-0 ">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <img src="../img/cutrcloud-logo2.svg" class="img-fluid"style="width:200px;">
                        </nav>
                    </div>
                </div>
                <div class="row justify-content-center">
                    
                    <form action="./lib/controller.php" method="POST" class="col-md-3 round-10 align-self-center p-2" id="myform" style="opacity: 0.8;">
                            <div class="row form-group justify-content-center">
                            <div class="col-md-10">
                                <label>User name:</label>
                                <input type="text" class="form-control" name="username" id="" placeholder="Macarrones007">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            </div>
                            <div class="row form-group justify-content-center ">
                            <div class="col-md-10">
                                <label>Email:</label>
                                <input type="text" class="form-control" name="email" id="" placeholder="Macarrones007">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            </div>
                            <div class="row form-group justify-content-center ">
                            <div class="col-md-10">
                                <label>Password:</label>
                                <input type="password" class="form-control" name="password" id="" placeholder="Macarrones007">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            </div>
                            <div class="row form-group justify-content-center ">
                            <div class="col-md-10">
                                <label>Re-type password:</label>
                                <input type="text" class="form-control" name="password2" placeholder="Macarrones007">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            </div>
                            <div class="row form-group justify-content-center ">
                            <div class="col text-center">
                                <a name="" id="btn-form-login" class="btn btn-outline-primary" href="#" role="button">Login</a>
                            </div>
                            <div class="col text-center">
                                <button type="submit" class="btn btn-success"> Register </button>
                            </div>
                            </div>
                        </form>
                    </div>
                
            </div>
            


        </div>
    </div>
    <!-- Optional JavaScript -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>