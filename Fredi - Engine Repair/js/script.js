function enterCreditentials(){
    document.getElementById("popUpLogin").style.display="block";
}
function closePopUpLogin()
{
    document.getElementById("popUpLogin").style.display="none";
}
function select_form_registration_or_login(x)
{
    if(x==0)
    {
        document.getElementById("wrapLoginForm").style.display="none";  
        document.getElementById("wrapSingInForm").style.display="block";   
    }
    else
    {
        document.getElementById("wrapLoginForm").style.display="block";  
        document.getElementById("wrapSingInForm").style.display="none"; 
    }
}

function getCookie(name){
    var value="; "+document.cookie;
    var parts=value.split("; "+name+"=");
    if(parts.length==2)
        return parts.pop().split(";").shift();
}

function verifExistErrors(){
     if(getCookie("errorLogin"))
     {
        document.getElementById("messageFunctionality").style.display="block";  
        document.getElementById("messageFunctionality").innerHTML="Your email or password is invalid ! Try again if you have an account";
       setTimeout(function(){ document.getElementById("messageFunctionality").style.display="none";}, 3500); // 3500=3.5sec
        
     }else{
        document.getElementById("messageFunctionality").style.display="none";  
     }
}
function rating(x)
{   var i;
    for(i=1;i<=5;i++)
    {
        if(i<=x)
        {
            document.getElementById("star"+i).style.color="#FF9800"; 
        }else{
            document.getElementById("star"+i).style.color="#000";
        }
    }
    document.getElementById("ratingMyRecenzie").value=x; 
}


function selecteazaDataProgramare(an,luna,zi,maxID){
   document.getElementById("dataProgramareAn").value=an;
   document.getElementById("dataProgramareLuna").value=luna;
   document.getElementById("dataProgramareZi").value=zi;
var i;
   for(i=1;i<=maxID;i++)
    {   
        if(i==zi){
            document.getElementById("selected"+zi).style.backgroundColor ="red";
            document.getElementById("selected"+zi).style.color ="white";
        }
        else{
            document.getElementById("selected"+i).style.backgroundColor ="transparent";
            document.getElementById("selected"+i).style.color ="red";
        }
    }
}

function checkform(){

   var an = document.getElementById("dataProgramareAn").value;
   var luna = document.getElementById("dataProgramareLuna").value;
   var zi = document.getElementById("dataProgramareZi").value;
   var checkedValue=0; 

   var inputElements = document.getElementsByClassName('serviciiProgramri');
   for(var i=0; inputElements[i]; ++i){
         if(inputElements[i].checked){
              checkedValue = inputElements[i].value;
              break;
         }
   }

   if(zi==0 || luna==0 || an==0 ){
      alert("Selecteaza data");
      return false;
   }else if(checkedValue==0){
       alert("Selecteaza minim un serviciu");
       return false;
   }else{
    return true;
   }
}

function notSelect(){
    alert("Aceasta zi este ocupata .Te rugam sa alegi alta zi!");
}