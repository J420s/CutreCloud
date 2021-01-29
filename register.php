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

    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body>
      
    <div class="container-fluid gradient-green p-3">
        <!------------ Navbar --------------->
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
                                <div class="col-md-4 offset-1">
                                    <div class="input-group">
                                        <input type="username" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-1 p-0">
                                    <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Login</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit">Register</button>
                                </div>
                                
                            </form>
                        </div>
                    </nav>
            </div>
        </div>
        <!------------ /Navbar --------------->
        
        <div class="row justify-content-center">
            
                <form action="" class="col-md-4 myform bg-dark">
                    <div class="form-group bg-warning">
                      <label>User name:</label>
                      <input type="text" class="form-control w-50" name="" id="" placeholder="Macarrones007">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                      <label>Email:</label>
                      <input type="text" class="form-control w-50" name="" id="" placeholder="Example@email.com">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                      <label>Password:</label>
                      <input type="text" class="form-control w-50" name="" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                      <label>Re-type password:</label>
                      <input type="text" class="form-control w-50" name="" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                </form>
            
        </div>
      
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>