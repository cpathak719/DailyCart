<?php
session_start();
if (isset($_SESSION['USER'])){
  //header("Location: dailySignIn.php");
$userMobile=$_SESSION['USER'];
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"cart") or die("connection fail");
$sql="SELECT ITEM_QUANTITY FROM SHOPING_CART_NEW WHERE USER_PHONE=$userMobile";
$result=mysqli_query($conn,$sql) or die("Query  55 unsuccessful");
$total=0;
while($row=mysqli_fetch_assoc($result)){
  $total+=$row['ITEM_QUANTITY'];
}
echo $total;
mysqli_close($conn);
}
else{
  echo "0";
}

?>