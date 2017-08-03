<?php

include('connect_db.php');


$num = isset($_GET['num']) ? $_GET['num'] : '';
//empty()
$num = !empty($_GET['num']) ? $_GET['num'] : '';


	$sql ="select * from products where num = " . $num;
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);

?>
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
     #welcom {color: white;}

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
        <?php require('header.php');
?>        

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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.php">
                        <i class="fa fa-shopping-cart"></i> 
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li class=""><a href="afterLogin.php#products">Products</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"> Cart</span></a>
                </div>
                <!--/.nav-collapse -->

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

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
<form name="form1 " method="post" action="basket.php?action=add&num=<?php echo $row["num"]; ?>">
                <div class="col-md-12">

                    <div class="row" id="productMain"><center>
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <?php echo '<img src=" data:image/jpeg;base64,' .base64_encode($row['imgOne']).'"  class="img-responsive">'?>

                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?php echo $row['title']?>
</h1>
                                <p class="price">$<?php echo $row['price']?></p>

  														<div class="col-sm-2"> </div>
	  													<div class="col-sm-2">
																<input type="number" class="form-control" name="qty">
															</div>
																  <div class="col-sm-2"> </div>

                                <p class="text-center buttons">

																	<input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">


                                     <input type="submit" class="btn btn-primary" name="add" value="Add to cart">

                                </p>


                            </div>
                            <center>
                            <div class="row" id="thumbs">
                                

                            </div>
                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Color</h4>
                            <p><?php echo $row['color']?></p>
                            <h4>Description</h4>
                            <p><?php echo $row['des']?></p>
                    </div>

                </div>
</form>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
      </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->

        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
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






</body>

</html>
