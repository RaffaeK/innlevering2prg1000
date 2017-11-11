<?php  /* registrer-klasse */
/*
/*    Programmet lager et html-skjema for å registrere et klasse
/*    Programmet skriver data (klasse) til filen "klasse.txt"
*/
include ("start.html");
?> 
<h3>Registrer klasse </h3>
	<form method="post" action="" id="Mittskjema" name="Mittskjema" onSubmit="return validerRegistrerKlasse();">
	Klassekode <input type="text" id="klassekode" name="klassekode" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required="" /> <br />
	Klassenavn <input type="text" id="klassenavn" name="klassenavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required="" /> <br />
	<input type="submit" value="Registrer"  id="Registrer" name="Registrer" />
	<input type="reset"  value="Nullstill"  id="Nullstill" name="Nullstill"/>
	<div id="melding"></div>
	<div id="hendelsesmelding"></div>
</form> 	
<?php
$filnavn="../../filer/klasse.txt"; /*filnavn angitt*/

include ("validering.php"); /* valideringsfunksjon inkludert fra PHP */
if (isset($_POST ["Registrer"]))  /* knappen for å skrive til fil trykket  */
    {
$klassekode=$_POST ["klassekode"];
    $klassenavn=$_POST ["klassenavn"];
	  
	$lovligKlassekode=validerKlassekode($klassekode); /*valideringsfunksjon utført*/
	  	   
		if (!$lovligKlassekode) /*klassekode er ikke korrekt fylt ut*/
		{
		print("Klassekode er ikke korrekt fylt ut <br>");
	}
	if (!$klassenavn) /*Hvis ikke klassenavn er fylt inn*/
    {
		print("Klassenavn er ikke fylt ut <br>"); /* Klassenavn ikke er fylt inn*/ 
    }
	
    if ($lovligKlassekode && $klassenavn) /* ingen feil funnet */
			{
		
			$filoperasjon="a"; /*Filoperasjon ("a" - for tilføying) angitt */
			
			$linje=$klassekode . " " . $klassenavn . "\n"; /* linjen som skal skrives til fil opprettet */
			
			$fil = fopen ($filnavn,$filoperasjon); /* filen åpnet */
			
			fwrite ($fil,$linje); /* en linje skrevet til fil */
			
			print ("$klassekode og $klassenavn er registrert");
	 }
 }
include ("slutt.html");
?>