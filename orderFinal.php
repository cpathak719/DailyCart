<?php
$q =$_REQUEST['x'];
session_start();
if (strlen($_SESSION['USER'])!=10){
  header("Location: dailySignIn.php");
}
$userMobile=$_SESSION["USER"];
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"cart") or die("connection fail");
   $sql="SELECT *FROM SHOPING_CART_NEW WHERE USER_PHONE=$userMobile";
 $result=mysqli_query($conn,$sql) or die("Query 44 unsuccessful");
 $orderTime=date("h:i:sa");
 $orderDate=date("d/m/y");
 $product_id='';
 $product_ct='';
 $product_img='';
 $product_name='';
 $product_quantity='';
 $product_price='';
 while($ROW=mysqli_fetch_assoc($result)){
    $product_name=$ROW['ITEM_NAME'];  
    $product_ct=$ROW['ITEM_CAT'];
    $product_id=$ROW['ITEM_ID'];
    $product_price=$ROW['ITEM_PRICE'];
    $product_quantity=$ROW['ITEM_QUANTITY'];
    $product_img=$ROW['ITEM_IMAGE'];    
    $sql1="INSERT INTO USER_ORDERR(USER_PHONE,ITEM_NAME,ITEM_CAT,ITEM_ID,ITEM_PRICE,ITEM_QUANTITY,ITEM_IMAGE,ITEM_DATE,USER_ADDRESS)
    values('$userMobile','$product_name','$product_ct','$product_id','$product_price','$product_quantity','$product_img','$orderDate','$q');";
    $result1=mysqli_query($conn,$sql1) or die("Query 44 unsuccessful");
}
header("Location:db.php");
// $s.="</div>";
// echo $s;

/**/
mysqli_close($conn);
?>