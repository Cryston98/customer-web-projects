/*
const hero = document.querySelector('.hero');
const slider = document.querySelector('.slider');
const logo = document.querySelector('#logo');
const headline= document.querySelector('.headline');

const tl = new TimelineMax();

tl.fromTo(hero,1,{height: "0%"},{height: '80%'});



// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
*/
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

function myFunction() {
    document.getElementById("MyDropUp").classList.toggle("show");
    var dropups = document.getElementsByClassName("dropup-content");
      var i;
      for (i = 0; i < dropups.length; i++) {
        var openDropup = dropups[i];
        openDropup.style.display="block";
  }
}


 /*
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event)
    {
        if (!event.target.matches('.dropup-btn'))
        {
          var dropups = document.getElementsByClassName("dropup-content");
          var i;
          for (i = 0; i < dropups.length; i++) {
            var openDropup = dropups[i];
            if (openDropup.classList.contains('show')) {
              openDropup.classList.remove('show');
            }
          }
        }
    }
*/


function showPopUp(x)
{
  if(x==1){
      document.getElementById("LoginPopUp").style.display="block";
      document.getElementById("InregistrarePopUp").style.display="none";
      document.getElementById("ContactPopUp").style.display="none";
      document.getElementById("CosPopUp").style.display="none";
  }else if(x==2){
      document.getElementById("LoginPopUp").style.display="none";
      document.getElementById("InregistrarePopUp").style.display="block";
      document.getElementById("ContactPopUp").style.display="none";
      document.getElementById("CosPopUp").style.display="none";
  }else if(x==3){
    document.getElementById("LoginPopUp").style.display="none";
    document.getElementById("InregistrarePopUp").style.display="none";
    document.getElementById("ContactPopUp").style.display="block";
    document.getElementById("CosPopUp").style.display="none";
  }else{
    document.getElementById("CosPopUp").style.display="block";
  }
}


function closePopUP(x){
  if(x==1)
     document.getElementById("LoginPopUp").style.display="none";
  else if(x==2)
     document.getElementById("InregistrarePopUp").style.display="none";
  else if(x==3){
    document.getElementById("ContactPopUp").style.display="none";
  }else{
    document.getElementById("CosPopUp").style.display="none";
  }
 }

 function cumpara(idProdus)
 {
// Simulate an HTTP redirect:
window.open("cos.php?produs="+idProdus, '_blank');
 }

 function showOption(x){
   if (x==1) {
       document.getElementById("optionAdmin1").style.display="block";
       document.getElementById("optionAdmin2").style.display="none";
       document.getElementById("optionAdmin3").style.display="none";
   }else if (x==2) {
     document.getElementById("optionAdmin1").style.display="none";
     document.getElementById("optionAdmin2").style.display="block";
     document.getElementById("optionAdmin3").style.display="none";
   }else{
     document.getElementById("optionAdmin1").style.display="none";
     document.getElementById("optionAdmin2").style.display="none";
     document.getElementById("optionAdmin3").style.display="block";
   }
 }


 function UploadClick() {
   document.getElementById("PhotoUP").click(); // Click on the checkbox
 }

 function validation(x){
       var elem=document.getElementById('PhotoUP').files[0];
       var parents = document.getElementById('AreaUploadPhoto');
       var rm = document.getElementById('ig');
       var imag = document.createElement('img');

       var atrr = document.createAttribute('class');
       atrr.value="imgt";
       imag.setAttributeNode(atrr);

       var atrr = document.createAttribute('id');
       atrr.value="ig";
       imag.setAttributeNode(atrr);

       var atrr = document.createAttribute('onload');
       atrr.value="shower(x)";
       imag.setAttributeNode(atrr);

       imag.src=window.URL.createObjectURL(elem);
       parents.removeChild(rm);
       parents.appendChild(imag);
       document.getElementById('SizePhotoUP').innerHTML=(elem.size/1024).toFixed(1)+'KB';

     return false;
   }
   function shower(x){//x=playlist or subplaylist
       var el=document.getElementsByClassName('imgt')[0];
       document.getElementById('NamePhotoUP').innerHTML='.png';
       document.getElementById('HeightPhotoUP').innerHTML=el.height+'px';
       document.getElementById('WidthPhotoUP').innerHTML=el.width+'px';

       document.getElementById('StatusPhotoUP').innerHTML="OK";
       document.getElementById('StatusPhotoUP').style.color="green";

       document.getElementsByClassName('imgt')[0].style.height=55+'px';
       document.getElementsByClassName('imgt')[0].style.width=100+'px';
       document.getElementsByClassName('imgt')[0].style.borderRadius="4px";
       document.getElementById('TablePhotoUP').style.display="block";
       validateForm();
   }


   function validateForm(){

   	  var imgRoom=document.getElementById('StatusPhotoUP').innerHTML;
      var text1=document.getElementById('RoNameProducts').value;
      var text2=document.getElementById('RoPretProducts').value;
      var text3=document.getElementById('RoCantitateProducts').value;

   	   if(imgRoom=="OK" && text1.length > 2 && text2.length > 2  && text3.length >0  ){
   		   document.getElementById('submitServici').style.display="block";
          return true;
   	   }else{

   		   document.getElementById('submitServici').style.display="none";
          return false;
   	   }
 }
function closePopUpDeleteProduct(){
  document.getElementById('delectForm').style.display="none";
}
function closePopUpEditProduct(){
  document.getElementById('editForm').style.display="none";
}

function confirmDelete(name,type)
{
  document.getElementById('editForm').style.display="none";
  document.getElementById('textProduct2').innerHTML=name;
  document.getElementById('delectForm').style.display="block";
  document.getElementById('textProductID').value=name;
    document.getElementById('typeProductID1').value=type;

}

function confirmEdit(name,pret,cantitate,type){
    document.getElementById('delectForm').style.display="none";
  document.getElementById('textProduct1').innerHTML=name;
  document.getElementById('editForm').style.display="block";
  document.getElementById('textProductID1').value=name;
  document.getElementById('priceProductID').value=pret;
  document.getElementById('typeProductID').value=type;
  document.getElementById('cantityProductID').value=cantitate;
}
