<?php

/* Vis alle studenter */ 

$filnavn="../../filer/student.txt";
 

include ("start.html");

	$filoperasjon="r";    /* filoperasjon ("r" - for lesing) angitt  */
	print ("F&oslash;lgende student er registrert <br> <br>");

	$fil = fopen($filnavn,$filoperasjon);    /* filen åpnet */

	while ($linje = fgets ($fil))    /* en linje lest fra fil */
    {
      print ("$linje <br />");    /* linjen skrevet ut - Print lager HTML kode */
    }

  fclose ($fil);    /* filen lukket */
  include ("slutt.html"); 


?>