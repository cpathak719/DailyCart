<?php
session_start();
$userMobile=$_SESSION['USER'];
//if(strlen($userMobile)==10){
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"cart") or die("connection fail");
$sql="SELECT * FROM USERS_LIST WHERE USER_PHONE=$userMobile";
$result=mysqli_query($conn,$sql) or die("Query  unsuccessful");

$row=mysqli_fetch_assoc($result);
$userPhone=$userMobile;
$userPass=$row['USER_PASSWORD'];
$userName=$row['USER_NAMEE'];
$userGmail=$row['USER_GMAIL'];
$userAddress=$row['USER_ADDRESS'];  

echo "<div class='catt'>User Details</div>";
echo "<div id='uploadContent'>
<div  class='formUp'>
    <div  class='pForm' ><i class='fas fa-user-circle userIcon'></i></div>
    <label class='labelForm'for= 'userName'>Your name</label>
    <input class='inputForm'type='text'value='$userName' readonly name='userName' id='userName'/>
    <label class='labelForm'for= 'Mobile' >Mobile number</label>
    <input class='inputForm'type='text'name='userMobile' readonly value='$userMobile'  id='Mobile'placeholder='+91-'/>
    <label class='labelForm'for= 'Email'  >Email</label>
    <input class='inputForm'type='email'name='userEmail' id='gh' readonly value='$userGmail' id='Email'placeholder='xyz@gmail.com'/>
    <label class='labelForm'for= 'pass' >Password</label>
    <input class='inputForm'type='password' name='userPassword' readonly value='$userPass'id='pass'placeholder='At least 6 characters'/>
    <label class='labelForm'for= 'textArea'  >Address</label>
    <textarea readonly id='textArea'rows='25'placeholder='Enter Full  address' >$userAddress</textarea>
    <br>
    <div class='profileBottom'>
    <button class='profileB'onclick='dataChange()'value='1' id='editt' >Edit</button>
    <button  class='profileB' id='savee'>Logout</button>
    </div>
  </div>
</div>
";
//mysqli_close($conn);

?>