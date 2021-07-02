//all orders details
document.getElementById("myOrder").addEventListener("click",function(){
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);
      document.getElementById("midId").innerHTML=this.responseText;
      document.getElementById("midId").style.backgroundColor="#eaeded";
      document.getElementById("uploadContent").style.backgroundColor="transprant";
    }
  }
 
  xhttp.open("GET","orderItems.php",true);
  xhttp.send();

});

//profile open 
document.getElementById("profileOpen").addEventListener("click",function(){
  
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState==4&& this.status==200){
      //alert(this.responseText);
      document.getElementById("midId").innerHTML=this.responseText;
      document.getElementById("midId").style.backgroundColor="transprant";
      document.getElementById("uploadContent").style.justifyContent="center";
      document.getElementById("uploadContent").style.alignItems="center";
     
      
    }
  }
 
  xhttp.open("GET","profileOpen.php",true);
  xhttp.send();
});
//save/edit button implemention
function dataChange(a){
  alert("Not get");
}

function barChange(a){
  
 
  //console.log(a);
    if(a==0){
      document.getElementById("side").style.display="flex";
      let w=window.innerWidth;
      
      if(w<=500)
      {
      document.getElementById("side").style.width="50%";
      }
      else{
        
      document.getElementById("side").style.width="20%";
      }
      document.getElementById("side").style.height=(window.innerHeight.toString())+"px";
    }
    else
    {
      console.log("1");
     document.getElementById("side").style.display="none";
     document.getElementById("side").style.width="0%";
    }
 }
 document.addEventListener('click',function(event){
  if (event.target.closest(".tdd")){
   // alert("hey");
    let cur_element=event.target;
    let cur_att=cur_element.getAttribute("value");

    
    console.log(cur_att);
    
    //common
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
      if(this.readyState==4&& this.status==200){
        //alert(this.responseText);
        document.getElementById("midId").innerHTML=this.responseText;
        document.getElementById("midId").style.backgroundColor="#eaeded";
        document.getElementById("uploadContent").style.backgroundColor="transprant";
      }
    }
   
    xhttp.open("GET","getData.php?x="+cur_att,true);
    xhttp.send();
  
  }
  },false);
//offer button implement
document.getElementById("OfferButton").addEventListener('click',function(){
  alert("jdflj");
});
  function sideLoad(){
    alert("side value");
  }
  
//  function items(ch){
  
  
//    var xhttp=new XMLHttpRequest();
//    xhttp.onreadystatechange=function(){
//      if(this.readyState==4&& this.status==200){
//        //alert(this.responseText);
 
//        document.getElementById("midId").innerHTML=this.responseText;
//      }
//    }
  
//    xhttp.open("GET","getData.php?x="+ch,true);
//    xhttp.send();
 
//  }
jQuery(document).ready(function($) {

  if (window.history && window.history.pushState) {

    window.history.pushState('forward', null);

  }
});