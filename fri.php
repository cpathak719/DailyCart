<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2d5228a6f8.js" crossorigin="anonymous"></script>
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style src="friCss.css"> </style>
  <script src="friJs.js"></script>
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
 
  <div id="side">
    <div class="wel">Welcome <button class="bar"onclick="barChange(1)">
      <i class="fas fa-bars fontt"></i>
    </button></div>
    
    <a class="sadd" href="dely.php"><i class="fas fa-address-card"></i>My Addresses</a>
    <a class="sadd" href="#"><i class="fas fa-list"></i>My Orders</a>
    <a class="sadd" href="#"><i class="fas fa-shopping-cart"></i>My Cart</a>
    <a class="sadd" href="#"><i class="fas fa-user-circle"></i>Customer Support</a>
    <a class="sadd" href="#"><i class="far fa-star"></i>Rate Us</a>
    <a class="sadd" href="#"><i class="fas fa-user-cog"></i>About Us</a>
  </div>
  
  <header class="headd">
    
      <button class="bar" id="barr" onclick="barChange(0)">
        <i class="fas fa-bars fontt"></i>
      </button>
      <div class="logo">    
        <div class="logoo">
          Daily <span> Cart</span>
      </div>
    <div class="searchx">
      <button  id="cat" >
       <a href="#tablee" >Categories</a>
      </button>
      <input type="search" placeholder="Search for products"class="searchh"></input>
  </div>
  </div>
    <button class="cart">
      <i class="fas fa-cart-plus fontt"></i>
    </button>
  </header>
 
  <div class="mid">
    <div class="sliderr"><div id="carouselExampleIndicators" class="carousel slide mar" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="sl carousel-inner">
        <div class="carousel-item active">
          <img class=" imgg d-block  w-100" src="f1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="imgg  d-block w-100" src="f2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="imgg d-block w-100" src="f3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="imgg d-block w-100" src="f4.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="imgg d-block w-100" src="f5.jpg" alt="Third slide">
        </div>
        <div class="carousel-item bttt">
          <img class="imgg d-block w-100" src="f6.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev bootbtn btt" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bootbtn bttt" aria-hidden="true"></span>
        <span class="sr-only bttt">Previous</span>
      </a>
      <a class="carousel-control-next btt" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon bttt" aria-hidden="true"></span>
        <span class="sr-only btt">Next</span>
      </a>
    </div>
  </div>
  <div class="quality">
    <div class="circlebox">
      <button class="cir"><i class="fas fa-rupee-sign"></i></button><p class="ro">Lowest price guranty</p>
    </div>
    <div class="circlebox">
      <button class="cir"><i class="fas fa-head-side-mask"></i></button><p class="ro">Sealed with safety</p>
    </div>
    <div class="circlebox">
      <button class="cir"><i class="fas fa-shopping-bag"></i></button><p class="ro">Easy returns & refunds</p>
    </div>
    <div class="circlebox">
      <button  class="cir"><i class="fas fa-hard-hat"></i></button><p class="ro">Doorstep quality check</p>
    </div>
