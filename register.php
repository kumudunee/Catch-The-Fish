<?php include 'server/loginserver.php' ?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="register.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <?php require 'server/config.php' ?>
    <?php include 'server/loginserver.php' ?>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/registerpic01.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>To the Catch the Fish Challenge Arena</p>
                        <a href="index.php" class="btn btn-info">Log In</a>
                    </div>
                    <div class="col-md-9 register-right">
                        
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="" id="home" role="" aria-labelledby="home-tab">
                                <h3 class="register-heading">REGISTER FOR CTF EXPERIENCE</h3>
                                <form action="register.php" method="POST"> 
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name = "username" class="form-control" placeholder="Username *" value="<?php echo $username;?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_1" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_2" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="<?php echo $email; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phoneno" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                       
                                        </div>
                                        <div>
                                        <?php include 'server/error.php' ?>
                                        </div>
                                        <input type="submit" name="reg_user" class="btnRegister"  value="Register"/>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            
                                    
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </body>
        </html>
