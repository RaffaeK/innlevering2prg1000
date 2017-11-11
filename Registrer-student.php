<?php /* Registrer student */ 

include ("start.html");
?>
<head> <script src="registrer-student.js"> </script> </head>
<h3> Registrer Student </h3>
<form method="post" action="" id="Mittskjema" name="Mittskjema" onSubmit="return valideringGyldigStudent()" >
	Brukernavn <input type="text" id="Brukernavn" name="Brukernavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required/> <br />
	Fornavn <input type="text" id="Fornavn" name="Fornavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required/> <br />
	Etternavn <input type="text" id="Etternavn" name="Etternavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" required/> <br />
	Klassekode <input type="text" id="klassekode" name="klassekode" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onKeyUp="vis(this.value)" required/> <br />
	<input type="submit" value="Registrer"  id="Registrer" name="Registrer" />
	<input type="reset"  value="Nullstill"  id="Nullstill" name="Nullstill" onClick="fjernMelding()"/>
	<div id="valideringmelding"></div>
	<div id="hendelsesmelding"></div>
</form>

<?php

$filnavn="../../filer/Student.txt";

include ("validering.php");


	if (isset($_POST ["Registrer"]))  /* knappen for å skrive til fil trykket  */
    {
		$Brukernavn= $_POST["Brukernavn"]; // Det innenfor anførselstegnene er NAME du har gitt i HTML
		$Fornavn= $_POST["Fornavn"];
		$Etternavn= $_POST["Etternavn"];
		$klassekode= $_POST["klassekode"];
		
		$lovligKlassekode=validerKlassekode($klassekode); /*Valideringsfunksjon utført*/



	  if (!$Brukernavn || !$Fornavn || !$Etternavn )
		{
			print("Fyll inn brukernavn, fornavn, etternavn takk.!");
		}
		
		if (!$lovligKlassekode)
		{
			print("Klassekode er ikke korrekt fylt ut");
		}
		
		if ($Brukernavn && $Fornavn && $Etternavn && $lovligKlassekode)
			{
				$filoperasjon="a"; /* Filoperasjon ("a" - for tilføying) angitt */
				
				$linje=$Brukernavn . " " . $Fornavn . " " . $Etternavn . " " . $klassekode . "\n";  /* linjen som skal skrives til fil opprettet */
				
				$fil = fopen ($filnavn,$filoperasjon ); /* filen åpnet */
					
				fwrite($fil, $linje); /* en linje skrevet til fil */
					
				print("Du har nå registrert $Brukernavn $Fornavn $Etternavn $klassekode.");
					
			}
}
include ("slutt.html");

?>