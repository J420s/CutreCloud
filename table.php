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

    .  {
        color: white;
    }

    .bg-dark-blue{
        background-color:rgba(10,17,50,1);
    }

    .bg-gradient{
        background: rgb(2,0,36);
        background: linear-gradient(0deg, rgba(2,0,36,1) 0%, rgba(10,17,50,1) 14%, rgba(10,24,57,1) 37%, rgba(10,34,70,1) 52%, rgba(11,47,87,1) 69%, rgba(11,59,104,1) 82%, rgba(12,82,134,1) 100%);
    }
    .gradient-ubuntu{
        background: rgb(66,11,107);
        background: linear-gradient(180deg, rgba(66,11,107,0.8) 0%, rgba(66,11,102,0.8) 15%, rgba(61,3,3,0.8) 100%);
    }

    .gradient-green{
        background: rgb(11,107,79);
        background: linear-gradient(180deg, rgba(11,107,79,1) 0%, rgba(22,149,88,1) 47%, rgba(45,173,112,1) 94%, rgba(40,181,114,1) 100%);
    }

    .ubuntu{
        background-color:rgba(255,255,255,0.8)
    }

    .container-fluid{
        height: 880px;
        
    }
    .profile-img {
        height:100px;
        width:100px;
        border-radius: 50%;
    }
    
  
  </style>
  <body>
      
    <div class="container-fluid gradient-green p-3">
        <div class="row pb-4" style="">
            <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark-blue rounded">
                        <a class="navbar-brand" href="index.php"><h5 class=" ">Squirrel Cloud</h5></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ">
                                <li class="nav-item active ">
                                    <a class="nav-link " href="list.php">Posts <span class="sr-only">(current)</span></a>
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
            <div class="col-md-2">
                <!-------->
                <div class="card ubuntu pt-3">
                    
                            <img class="card-img-top profile-img mx-auto"  src="./default-profile.jpg" alt="">
                    
                    <div class="card-body text-center">
                        <h4 class="card-title">User name</h4>
                        <small> Last login on: </small>
                    </div>
                </div>
                <ul class="list-group  ">
                    <li class="list-group-item ubuntu">Dashboard</li>
                    <li class="list-group-item ubuntu">Images</li>
                    <li class="list-group-item ubuntu">Music</li>
                    <li class="list-group-item ubuntu">Video</li>
                    <li class="list-group-item ubuntu">Configuration</li>
                </ul>
                <!-------->
            </div>
            <div class="col">
                <div class="row pb-4">
                    <div class="col-md-4">
                        <div class="card ubuntu  ">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card ubuntu  ">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card ubuntu  ">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card ubuntu  ">
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
                        <div class="card ubuntu  ">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ubuntu  ">
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
                        <table class="table ubuntu   rounded">
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