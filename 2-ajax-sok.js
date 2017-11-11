/* ajax-sÃ¸k */


function fjernMelding()
{
  document.getElementById("melding").innerHTML="";   
}  


function vis(klassekode)
{
  var foresporsel=new XMLHttpRequest();  /* oppretter request-objekt */
  
  foresporsel.onreadystatechange=function() 
    {
      if (foresporsel.readyState==4 && foresporsel.status==200)  /* responsen er fullfÃ¸rt og vellykket */
        {

          var response = foresporsel.responseText;
          document.getElementById("melding").innerHTML=foresporsel.responseText;
        }
    }

  foresporsel.open("GET","2-ajax-sok.php?klassekode="+klassekode);  /* angir metode og URL */
  foresporsel.send();  /* sender en request */
}