<!------------ Navbar --------------->
<div class="row "> 
            <div class="col">
                    <nav class="navbar navbar-expand-lg bg-dark-blue" >
                        
                        <a class="navbar-brand" href="index.php"><h5 class=" ">Squirrel Cloud</h5></a>
                        
                            <div class=" dropdown login-dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle"><i class="fa fa-user-o"></i> Login</a>
                                <div class="dropdown-menu dropdown-menu-right login">	
                                    
                                        <form action="./lib/controller.php" method="POST" class="row justify-content-center">
                                            <div class="col-md-4 p-1">
                                                <div class="form-group form-inline m-0">
                                                    <span class="input-group-text">
                                                        <span class="fa fa-user"></span>
                                                    </span>                    
                                                    <input name="email" type="email" class="form-control w-75" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 p-1">
                                                <div class="form-group form-inline m-0">
                                                    <span class="input-group-text ">
                                                        <i class="fa fa-lock"></i>
                                                    </span>                    
                                                    <input name="password" type="password" class="form-control w-75" placeholder="Password" required>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-1">
                                                <button type="submit" class="btn btn-outline-primary">Login</button>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                            
                            <button id="btn-register" class="btn btn-outline-success btn-sm ml-auto" type="button">Register</button>
                            
			
                        
                    </nav>
            </div>
        </div>
        <!------------ /Navbar --------------->