</div>

  </div>
  <div class="mid2">
      <h2 class="shop" >Shop by category</h2>
      <table id="tablee">
        <tr class="trr">
         <td class="tdd" id="tdd1" value ="1">
          <div class="cardd " >
            <img class=" cardimg" src="f6.jpg" alt="Card image cap">
            <div class="off">
              <p class="offf">upto 70%off</p>
              <p class="cardtext">Grocery and staples</p>
              </div>
          </div>
         </td>
         <td class="tdd" id="tdd2" value="2">
          <div class="cardd" >
            <img class=" cardimg" src="f4.jpg" alt="Card image cap">
            <div class="off">
              <p class="offf">upto 30%off</p>
              <p class="cardtext">Grocery and staples</p>
              </div>
          </div>
        </td>
        <td class="tdd">
          <div class="cardd" >
            <img class=" cardimg" src="f3.jpg" alt="Card image cap">
            <div class="off">
              <p class="offf">upto 50%off</p>
              <p class="cardtext">Grocery and staples</p>
              </div>
          </div>
        </td>
      </tr>
      <tr class="trr">
        <td class="tdd">
         <div class="cardd" >
           <img class=" cardimg" src="f6.jpg" alt="Card image cap">
           <div class="off">
             <p class="offf">upto 70%off</p>
             <p class="cardtext">Grocery and staples</p>
             </div>
         </div>
        </td>
        <td class="tdd">
         <div class="cardd" >
           <img class=" cardimg" src="f4.jpg" alt="Card image cap">
           <div class="off">
             <p class="offf">upto 30%off</p>
             <p class="cardtext">Grocery and staples</p>
             </div>
         </div>
       </td>
       <td class="tdd">
         <div class="cardd" >
           <img class=" cardimg" src="f3.jpg" alt="Card image cap">
           <div class="off">
             <p class="offf">upto 50%off</p>
             <p class="cardtext">Grocery and staples</p>
             </div>
         </div>
       </td>
     </tr>
     <tr class="trr">
      <td class="tdd">
       <div class="cardd" >
         <img class=" cardimg" src="f6.jpg" alt="Card image cap">
         <div class="off">
           <p class="offf">upto 70%off</p>
           <p class="cardtext">Grocery and staples</p>
           </div>
       </div>
      </td>
      <td class="tdd">
       <div class="cardd" >
         <img class=" cardimg" src="f4.jpg" alt="Card image cap">
         <div class="off">
           <p class="offf">upto 30%off</p>
           <p class="cardtext">Grocery and staples</p>
           </div>
       </div>
     </td>
     <td class="tdd">
       <div class="cardd" >
         <img class=" cardimg" src="f3.jpg" alt="Card image cap">
         <div class="off">
           <p class="offf">upto 50%off</p>
           <p class="cardtext">Grocery and staples</p>
           </div>
       </div>
     </td>
   </tr>
   <tr class="trr">
    <td class="tdd">
     <div class="cardd" >
       <img class=" cardimg" src="f6.jpg" alt="Card image cap">
       <div class="off">
         <p class="offf">upto 70%off</p>
         <p class="cardtext">Grocery and staples</p>
         </div>
     </div>
    </td>
    <td class="tdd">
     <div class="cardd" >
       <img class=" cardimg" src="f4.jpg" alt="Card image cap">
       <div class="off">
         <p class="offf">upto 30%off</p>
         <p class="cardtext">Grocery and staples</p>
         </div>
     </div>
   </td>
   <td class="tdd">
     <div class="cardd" >
       <img class=" cardimg" src="f3.jpg" alt="Card image cap">
       <div class="off">
         <p class="offf">upto 50%off</p>
         <p class="cardtext">Grocery and staples</p>
         </div>
     </div>
   </td>
 </tr>
  </table>
  </div>
  <footer class="foot" id="fff">
    <div class="fleft">
      <h1 class="comp">Daily<span>Cart</span></h1>
      <a class="glink" href="#">Term and condition</a>
      <a class="glink" href="#">categories</a>
      <a class="glink" href="#">Log In</a>
      <a class="glink" href="#">SignUP</a>
      </div>
      <div class="fright">
        <a class="glink" href="#"><i class="fas fa-phone fa-lg fontt"></i>8630547736,9935068544</a>
    <a class="glink" href="#"><i class="fas fa-envelope fa-lg fontt"></i>cpathak719@gmail.com</a>
    <a class=" glink" href="#"><i class="fab fa-whatsapp-square fa-lg fontt"></i>860547736</a>
   
      </div>
     
  </footer>
  <div class="footerlast">
    <div class="copy">
  <a class="glink" href="#"> <i class="far fa-copyright fa-lg fontt"></i>copyright in india</a>
      </div>
      <div class="social"> <a class="sllf" href="#"> <i class="fab fa-facebook-square fa-2x fontt"></i></a>
        <a class="sllt" href="#"><i class="fab fa-twitter-square fa-2x fontt"></i></a>
        <a class="slli" href="#"><i class=" sllw fab fa-instagram-square fa-2x fontt"></i></a>
      </div>
</div>


</body>
</html>