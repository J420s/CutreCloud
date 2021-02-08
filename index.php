<?php if(session_id() != '' || isset($_SESSION))   $_SESSION = array(); session_destroy();?>

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
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</head>

<body>
    <style>
        .form-shadow {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .wrapper {
            display: flex;
            align-items: stretch;
        }
    </style>
    <script>
        $(document).ready(() => {
            $("#btn-login,#or-login,#btn-signup").on('click', () => {
                $("#form-sign").toggle()
                $("#form-log").toggle()
                $("#btn-login,#btn-signup").toggle()
            })
        })
    </script>
    <div class="wrapper">
        <div id="content" class="w-100">
            <div class="container-fluid">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"><img src="./img/cutrcloud-logo2.svg" class="img-fluid" style="width:200px;"></a>
                    <a name="" id="btn-login" class="btn btn-outline-primary ml-auto" href="#" role="button" style="display: none;">Login</a>
                    <a name="" id="btn-signup" class="btn btn-outline-success ml-auto" href="#" role="button">Sign Up</a>
                </nav>
                <div class="row justify-content-center" id="form-log" style="min-height: 100vh;">
                    <form action="./lib/controller.php" method="POST" class="col-md-3 form-shadow round-10 align-self-center p-3 pt-5 pl-5 mb-5 mt-0 ">

                        <div class="form-group form-inline ">
                            <span class="input-group-text">
                                <span class="fa fa-at"></span>
                            </span>
                            <input type="text" class="form-control text-center w-75" name="email" id="" placeholder="Email">

                        </div>
                        <div class="form-group form-inline ">
                            <span class="input-group-text ">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input name="password" type="password" class="form-control text-center w-75" name="password" placeholder="Password" required>

                        </div>
                        <div class="form-group form-inline text-center">
                            <style>
                                #signup {
                                    color: green;
                                }

                                #signup:hover {
                                    color: white;
                                }
                            </style>
                            <button type="submit" class="btn btn-outline-primary mt-2 w-100 mr-5">

                                <i class="fa fa-user"></i>

                                Log In
                            </button>
                        </div>

                    </form>
                </div>
                <div class="row justify-content-center" id="form-sign" style="min-height: 100vh;display:none;">
                    <form action="./lib/controller.php" method="POST" class="col-md-3 form-shadow round-10 align-self-center p-3 pt-5 pl-5 mb-5 mt-0 " id="myform">
                        <div class="form-group form-inline ">
                            <span class="input-group-text">
                                <span class="fa fa-user"></span>
                            </span>
                            <input type="text" class="form-control text-center w-75" name="username" id="" placeholder="Username">

                        </div>
                        <div class="form-group form-inline ">
                            <span class="input-group-text">
                                <span class="fa fa-at"></span>
                            </span>
                            <input type="text" class="form-control text-center w-75" name="email" id="" placeholder="Email">

                        </div>
                        <div class="form-group form-inline ">
                            <span class="input-group-text ">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input name="password" type="password" class="form-control text-center w-75" name="password" placeholder="Password" required>

                        </div>
                        <div class="form-group form-inline ">
                            <span class="input-group-text ">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input name="password" type="password" class="form-control text-center w-75" name="confirm_password" placeholder="Confirm password" required>

                        </div>
                        <div class="form-group form-inline text-center">
                            <style>
                                #signup {
                                    color: green;
                                }

                                #signup:hover {
                                    color: white;
                                }
                            </style>
                            <button type="submit" class="btn btn-outline-success mt-2 w-100 mr-5">

                                <i class="fa fa-user-plus"></i>

                                Sign Up
                            </button>
                        </div>

                        <span>
                            Already have an account?
                            <button class="btn btn-outline mt-2 " id="or-login" style="border:0;color:blue">Log In <i class="fa fa-user"></i></button>
                        </span>
                    </form>

                </div>


            </div>

        </div>



    </div>
    </div>
    <!-- Optional JavaScript -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>