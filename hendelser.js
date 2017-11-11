/* hendelser-eksempler */

function fokus (element)
{
	element.style.background="yellow";
}

function mistetFokus(element)
{
	element.style.background="white";
}
function musInn(element)
{
	document.getElementById("hendelsesmelding").style.color="blue";
	// DISSE TO HER ER FOR REGISTRER-KLASSE.PHP
	if(element==document.getElementById("klassekode"))
	{
		document.getElementById("hendelsesmelding").innerHTML="Fyll inn en klassekode, den skal bestå av 3 tegn; 2  bokstaver og 1 tall";
	}
	if(element==document.getElementById("klassenavn"))
	{
		document.getElementById("hendelsesmelding").innerHTML="Fyll ut klassenavnet er du snill :)";
	}
	//DISSE TRE HER ER FOR REGISTRER STUDENT, PLUS DEN OVER
	if(element==document.getElementById("Brukernavn"))
	{
		document.getElementById("hendelsesmelding").innerHTML="Fyll inn Brukernavn er du snill :)";
	}
	if(element==document.getElementById("Fornavn"))
	{
		document.getElementById("hendelsesmelding").innerHTML="Fyll inn Fornavn er du snill :)";
	}
	if(element==document.getElementById("Etternavn"))
	{
		document.getElementById("hendelsesmelding").innerHTML="Fyll inn Etternavn er du snill :)";
	}
	
}
function musUt(element)
{
	document.getElementById("hendelsesmelding").innerHTML="";

}
function endreTilStoreBokstaver(element)
{
	element.value=element.value.toUpperCase();
}
function settFokus(element)
{
	element.fokus();
}