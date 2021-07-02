<?php
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
  // $s.= "<div id='cartDesign'>
  // <div id='leftcartDesign'></div>
  // <div id='rightcartDesign'></div>
  // </div>";
//  while($ROW=mysqli_fetch_assoc($result)){
//   echo"<p>". $ROW['PRODUCT_ID']."</p>";
//   echo"<p>". $ROW['CATEGORY_NAME']."</p>";
//   echo"<p>".$ROW['PRODUCT_NAME']."</p>";
//   echo"<p>".$ROW['QUANTITY']."</p>";
//   echo"<p>". $ROW['PRICE']."</p>";
//   echo"<p>". $ROW['IMAGE']."</p>";     

//  }
// $s.="</div>";
// echo $s;
$s='';
 $s.="<div class='catt'>";
 $s.= "<div id='categIn2ndFixed'>Choose delivery address for each item</div>";
 $s.="<button onclick='placeOrder()'id='checkOutFinal'>Continue</button>";
 $s.="</div>";
 echo $s;
 $s="<div id='uploadContent'>
  <div id='cartDesign'>
  <div id='leftCheckDesign'>";
  $total=0;
  $count=0;
  while($ROW=mysqli_fetch_assoc($result)){
    $total+=(int)$ROW['ITEM_PRICE']*$ROW['ITEM_QUANTITY'];
    $count+=$ROW['ITEM_QUANTITY'];
  $s.="<div id='p".$ROW['ID']."'  class='cartDesignCont'>
  <img src='".$ROW['ITEM_IMAGE']."'id='leftPhoto'/>
  <div id='rightToPhoto'>
  <div id='rightToPhotoLeft'>
  <p id='para'>".$ROW['ITEM_NAME']."</p>
  <p >Quantity
  <select id='q".$ROW['ID']."'class='quantityOfItem'>Quantity
  <option>".$ROW['ITEM_QUANTITY']."</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  </select>
  </p>
  <a id='".$ROW['ID']."'class='deleteItem'href='#'>Delete</a>
  </div>
  <div id='rightToPhotoRight'><span id='r".$ROW['ID']."' class='Rs'><i class='fas fa-rupee-sign'></i> ". $ROW['ITEM_PRICE']." </span></div>
  </div>
  </div>";
  }
  $sql="SELECT *FROM USER_ADDRESSS WHERE USER_PHONE='$userMobile'";
  $result=mysqli_query($conn,$sql) or die("Query 44 unsuccessful");
  $s.="</div>
  
  <div id='rightCheckDesign'>
  <div  class='formUpCheck'>
    <div  class='pCheck' >Select address options.</div></br>
    
    <select onchange='updateAddress()' id='setAddress'>
    <option class='optionAddress'>Other</option>";
    $row='';   
     while($row=mysqli_fetch_assoc($result)){
    $s.="<option class='optionAddress'>".$row['USER_ADDRESS']."</option>";
     }
    $s.=" </select>
    </br>
    </br>
    <div id='newAddress'>
    <textarea id='textAddress' rows='5'placeholder='Enter full address'></textarea>
    <button id='setAdd' onclick='setAddToSelect()'>Save</button>
    </div>
    </br>    <div  class='pCheck' >Select payment methods.</div>
    <div id='paymentOption'>
    <p class='singleRadio'><input class='payInput' type='radio' name='payOption'checked/> 
    <label class='payLabel'>add creadit/debit card.</label>
    </p>
    <p class='singleRadio'>
    <input class='payInput' type='radio' name='payOption'checked/> 
    <label class='payLabel'>Net Banking.</label>
    </p>
    <p class='singleRadio'>  
    <input class='payInput' type='radio' name='payOption'checked/> 
    <label class='payLabel'>other UPI apps</label>
    </p>
    <p class='singleRadio'>
    <input class='payInput' type='radio' name='payOption'checked/>
     <label class='payLabel'>Pay on delivery</label>
     </p>
  </div>
  </div>
  <div id='rightCheckPaymentDesign'>
  <p class='subTotal'style='color:#403f3d'>Total(<span id='totalList'>$count</span> items)<span id='totalPrice'>$total</span> Rs</p>
  <button onclick='placeOrder()'id='checkOut'>procede to checkout</button>
  </div>
  



</div>
  
  

  </div>
  </div>
 </div>";
 echo $s;
/**/
mysqli_close($conn);
?>