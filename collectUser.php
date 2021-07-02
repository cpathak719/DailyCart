<?php
$userName=$_POST["userName"];
$userPassword=$_POST["userPassword"];
$userMobile=$_POST["userMobile"];
$userEmail=$_POST["userEmail"];
//going to create connection with my cart db
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"cart") or die("connection fail");
$sql="SELECT *FROM USERS_LIST WHERE USER_PHONE='$userMobile' AND USER_PASSWORD='$userPassword'";
$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
$noOfRows=mysqli_num_rows($result);
if($noOfRows>0){
  echo "User is already present";
}
else{
   $sql="INSERT INTO USERS_LIST(USER_PHONE,USER_PASSWORD,USER_NAMEE,USER_GMAIL)VALUES('$userMobile','$userPassword','$userName','$userEmail')";
 $result=mysqli_query($conn,$sql) or die("Query unsuccessful");
 header("Location: dailySignIn.php");
}
 //$userMobile,$userPassword,$userName,$userEmail
 mysqli_close($conn);
?>