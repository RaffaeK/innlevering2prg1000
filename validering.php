<?php

function validerKlassekode($klassekode)
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
  $lovligKlassekode=true;

  if (!$klassekode)  /* klassekode er ikke fylt ut */
    {
      $lovligKlassekode=false;
    }
  else if (strlen($klassekode)!=3)  /* klassekode består ikke av 3 tegn */
    {
      $lovligKlassekode=false;
    }
  else
    {
      $tegn1=substr($klassekode,0,1);  /* første tegn i klassekoden */
      $tegn2=substr($klassekode,1,1);  /* andre tegn i klassekoden */
      $tegn3=substr($klassekode,2,1);  /* tredje tegn i klassekoden */

      if ($tegn1 < "A" || $tegn1 > "Z" || $tegn2 < "A" || $tegn2 > "Z" || $tegn3 < "1" || $tegn3 > "9")  /* minst ett av tegnene er ulovlig */
        {
          $lovligKlassekode=false;
        }
    }

  return $lovligKlassekode;  
} 
?>