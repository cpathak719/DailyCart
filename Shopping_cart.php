<?php
session_start();
if (strlen($_SESSION['USER'])!=10){
  header("Location: dailySignIn.php");
}
else{
//echo "<h1>".$_SESSION["USER"]."xxxxxxxxxxxxxxxx</h1>";
$userMobile=$_SESSION['USER'];
}

$q = $_REQUEST['x'];
$ind=strpos($q,"@");
$category_name=substr($q,0,$ind);
$product_id=(int)(substr($q,$ind+1));

//header("Location: dailyHeaderHtml.php");

//we are going to create an connection with sql
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"cart") or die("connection fail");
$sql="SELECT * FROM SHOPING_CART_NEW WHERE USER_PHONE='$userMobile'AND ITEM_ID='$product_id'AND ITEM_CAT='$category_name'";
$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
//echo mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
  $row=mysqli_fetch_assoc($result);
  $temp=(int)$row['ITEM_QUANTITY'];
  
  $temp+=1;
 
 //echo $temp;
  //echo gettype($temp);
  $sql="UPDATE SHOPING_CART_NEW SET ITEM_QUANTITY=$temp WHERE USER_PHONE='$userMobile'AND ITEM_ID='$product_id'AND ITEM_CAT='$category_name'";
  $result=mysqli_query($conn,$sql) or die("Query unsuccessful");
}
else{
 
//  echo "else";
$sql="SELECT NAMEE,PRICE,PHOTO FROM $category_name WHERE ID=".$product_id."";
 $result=mysqli_query($conn,$sql) or die("Query 1 unsuccessful");
 $row=mysqli_fetch_assoc($result);
 $product_name=$row['NAMEE'];
 $price=$row['PRICE'];
 $product_image=$row['PHOTO'];
 $quantity=1;
 /*echo $product_id;
 echo $category_name;
 echo $product_name;
 echo $quantity;
 echo $price;
 echo $product_image;*/
 //echo $userMobile;
$sql="INSERT INTO SHOPING_CART_NEW (USER_PHONE,ITEM_NAME,ITEM_CAT,ITEM_ID,ITEM_PRICE,ITEM_QUANTITY,ITEM_IMAGE)VALUES('$userMobile','$product_name','$category_name','$product_id','$price','$quantity','$product_image')";
$result=mysqli_query($conn,$sql) or die("Query 25 unsuccessful");//,'$product_name','$category_name','$product_id','$price','$quantity','$product_image'
}
// $sql="SELECT COUNT(ID) FROM SHOPING_CART";
// $result=mysqli_query($conn,$sql) or die("Query unsuccessful");
// $row=mysqli_fetch_assoc($result);
 


mysqli_close($conn);

?>