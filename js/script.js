function creerBilan(){
	document.getElementById('modifierBilan').style.display = "none";
	document.getElementById('creerBilan').style.display = "inline-grid";
	document.getElementById('creerBilan').style.width = "30%";
	document.getElementById('afficherBC').style.width = "65%";
}

function modifierBC(bilan){
	document.getElementById('creerBilan').style.display = "none";
	document.getElementById('modifierBilan').style.display = "inline-grid";
	document.getElementById('modifierBilan').style.width = "30%";
	document.getElementById('afficherBC').style.width = "65%";
	document.getElementById('titreBilan').style.color = "red";
	var url=new URL('http://localhost/voirBC.php');
	var query_strings = url.search;
	var search_params = new URLSearchParams(query_strings);
	search_params.append('bilan',bilan);
	url.search = search_params.toString();
	var new_url = url.toString();
	console.log(new_url);
	window.history.replaceState(null,null,new_url);
}

function fermerFenetre(){
	document.getElementById('creerBilan').style.display = "none";
	document.getElementById('modifierBilan').style.display = "none";
	document.getElementById('afficherBC').style.width = "100%";
}