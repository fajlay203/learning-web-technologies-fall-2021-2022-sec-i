"use strict"


function validate(){
	let name = document.getElementById('name').value;

	if(name == ""){
		//alert('null data...');
		document.getElementById('d1').innerHTML = "<p style='color: red'>null data</p>"
	}else{
		document.getElementsByTagName('h1')[0].innerHTML = name;
		document.getElementById('d1').innerHTML = "";
	}
}

function search(){
	let name = document.getElementById('name').value;
	let xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../controller/searchCheck.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('div1').innerHTML = this.responseText;
		}
	}
}