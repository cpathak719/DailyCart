//select option update when save button pressed
function setAddToSelect(){
  let newAdd=document.getElementById("textAddress").value;
 
  document.getElementById("setAddress").innerHTML+="<option class='optionAddress'selected>"+newAdd+"</option>";
  document.getElementById("newAddress").style.display='none';
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);
     
     // alert("going");
     //document.getElementById("uploadContent").innerHTML=this.responseText;
    }
  }
 
  xhttp.open("GET","addAddress.php?x="+newAdd,true);
  xhttp.send();


  };
//checkOut select and option update
function updateAddress(){
  let addr=document.getElementById("setAddress").value;
  if(addr=='Other'){
   document.getElementById("newAddress").style.display='flex';
  }
  else{
    document.getElementById("newAddress").style.display='none';
  }
}

//placeOrder button implement 
function placeOrder(){

  
  let ad=document.getElementById("setAddress").value;

  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);
     // count_cart_item();
     // alert("going");
     //document.getElementById("midId").innerHTML=this.responseText;
    // location.reload();
    }
  }
 
  xhttp.open("GET","orderFinal.php?x="+ad,true);
  xhttp.send();
}
//checkout
function goToCheckOut(){
  
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);
     // count_cart_item();
     // alert("going");
     document.getElementById("midId").innerHTML=this.responseText;
    }
  }
 
  xhttp.open("GET","checkOut.php",true);
  xhttp.send();
  
}
//addToCart button implementation
count_cart_item();
document.addEventListener('click',function(event){
if (event.target.closest('.addToCart')){
 
  let cur_element=event.target;
  let cur_att=cur_element.getAttribute('id');
  console.log(cur_att);
  console.log("you are at write place");
  //common
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);
      count_cart_item();
     // alert("going");
     //document.getElementById("uploadContent").innerHTML=this.responseText;
    }
  }
 
  xhttp.open("GET","Shopping_cart.php?x="+cur_att,true);
  xhttp.send();

}
},false);
//cart link of side bar implementation
function rr(){
  
  document.getElementById("side").style.display="none";
  document.getElementById("side").style.width="0%";
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);

      document.getElementById("midId").innerHTML=this.responseText;
      console.log("heya");
    }
  }
  xhttp.open("GET","Shopping_cart_pressed.php",true);
  xhttp.send();   
}
//cart button of side bar implementation
document.getElementById("cartId").addEventListener("click",function rr(){
  console.log("cart pressed");
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);

      document.getElementById("midId").innerHTML=this.responseText;
      console.log("heya");
    }
  }
 
  xhttp.open("GET","Shopping_cart_pressed.php",true);
  xhttp.send();   
  

});
//updatate cart when new element addded to cart
function count_cart_item(){
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);

      document.getElementById("totalItem").innerHTML=this.responseText;
    }
  }
 
  xhttp.open("GET","total_cart.php?",true);
  xhttp.send();
}
//DeleteItem from the cart 
document.addEventListener('click',function(event){
  if (event.target.closest('.deleteItem')){
    let cur_element=event.target;
    console.log(cur_element);
    
    //cur_att has id value of  current item.
    let cur_att=cur_element.getAttribute('id');
    //get quantity of current item when delete press
    // let quantity=parseInt(document.getElementById("q"+cur_att).value);
    // //get  price of current item when delete press
    // let price=parseInt(document.getElementById("r"+cur_att).innerHTML);
    // //Now we are going to update total cost and total price.
    // //get total quantity of all items when delete press
    // let totalItem=parseInt(document.getElementById("totalList").innerHTML);
    // //get total price  of all items when delete press
    // let totalPrice=parseInt(document.getElementById("totalPrice").innerHTML);
    //Now update both value
    //document.getElementById("totalList").innerHTML=totalItem-1;
    //document.getElementById("totalPrice").innerHTML=totalPrice-price*quantity;
   //delete current item.
   document.getElementById("p"+cur_att).style.height='3rem';
   document.getElementById("p"+cur_att).innerHTML='<h1><i class="fas fa-trash-alt"></i><h1>';
   document.getElementById("p"+cur_att).style.justifyContent='center';
   document.getElementById("p"+cur_att).style.color='red';
   


   //alert("hey");
   setTimeout(function(){
    document.getElementById("p"+cur_att).style.display='none';
   }, 500 ); 
  
    //now send id to delete from database.
    var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);
     
      let respo=this.responseText;
      console.log(respo);
      console.log("on delete"+respo);
      count_cart_item();
      let priceAndQuantity=this.responseText;
      console.log(priceAndQuantity);
      let i=priceAndQuantity.indexOf("@");
      let nprice=priceAndQuantity.slice(0,i);
      let nquantity=priceAndQuantity.slice(i+1);
      document.getElementById("totalList").innerHTML=nquantity;
      document.getElementById("totalPrice").innerHTML=nprice;
    
    }
  }
 
  xhttp.open("GET","delete_item.php?x="+cur_att,true);
  xhttp.send();

  }
  },false);
  
//update price according quantity

document.addEventListener('change',function(event){
  if (event.target.closest('.quantityOfItem')){
    let cur_element=event.target;
    
    //cur_att has id value of  current item.
    let cur_att=cur_element.getAttribute('id');
    cur_att=cur_att.substring(1);
    //get quantity of current item when delete press
    let quantity=(cur_element.value);
    console.log(cur_att+"@"+quantity);
    //get  price of current item when delete press
       var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);
      
     // let respo=this.responseText;
     // console.log("on change"+respo);
     let priceAndQuantity=this.responseText;
     console.log(priceAndQuantity);
     let i=priceAndQuantity.indexOf("@");
     let nprice=priceAndQuantity.slice(0,i);
     let nquantity=priceAndQuantity.slice(i+1);
     document.getElementById("totalList").innerHTML=nquantity;
     document.getElementById("totalPrice").innerHTML=nprice;
     count_cart_item();
     // count_cart_item();
    }
    
  }
  xhttp.open("GET","delete_item.php?x="+(cur_att+"@"+quantity),true);
  xhttp.send();

  }
  },false);
  


