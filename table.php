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

    .bg-dark-blue{
        background-color: #00003E;
    }
    .container-fluid{
        
    }

    
  
  </style>
  <body>
      
    <div class="container-fluid bg-dark p-3">
        <div class="row pb-4" style="">
            <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                        <a class="navbar-brand" href="index.php">BlingBlog</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="list.php">Posts <span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#</a>
                                </li>
                            </ul>
                            <form action="tools/login.php" method="POST" class="form-inline row justify-content-center">
                                <div class="col-md-4  offset-2">
                                    <div class="input-group">
                                        <input type="username" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 bg-dark">
                <!-------->
                <div class="card">
                    <img class="card-img-top" src="./default-profile.jpg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">User name</h4>
                        <small> Last login on: </small>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Dashboard</li>
                    <li class="list-group-item">Images</li>
                    <li class="list-group-item">Music</li>
                    <li class="list-group-item">Video</li>
                    <li class="list-group-item">Configuration</li>
                </ul>
                <!-------->
            </div>
            <div class="col">
                <div class="row pb-4">
                    <div class="col-md-4">
                        <div class="card bg-dark-blue">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table bg-white rounded">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Ultima modificación</th>
                                    <th>Tamaño</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>