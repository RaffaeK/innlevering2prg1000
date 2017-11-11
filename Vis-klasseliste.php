<?php /* Vis klasseliste */ 
include ("start.html");
?>
<script src="ajax.js"></script>
<h3> Vis Klasseliste </h3>
<form method="post" action="" id="Mittskjema" name="Mittskjema">
Skriv inn en klassekode <input type="text" id="klassekode" name="klassekode" required />
<input type="submit" value="Søk"  id="sokklassekode" name="sokklassekode" />

</form>
<br><br><br><br>
<div id="melding"></div>


 <?php
 
$filnavn="../../filer/student.txt";


if (isset($_POST ["sokklassekode"])) {

$klassekode=$_POST ["klassekode"];

$klassekode=trim($klassekode);

$filoperasjon="r"; //lese-kommando

$fil=fopen($filnavn,$filoperasjon); //åpne fila


while ($linje=fgets($fil))
{
	if ($linje!=="") /*den ene linja mangler tekst men er ikke tom, overser den med denne "if"*/
	{
		$del=explode(" ",$linje); /*deler opp navnene*/
		$Brukernavn=trim($del[0]); /* trim fjerner mellomrom i starten og slutten*/
		$Fornavn=trim($del[1]);
		$Etternavn=trim ($del[2]);
		$klasse=trim ($del[3]);
		
	}	
	if ($klassekode==$klasse)
	{
		print("$linje<br />");
	}	
}
	fclose($fil); 
	
	

}
include ("slutt.html");

?>