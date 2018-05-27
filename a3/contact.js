function load() {
	
	var rCBox = localStorage.getItem("rmbrCBox");
	var mcb = localStorage.getItem("mailCBx");
	var name = document.getElementById("fullName");
	var ph = document.getElementById("mPhone");
	var eM= document.getElementById("email");
	
	if(rCBox == "true")
	{
		if(mcb == "true")
		{
			document.getElementById("mailCBx").checked = true;
		}
		document.getElementById("rmbrCBox").checked = true;
		name.value = localStorage.getItem("fullName");
		ph.value = localStorage.getItem("mPhone");
		eM.value = localStorage.getItem("email");
	}
}

function save() {

	var rCBox = document.getElementById('rmbrCBox');
	var name = document.getElementById("fullName");
	var ph = document.getElementById("mPhone");
	var eM= document.getElementById("email");
	var mcb = document.getElementById("mailCBx");
	if(mcb.checked)
	{
		localStorage.setItem("mailCBx", mcb.checked);
	}
	localStorage.setItem('rmbrCBox', rCBox.checked);
	localStorage.setItem("fullName", name.value);
	localStorage.setItem("mPhone", ph.value);
	localStorage.setItem("email", eM.value);
}


function remove() {
	
	localStorage.removeItem("rmbrCBox");
	localStorage.removeItem("mailCBx");
	localStorage.removeItem("fullName");
	localStorage.removeItem("mPhone");
	localStorage.removeItem("email");
}

function checkStatus(){
	
	var status = document.getElementById('rmbrCBox');
	if(status.checked) {
		save();
	}
	else {
		remove();
	}
}