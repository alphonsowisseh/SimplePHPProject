
<?php

require_once('connect_db.php');



$searchText = isset($_POST['searchText']) ? $_POST['searchText'] : '';
//$searchText = strtolower($searchText);

if($searchText)  {

    $sql = "select * from products where des like '%$searchText%' OR title like '%$searchText%' OR price like '%$searchText%' OR color like '%$searchText%' OR HOM like '%$searchText%'";

}

else{

  $sql = "select * from products";
}

$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="'s Web Programming Project">
    <meta name="author" content="">
    <link href="../stripe.css" rel="stylesheet" type="text/css">


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

    <link rel="shortcut icon" href="favicon.png">

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
                 <div id="main-slider" style="width: 1108px;height: 600px; overflow: hidden;">
                     <div class="item">
                         <img src="img/mainSlider1.jpg" alt="" class="img-responsive">
                     </div>
                     <div class="item">
                         <img class="img-responsive" src="img/mainSlider2.jpg" alt="">
                     </div>
                     <div class="item">
                         <img class="img-responsive" src="img/mainSlider3.jpg" alt="">
                     </div>
                     <div class="item">
                         <img class="img-responsive" src="img/mainSlider4.jpg" alt="">
                     </div>
                 </div>
                 <!-- /#main-slider -->
             </div>
         </div>

         <!-- *** ADVANTAGES HOMEPAGE ***
_________________________________________________________ -->
         
         <!-- /#advantages -->

         <!-- *** ADVANTAGES END *** -->

         <!-- *** HOT PRODUCT SLIDESHOW ***
_________________________________________________________ -->
         <div id="hot">

             <div class="box">
                 <div class="container">
                     <div class="col-md-12">
                         <h2 id="products">Featured Products</h2>
                     </div>
                 </div>
             </div>


             <!-- /.container -->

         </div>


<!-- _________________________________________________________  product lists -->

<div id="all">

  <div id="content">

      <div class="container">

          <div class="col-md-12">
<div class="row products">
<table>
    <tbody>
  <?php

    while($row = $result->fetch_assoc())
    {
   ?>
<div class="col-md-3 col-sm-4">
    <div class="product">
            <?php echo '<img src=" data:image/jpeg;base64,' .base64_encode($row['imgOne']).'"  class="img-responsive">'?>

        <div class="text">
            <h3><?php echo $row['title']?></h3>
            <p class="price">$<?php echo $row['price']?></p>
            <p class="buttons">

                <a class="btn btn-primary" href="detail.php?num=<?php echo $row['num']?>"> <i class="fa fa-shopping-cart"></i>View detail</a>
            </p>
        </div>
        <!-- /.text -->

    </div>
    
    
         
    <!-- /.product -->
</div>
        
<?php
  }
?>
<!----------------------->


</div>
</tbody>
</table>
</div>
</div>


      </div>
    </div>

<!-- /.products -->


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
        <script>// Create a Stripe client
var stripe = Stripe('pk_test_BiIPf51pEAclxnFEqExOQJtb');

// Create an instance of Elements
var elements = stripe.elements();
            
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    lineHeight: '24px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server
      stripeTokenHandler(result.token);
    }
  });
});</script>


</body>

</html>
