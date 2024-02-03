let numecomplet = /^[A-Za-z ]*$/;
let formatemail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z])+\.([A-Za-z]{2,4})$/;
let numeprodus = /^[A-Za-z0-9\.\,\!\?\;\:]*$/;
let telefon	= /^[0-9]*$/;

function checkform() {
	var a = document.getElementById("nume").value;
  	var b = document.getElementById("email").value;
  	var c = document.getElementById("produs").value;
  	var d = document.getElementById("telefon").value;

  	if (a.match(numecomplet)){
    	document.getElementById("nume").innerHTML = "";
}
   	else {
    	document.getElementById("numegresit").innerHTML = "Nume incorect";
}

	if (b.match(formatemail)){
    	document.getElementById("email").innerHTML = "";
} 
	else {
    	document.getElementById("emailgresit").innerHTML = "Email incorect";
}
  
	if (c.match(numeprodus)) {
    	document.getElementById("produs").innerHTML = "";
} 	
	else {
    	document.getElementById("prodgresit").innerHTML = "Nume produs incorect";
}
 
  	if (d.match(telefon)) {
    	document.getElementById("telefon").innerHTML = "";
} 
	else {
    	document.getElementById("telefongresit").innerHTML = "Nr telefon incorect";
}


return a.match(numecomplet) && b.match(formatemail) && c.match(numeprodus) && d.match(telefon);
}

	document.querySelector('button').addEventListener('click', (event) => {
	    event.preventDefault();

    if(checkform()){
		document.querySelector('form').submit();
}
     
});