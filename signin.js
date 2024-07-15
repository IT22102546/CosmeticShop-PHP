
function checkpassword()
{
   
    var Unamef= document.getElementById("Uname").value;
   
    var mail=document.getElementById("myEmail").value;
    var pwrds=document.getElementById("pwrd").value;
   
    
   
   
   
    
    
    checkme(Unamef,"Uname");
    checkme(mail,"myEmail");
    checkme(pwrds,"pwrd");

    
   
   
}

function checkme(vari,idd)
{
    if(vari=="" || vari== null)
    {
        document.getElementById(idd).style.borderColor="red";
    }
    else
    {
       document.getElementById(idd).style.borderColor="green"; 
    }
}

function enableButton() 
{
 
 var checkBox = document.getElementById("cb");
 var text = document.getElementById("text");

 if (checkBox.checked == true)
 {
   text.style.display = "block";
    document.getElementById("btn").disabled = false;
 } 
 else 
 {
    text.style.display = "none";
    
 }

}
