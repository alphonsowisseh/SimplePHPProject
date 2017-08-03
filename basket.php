<?php
require_once('connect_db.php');


if(isset($_POST["add"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(!in_array($_GET["num"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
			'product_id' => $_GET["num"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["qty"]
			);
			$_SESSION["cart"][$count] = $item_array;
			echo '<script>window.location="basket.php"</script>';
		}
		else
		{

			echo '<script>window.location="basket.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'product_id' => $_GET["num"],
		'item_name' => $_POST["hidden_name"],
		'product_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["qty"]
		);
		$_SESSION["cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["num"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="basket.php"</script>';
			}
		}
	}
}
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

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="afterLogin.php">Home</a>
                        </li>
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-12" id="basket">

                    <div class="box">

                        <form method="post" action="basket.php">

                            <h1>Shopping cart</h1>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>

                                        <tr>
																					<td> </td>
                                            <td>  <?php echo $values["item_name"]; ?>
                                            </td>
                                            <td>
                                              <?php echo $values["item_quantity"] ?>
                                            </td>
                                            <td>$ <?php echo $values['product_price']?></td>
                                            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
                                            <td><a href="basket.php?action=delete&num=<?php echo $values["product_id"]; ?>"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        			$total = $total + ($values["item_quantity"] * $values["product_price"]);
            $_SESSION["total"] = $total;
                                        		}
                                        		?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$ <?php echo number_format($total, 2); ?></th>
                                        </tr>
                                        <?php
	}
	?>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="afterLogin.php" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
<div class="pull-right">
                                    
    <a href="checkout.php" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->




                </div>
                <!-- /.col-md-9 -->



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



</body>

</html>
