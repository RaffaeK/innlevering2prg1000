/* validering */

function fjernMelding()
{
   document.getElementById("melding").innerHTML="";   
}  

function validerKlassekode(klassekode)
{
/*
/*  Hensikt
/*    Funksjonen sjekker om klassekode er korrekt er fylt ut
/*  Parametre
/*    klassekode = klassekoden som skal sjekkes
/*  Funksjonsverdi/Returverdi
/*    Funksjonen returnerer true hvis klassekode er korrekt er fylt ut
/*    Funksjonen returnerer false ellers
*/
var tegn1;
var tegn2;
var tegn3;
var lovligKlassekode=true;

if (!klassekode)  /* klassekode er ikke fylt ut */
  {
    lovligKlassekode=false;
  }
else if (klassekode.length!=3)  /* klassekode består ikke av 3 tegn */
  {
    lovligKlassekode=false;
  }
else 
  {
    tegn1=klassekode.substr(0,1);  /* første tegn i klassekoden */
    tegn2=klassekode.substr(1,1);  /* andre tegn i klassekoden */
    tegn3=klassekode.substr(2,1);  /* tredje tegn i klassekoden */

    if (tegn1 < "A" || tegn1 > "Z" || tegn2 < "A" || tegn2 > "Z" || tegn3 < "1" || tegn3 > "9")  /* minst ett av tegnene er ulovlig */
      {
        lovligKlassekode=false;
      }
  }

  return lovligKlassekode;
}  

function lol() {

    var klassekode=document.getElementById("klassekode").value;
  var klassenavn=document.getElementById("klassenavn").value;
 
  var lovligKlassekode=validerKlassekode(klassekode);
}


function validerRegistrerKlasse()
{
/*
/*  Hensikt
/*    Funksjonen sjekker om feltene i klasseskjemaet er korrekt fylt ut
/*  Funksjonsverdi/Returverdi
/*    Funksjonen returnerer true hvis feltene er korrekt er fylt ut
/*    Funksjonen returnerer false ellers
*/
  var klassekode=document.getElementById("klassekode").value;
  var klassenavn=document.getElementById("klassenavn").value;
 
  var lovligKlassekode=validerKlassekode(klassekode);
 
  var feilmelding="";
 
  if (!lovligKlassekode)  /* klassekode er ikke korrekt fylt ut */
    {
        feilmelding="Klassekode er ikke korrekt fylt ut <br />";
    }
  if (!klassenavn)  /* klassenavn er ikke fylt ut */
    {
        feilmelding=feilmelding + "Klassenavn er ikke fylt ut <br />";
    }
 
  if (lovligKlassekode && klassenavn)  /* alle felt er korrekt fylt ut */
    {
        return true;
    }
  else
    {
        document.getElementById("melding").style.color="red";  
        document.getElementById("melding").innerHTML=feilmelding;  
        return false;
    }
}	



function valideringGyldigStudent()
{
  var Brukernavn = document.getElementById ('Brukernavn').value;
  var Fornavn = document.getElementById ('Fornavn').value;
  var Etternavn = document.getElementById ('Etternavn').value;
  var klassekode = document.getElementById ('klassekode').value;
  var msg = document.getElementById ('valideringmelding');
  
  
  var lovligKlassekode=validerKlassekode(klassekode);

  var feilmelding="";

   if (!lovligKlassekode)  /* klassekode er ikke korrekt fylt ut */
    {
        feilmelding="Klassekode er ikke korrekt fylt ut <br />";
    }
    
  var lovligstudent=true;
  
  if (Brukernavn=="" || Fornavn=="" || Etternavn=="")
  {
      feilmelding=feilmelding + "Fyll ut brukernavn, fornavn, etternavn er du snill. -Javascript valideringen";
    
    lovligstudent=false;
  }
  

  if (lovligKlassekode && lovligstudent)  /* alle felt er korrekt fylt ut */
    {
        return true;
    }
  else
    {
    msg.style.color="red";
        msg.innerHTML=feilmelding;  
        return false;
    }
}

