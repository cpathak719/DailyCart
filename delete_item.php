<?php
session_start();

if (strlen($_SESSION['USER'])!=10){
  header("Location: dailySignIn.php");
}
$userMobile=$_SESSION["USER"];
$q =$_REQUEST['x'];
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"cart") or die("connection fail");
$ind=strpos($q,"@");


if($ind){
 
  $itemId=(int)substr($q,0,$ind);
  $quan=(int)substr($q,$ind+1,strlen($q));
  $sql="UPDATE SHOPING_CART_NEW SET ITEM_QUANTITY=$quan WHERE  ID=$itemId AND USER_PHONE='$userMobile'";
  $result=mysqli_query($conn,$sql) or die("Query unsuccessful");
  $sql="SELECT ITEM_QUANTITY,ITEM_PRICE FROM SHOPING_CART_NEW WHERE USER_PHONE=$userMobile";
  $result=mysqli_query($conn,$sql) or die("Query unsuccessful");
 
}
else{
  $q=(int)$q;
  
$sql="DELETE  FROM SHOPING_CART_NEW WHERE  ID=$q AND USER_PHONE=$userMobile";
$result=mysqli_query($conn,$sql) or die("Query unsuccessful");

$sql="SELECT *FROM SHOPING_CART_NEW WHERE USER_PHONE=$userMobile";
$result=mysqli_query($conn,$sql) or die("Query 44 unsuccessful");
}
$price=0;
$quantity=0;
while( $ROW=mysqli_fetch_assoc($result)){
  $price+=(((int)$ROW['ITEM_QUANTITY'])*((int)$ROW['ITEM_PRICE']));
  $quantity+=((int)$ROW['ITEM_QUANTITY']);
}
echo strval($price)."@".strval($quantity);


mysqli_close($conn);

?>