<?php
session_start();
header("Content-Type: text/html;charset=UTF-8");
require_once('connect_db.php');

      $myusername = $_POST['email'];
      $mypassword = $_POST['password'];
      

      $sql = "SELECT * FROM member WHERE email = '".$myusername."' AND password = '".$mypassword."'"; 
      $result=mysqli_query($conn,$sql);

      $count=mysqli_num_rows($result);
      $row = mysqli_fetch_array($result);
$myname = $row['fname'];
      // If result matched $myusername and $mypassword, table row must be over 1 row

      if($count >= 1) {
        //session_register("myusername");

        $_SESSION['name'] = $myname;

        ?>
        <script >
          alert("Welcome <?php echo $myname ?>!");
          location.replace("afterLogin.php");
        </script>
        <?php
        }else {
          ?>
          <script >
            alert("Your username or password is wrong.  Please try again!");
            location.replace("register.php");
          </script>
          <?php
        }



      ?>
