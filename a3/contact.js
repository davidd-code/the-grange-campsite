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

function loadBooking()	{
	bookingName.value = localStorage.getItem("fullName");
	bookingPhone.value = localStorage.getItem("mPhone");
	bookingEmail.value = localStorage.getItem("email");

	if (typeof localStorage !== 'undefined') {
		bookingName.value = localStorage.getItem("fullName");
		bookingPhone.value = localStorage.getItem("mPhone");
		bookingEmail.value = localStorage.getItem("email");
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

function autofillBooking() {
	var rCBox = localStorage.getItem("rmbrCBox");
	if(rCBox == "true")
	{
		var name = document.getElementById("fullName");
		var ph = document.getElementById("mPhone");
		var eM= document.getElementById("email");
		
		name.value = localStorage.getItem("fullName");
		ph.value = localStorage.getItem("mPhone");
		eM.value = localStorage.getItem("email");
	}
}

function validate() {
	var regex = /[\.|[a-z]|\s|\-|\'/gi;
	var name = document.getElementById("fullName");
	var nameResult = regex.test(name.value);
	if(nameResult ==false) {
		alert("Invalid name; Can only contains letters ' . and - characters");
		name.style.border = "solid 2px red";
		return false;
	}
	if(nameResult ==true){
		name.style.border = "none";
	}

	var regex1 = /\+614\d{8}|04\d{8}/g;
	var ph = document.getElementById("mPhone");
	var phResult = regex1.test(ph.value);
	if(phResult==false) {
		alert("Must enter an Australian mobile number");
		ph.style.border = "solid 2px red";
		return false;
	}
	if(phResult==true)
	{
		ph.style.border = "none";
	}
	return true;
	
}
