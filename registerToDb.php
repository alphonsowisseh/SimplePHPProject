<?php
header("Content-Type: text/html;charset=UTF-8");
require_once('connect_db.php');
include('register.php');
$data_stream = "'".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['password']."'";

$checking_id=$_POST['email'];


$sql="SELECT * FROM member WHERE name='".$checking_id."'";
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);


if($count==0){
  $sql = "INSERT INTO member (fname, lname, email, password)
  VALUES (".$data_stream.")";

  $result = mysqli_query($conn, $sql);
  if($result){
  ?>
  <script >
    alert("Thank you for registering");
    location.replace("register.php");
  </script>
  <?php
  }
  else { ?>
  <script>

    location.replace("register.php");
  </script>
  <?php
  }
  mysqli_close($conn);
}
else{
?>
  <script>
  alert("ID is already taken.");
  location.replace("register.php");
  </script>
  <?php
}

?>
