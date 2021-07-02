<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2d5228a6f8.js" crossorigin="anonymous"></script>
   <link rel="stylesheet"href="dailySignInCss.css" type="text/css"></link>
   <link rel="stylesheet"href="https://github.com/animate-css/animate.css.git"type="text/css"></link>
   
  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script defer src="/your-path-to-fontawesome/js/all.js"></script> <!--load all styles -->
  
</head>
<body>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
  <div class="headd"><h1>Daily <span>Cart</span></h1>
  <form class="formUp" action="checkUser.php"method="POST">
    <p class="pForm">Sign In</p>
    <label class="labelForm"for="Mobile" >Mobile number</label>
    <input class="inputForm"type="text" name="userMobile" id="userMobile"placeholder="+91-"/>
    <label class="labelForm"for="pass"  >Password</label>
    <input class="inputForm"type="password" name="userPassword" id="userPassword"placeholder="At least 6 characters"/>
    </br>
    <input type="submit"value="Continue"id="FormSubmit"/>
    </br>
    <p class="FormMsg" >By continuing, you agree to DailyCart's </br><a href="#">Condition of uses</a>and Privacy Notice.</p>
  </form>
</br>
  <button type="button"value=""id="NewAccount"><a href="dailyHeaderHtml.php">Create new account</a></button>
</div>
</body>
</html>