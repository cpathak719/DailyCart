<?php
$q = $_REQUEST['x'];
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"cart") or die("connection fail");
   $sql="SELECT *FROM $q ORDER BY OFF DESC";
   $sql2="SELECT *FROM $q ORDER BY OFF DESC";
 $result=mysqli_query($conn,$sql) or die("Query unsuccessful");
 $result2=mysqli_query($conn,$sql) or die("Query unsuccessful");
$s="";

  //$sql="SELECT *FROM ALLCATEGORY";
  //$result=mysqli_query($conn,$sql) or die("Query unsuccessful");
  $catt="";
  if(strcmp("DAL",$q)==0){
    $catt="Daal Shop";
  }
  
  $s.="<div class='catt'>";
  $s.= "<div id='categIn2ndFixed'>Welcome To $catt.</div>";
  $s.="</div>";
  echo $s;
$s='';
  // if(mysqli_num_rows($result)>0){
  //   $i=0;
  //   while($row=mysqli_fetch_assoc($result)){
  //     if($i>=4){
  //       break;
  //     }
    
  //     $s.="<a href='#' class='catItem'>".$row['NAME']."</a>";
  //    $i++;  
  //   }
  //   if($i>=4){
  //     $s.= "<select id='selectOption' >";
  //     $s.= "<option>More</option>";
  //     while($row=mysqli_fetch_assoc($result)){
  //       $s.= "<option >".$row['NAME']."</option>";
  //     }
  //     $s.= "</select>";
  //   }
  // }
  
  
  $s.= "<div id='uploadContent'>
  <span id='OfferButton' value='0'>New Offer Here</span>
  <div id='uploadSide'>
  <div id='sideHeader'>Offers</div>";
  while($ROW=mysqli_fetch_assoc($result2)){

  $s.="<div class='sideItemm'>".$ROW['NAMEE']." ".$ROW['OFF']."%</div>";
  }
  $s.="</div>
  <div id='uploadMulti'>";

  $i=0; 
 while($ROW=mysqli_fetch_assoc($result)){ 

  $s.="<div class='singleData'>
  <div class='upperImg'>
  <p class='itemSaving'>".$ROW['OFF']."%OFF</p>
  <img src='".$ROW['PHOTO']."'class='imagee'></img>
  <p class='itemName'>".$ROW['NAMEE']."</p>
  </div>
  <div class='lowerData'>
  <div class='lowerDataLeft'><p class='itemWeight'>".$ROW['WEIGHT']."kg</p>
  <p class='itemPrice'><i class='fas fa-rupee-sign'></i>".$ROW['PRICE']."</p>
  <p class='itemActualPrice'><i class='fas fa-rupee-sign'></i>".$ROW['REALPRICE']."</p>
  </div>
  <div class='lowerDataRight'>
  <button class='addToCart'id=".$ROW['PRODUCT_ID']." >Add To Cart</button>
  </div>
  </div>
  </div>";
  $i++;
 }

 echo $s;


/*echo"<table border='1px'><tr>
<th>Vegitable</th> <th>price</th</tr>";
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    
    echo "<tr>
    <td>".$row['VEGNAME']."</td>
    <td>".$row['PRICE']."</td>
    </tr>";
  }

}
echo"</table>";
echo $s;
echo $q;*/

mysqli_close($conn);
?>