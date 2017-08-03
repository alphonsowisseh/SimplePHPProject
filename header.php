<?php if($_SESSION['name'] == '') {
   header( 'Location: index.php' ) ;
} ?>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
            <div class="col-md-12" data-animate="fadeInDown">
                <ul class="menu">
                  <li id="welcom" style="color: #fff">  Welcome <?php echo $_SESSION['name'];?> | <a href="logout.php">Log Out</a>
                  </li>

                </ul>
            </div>
        </div>