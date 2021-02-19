<?php

require_once("./lib/Loader.php");

session_start();

$load = new Loader($_SESSION['email']);

$_SESSION['id'] = $load->userID;

?>

<!doctype html>
<html lang="en">

<head>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />

</head>


<body>

    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .wrapper {
            display: flex;
            align-items: stretch;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }
        }


        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            /* don't forget to add all the previously mentioned styles here too */
            background: #ffffff;
            color: rgb(75, 75, 75);
            transition: all 0.3s;
            text-align: center;
        }

        .showed {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #ffffff;
        }

        /*
        #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #000000;
        }*/

        #sidebar ul p {

            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {

            color: #000000;
            font-weight: 500;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #000000;

        }


        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #ffffff;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .lightbox-gallery {
            /*background-image: linear-gradient(#dbc8f1, #9856e9);
            background-repeat: no-repeat;*/
            color: #000;
            overflow-x: hidden
        }

        .lightbox-gallery p {
            color: #fff
        }

        .lightbox-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: #fff
        }

        @media (max-width:767px) {
            .lightbox-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px
            }
        }

        .lightbox-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px
        }

        .lightbox-gallery .intro p {
            margin-bottom: 0
        }

        .lightbox-gallery .photos {
            padding-bottom: 20px
        }

        .lightbox-gallery .item {
            padding-bottom: 30px
        }


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

        .btn-line-round {
            /**Shadow */
            border: solid;
            border-color: blueviolet;
            border-width: 1px;
            border-radius: 50px 50px 50px 50px;
            width: 50%;
            margin-left: 50px;
            margin-bottom: 2vh;

        }
    </style>
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function(e) {

                $('#sidebar').toggleClass('showed');
            });
        });

        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $(document).ready(() => {
            $("#btn-upload").on('click', () => {
                $("#form-sign").toggle()
                $("#lightbox-row").toggle()
            })
        })
    </script>

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="showed">
            <div class="sidebar-header">
                <img src="./img/cutrcloud-logo.svg" class="img-fluid" style="width:200px;">
            </div>

            <ul class="list-unstyled components">
                <li>
                    <button id="btn-upload" href="#" class="btn btn-line-round">Nuevo</button>

                </li>
                <li>
                    <a href="#">Mi unidad</a>
                </li>
                <li class="active">
                    <a href="userspace.php?section=Images">Imágenes</a>

                </li>
                <li>
                    <a href="userspace.php?section=Audio">Música</a>

                </li>
                <li>
                    <a href="userspace.php?section=Videos">Videos</a>
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
                            <img src="./img/cutrcloud-logo2.svg" class="img-fluid" style="width:200px;">
                            <div class="dropdown ml-auto">
                                <button class="btn btn-outline user-dropdown" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="./img/squirrel.svg" alt="Avatar" class="avatar">
                                    <?= $load->username ?>
                                    <i class="fas fa-sort-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="">
                                    <a class="dropdown-item" href="#">Mi unidad</a>
                                    <a class="dropdown-item" href="userspace.php?section=Images">Imagenes</a>
                                    <a class="dropdown-item" href="userspace.php?section=Audio">Música</a>
                                    <a class="dropdown-item" href="userspace.php?section=Video">Videos</a>
                                    <a class="dropdown-item" href="index.php">Cerrar sesión</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row" id="lightbox-row">
                <div class="col">
                    <div class="lightbox-gallery">
                        <div class="container">
                            <div class="intro">
                                <h2 class="text-center">Lightbox Gallery</h2>
                                <p class="text-center">Find the lightbox gallery for your project. click on any image to open gallary</p>
                            </div>
                            <div class="row photos">
                                <?php
                                if (isset($_REQUEST['section'])) {
                                    echo $load->printSection($_REQUEST['section']);
                                } else {
                                    echo $load->printSection('Images');
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" id="form-sign" style="min-height: 100vh;display:none;">
            
                    <form action="./lib/controller.php" method="POST" enctype="multipart/form-data" class="col-md-3 form-shadow round-10 align-self-center p-3 pt-5 pl-5 mb-5 mt-0 " id="myform">
                        <div class="form-group form-inline ">
                            
                            <input id="file" name="file" type="file" class="file" data-show-preview="false">
                            <small class="form-text text-muted">Tipos de archivos soportados: 'image/jpeg','audio/ogg','video/mpeg' </small>
                        </div>
                       
                        <div class="form-group text-center">
                            <style>
                                #signup {
                                    color: green;
                                }

                                #signup:hover {
                                    color: white;
                                }
                            </style>
                            <button type="submit" class="btn btn-success mt-2 w-100 mr-5">

                                <i class="fa fa-plus"></i>

                                Subir
                            </button>
                            <button type="button" class="btn btn-outline-danger mt-2 w-100 mr-5">

                                Cancelar
                            </button>
                        </div>

                       
                    </form>

                </div>
        </div>
    </div>
    <!-- Optional JavaScript -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>