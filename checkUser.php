<?php
$userMobile=$_POST["userMobile"];

$userPassword=$_POST["userPassword"];
//going to create connection with my cart db
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"cart") or die("connection fail");
$sql="SELECT *FROM USERS_LIST where USER_PHONE='$userMobile' AND USER_PASSWORD='$userPassword'";
$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
$noOfRows=mysqli_num_rows($result);

if($noOfRows==1){
  session_start();
  $ROW=mysqli_fetch_assoc($result);
  $_SESSION["USER"]=$userMobile;
  $_SESSION["NNN"]=$ROW["USER_NAMEE"];
  header("Location: db.php");
}
else{
 echo "user not present";  
header("Location: DailyHeaderHtml.php");
}
 //$userMobile,$userPassword,$userName,$userEmail
 mysqli_close($conn);
 
?>