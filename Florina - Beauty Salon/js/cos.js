
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
  }else if (x==4) {
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

 function deteteProdus(id,pret)
 {
  var text=document.getElementsByClassName("itemCos");
  var cnt=0;
  for (i = 0; i < text.length; i++) {
    if(text[i].style.display!="none"){
      cnt++;
    }
  }
  if(cnt==0)
  {
    document.getElementById("emptyCos").style.display="block";
    document.getElementById("emptyCos").innerHTML="Cosul este gol!";
  }

  document.getElementById("idItem"+id).style.display="none";

  var valPret=document.getElementById("PretTotalComanda").textContent;
  fpret=parseInt(valPret)-pret;
  document.getElementById("PretTotalComanda").innerHTML=fpret;
  document.getElementById("PretTotalProduse").innerHTML=fpret;
 }

function confirmBuy(){
    var valPret=document.getElementById("PretTotalComanda").textContent;
    var prod=document.getElementsByClassName("itemCos");
    var produse="";
    for (i = 0; i < prod.length; i++) {
      if(prod[i].style.display!="none"){
        elm=document.getElementById("numeItem"+i).textContent;
            produse=produse+elm+",\n";
      }
    }
    document.getElementById("produse").value=produse;
    document.getElementById("pret").value=valPret;
}
