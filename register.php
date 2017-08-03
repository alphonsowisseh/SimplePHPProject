<?php    ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="'s Web Programming Project">
  <meta name="author" content="">

    <title>
          ADI
    </title>



    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <script src="js/respond.min.js"></script>
  

    <style>
    text {
      color: #d154a0;
      letter-spacing: 5px;
        font-size: 15px;
    }
    </style>

</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
 <div id="top">
     <div class="container">
         
         <div class="col-md-12" data-animate="fadeInDown">
             <ul class="menu">
                 <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                 </li>
                 <li><a href="register.php">Register</a>
                 </li>

             </ul>
         </div>
     </div>
     <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
         <div class="modal-dialog modal-sm">

             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title" id="Login">Customer login</h4>
                 </div>
                 <div class="modal-body">
                     <form action="login.php" method="post">
                         <div class="form-group">
                             <input type="text" class="form-control" id="email-modal" name="email" placeholder="Email" required="">
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-control" id="password-modal" placeholder="Password" name="password" required="">
                         </div>

                         <p class="text-center">
                             <button class="btn btn-primary" onclick="login()"><i class="fa fa-sign-in"></i> Log in</button>
                         </p>

                     </form>

                     <p class="text-center text-muted">Not registered yet?</p>
                     <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                 </div>
             </div>
         </div>
     </div>

 </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

 <div class="navbar navbar-default yamm" role="navigation" id="navbar">
     <div class="container">
         <div class="navbar-header">
<h3 style="
    margin-top: 12px;
">ADI</h3>

             <div class="navbar-buttons">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                     <span class="sr-only">Toggle navigation</span>
                     <i class="fa fa-align-justify"></i>
                 </button>
                 

             </div>
         </div>
         <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    
                </ul>

            </div>
         <!--/.nav-collapse -->

         <div class="navbar-buttons">


             <!--/.nav-collapse -->

             

         </div>
         <!--/.nav-collapse -->

     </div>
     <!-- /.container -->
 </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>


                        <hr>

                        <form action="registerToDb.php" method="POST">
                            
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="" class="form-control" id="" name="fname" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="" class="form-control" id="" name="lname" required="">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" id="nam" name="email" required="">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="PW" name="password" required="">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" onclick="RegisterUser()"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>


                        <hr>

                         <form action="login.php" method="post">
                         <div class="form-group">
                             <input type="text" class="form-control" id="email-modal" name="email" placeholder="Email" required="">
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-control" id="password-modal" placeholder="Password" name="password" required="">
                         </div>

                         <p class="text-center">
                             <button class="btn btn-primary" onclick="login()"><i class="fa fa-sign-in"></i> Log in</button>
                         </p>

                     </form>
                    </div>
                </div>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->





       <div id="copyright">
     <div class="container">
         <div class="col-md-6">
             <p class="pull-left">© 2017 Alphonso Wisseh | Dewan Chowdhury | Ishaka Maskey</p>

         </div>
         <div class="col-md-6">
             <p class="pull-right">CSc 4370 - Web Programming | E-Commerce Final

             </p>
         </div>
     </div>
 </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->




    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
    <script src="js/js.js"></script>



</body>

</html>
