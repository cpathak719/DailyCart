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
   $sql="SELECT *FROM USER_ADDRESSS WHERE USER_PHONE='$userMobile' AND USER_ADDRESS='$q'";
 $result=mysqli_query($conn,$sql) or die("Query 44 unsuccessful");
  if(mysqli_num_rows($result)>0){
 echo "<h1>djfldsjflkj</h1><h1>djfldsjflkj</h1><h1>djfldsjflkj</h1><h1>djfldsjflkj</h1><h1>djfldsjflkj</h1><h1>djfldsjflkj</h1>";
  }
  else{
    $sql="INSERT INTO USER_ADDRESSS (USER_PHONE,USER_ADDRESS)VALUES('$userMobile','$q');";
    $result=mysqli_query($conn,$sql) or die("Query 44 unsuccessful");
  }

/**/
mysqli_close($conn);
?>