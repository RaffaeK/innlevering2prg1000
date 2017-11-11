<?php     /* ajax-søk */
/*
/*    Programmet demonstrerer ajax
*/
  $filnavn="../../filer/Student.txt";  /* filnavn angitt */

  $delklassekode=$_GET["klassekode"];
  
  print ("<table border=0>");  /* starten på tabellen definert */

  $filoperasjon="r";  /* filoperasjon ("r" - for lesing) angitt  */

  $fil = fopen($filnavn,$filoperasjon);  /* filen åpnet */

  while ($linje = fgets ($fil))  /* en linje lest fra fil */
    {
      if ($linje != "")  /* linjen lest fra fil er ikke tom */
        {
          $del = explode (" " , $linje);  /* innholdet av linjen delt opp */
          $Brukernavn=trim($del[0]);  /* postnr hentet ut */
          $Fornavn=trim($del[1]);
          $Etternavn=trim($del[2]);  /* poststed hentet ut */
          $klassekode=trim($del[3]);

		  $startpos=stripos($klassekode,$delklassekode); /* sjekker om delpostnr finnes på fil */
		  if($startpos!==false) /* delpostnr finne */
			  {
				print("<tr><td> $klassekode $Brukernavn $Etternavn $Fornavn </td></tr>"); /* tr er tablerow - td er table */  
			  }
       }
    }

  fclose ($fil);  /* filen lukket */

  print ("</table>");  /* slutten på tabellen definert */
?> 