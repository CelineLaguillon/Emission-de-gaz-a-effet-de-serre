function creerBilan(){
	document.getElementById('modifierBilan').style.display = "none";
	document.getElementById('creerBilan').style.display = "inline-grid";
	document.getElementById('creerBilan').style.width = "30%";
	document.getElementById('afficherBC').style.width = "65%";
}

function modifierBC(mesBilans){
	document.getElementById('creerBilan').style.display = "none";
	document.getElementById('modifierBilan').style.display = "inline-grid";
	document.getElementById('modifierBilan').style.width = "30%";
	document.getElementById('afficherBC').style.width = "65%";
}

function fermerFenetre(){
	document.getElementById('creerBilan').style.display = "none";
	document.getElementById('modifierBilan').style.display = "none";
	document.getElementById('afficherBC').style.width = "100%";
}