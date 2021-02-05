<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="sidebar.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="sidebar.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>

</head>

<body>

    <style>
        .user-dropdown {
            border: 0;
            color: blue
        }

        .avatar {
            vertical-align: middle;
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }
        .btn-line-round{
            /**Shadow */
            border: solid;
            border-color: blueviolet;
            border-width: 1px;
            border-radius: 50px 50px 50px 50px;
            width:50%;
            margin-left: 50px;
            margin-bottom: 2vh;
            
        }
        
    </style>

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar"class="showed">
            <div class="sidebar-header">
                <img src="../img/cutrcloud-logo.svg" class="img-fluid" style="width:200px;">
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="btn dropdown-toggle  btn-line-round ">Nuevo</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Imagen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Mi unidad</a>
                </li>
                <li class="active">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Imágenes</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Nueva carpeta</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Música</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Nueva carpeta</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Videos</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Nueva carpeta</a>
                        </li>
                    </ul>
                </li>



            </ul>
        </nav>
        <div id="content" class="w-100">

            <div class="container-fluid ">
                <div class="row">
                    <div class="col p-0 ">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button type="button" id="sidebarCollapse" class="btn mr-4" style="border:0;">
                                <i class="fas fa-hamburger"></i>
                            </button>
                            <img src="../img/cutrcloud-logo2.svg" class="img-fluid" style="width:200px;">
                            <div class="dropdown ml-auto">
                                <button class="btn btn-outline user-dropdown" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../img/squirrel.svg" alt="Avatar" class="avatar">
                                    Username
                                    <i class="fas fa-sort-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="">
                                    <a class="dropdown-item" href="#">Mi unidad</a>
                                    <a class="dropdown-item" href="#">Imagenes</a>
                                    <a class="dropdown-item" href="#">Música</a>
                                    <a class="dropdown-item" href="#">Videos</a>
                                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="lightbox-gallery">
                <div class="container">
                    <div class="intro">
                        <h2 class="text-center">Lightbox Gallery</h2>
                        <p class="text-center">Find the lightbox gallery for your project. click on any image to open gallary</p>
                    </div>
                    <div class="row photos">
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/original/02_o_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/original/02_o_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190718/gallery/original/03_r_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190718/gallery/original/03_r_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/original/01_b_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/original/01_b_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/original/02_o_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/original/02_o_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/original/01_b_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/original/01_b_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190718/gallery/original/03_r_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190718/gallery/original/03_r_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190718/gallery/original/03_r_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190718/gallery/original/03_r_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/original/01_b_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/original/01_b_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/original/02_o_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/original/02_o_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190718/gallery/original/03_r_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190718/gallery/original/03_r_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/original/01_b_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190715/gallery/original/01_b_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/original/02_o_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/original/02_o_car.jpg"></a></div>
                        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg" data-lightbox="photos"><img class="img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190717/gallery/original/04_g_car.jpg"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>