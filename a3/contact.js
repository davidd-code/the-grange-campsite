function load() {
	
	var name = document.getElementById("fullName");
	var ph = document.getElementById("mPhone");
	var eM= document.getElementById("email");
	var bookingName = document.getElementById("bookingName");
	var bookingPhone = document.getElementById("bookingPhone");
	var bookingEmail = document.getElementById("bookingEmail");
	var rCBox = document.getElementById("rmbrCBox");
	var mcb = document.getElementById("mailCBx");
	/*if(rCBox == "true")
	{
		if(mcb == "true")
		{
			document.getElementById("mailCBx").checked = true;
		}
		document.getElementById("rmbrCBox").checked = true;
		name.value = localStorage.getItem("fullName");
		ph.value = localStorage.getItem("mPhone");
		eM.value = localStorage.getItem("email");
		var bookingName = document.getElementById("bookingName");
		var bookingPhone = document.getElementById("bookingPhone");
		var bookingEmail = document.getElementById("bookingEmail");
	}*/

	if (typeof localStorage !== 'undefined') {
    	name.value = localStorage.getItem("fullName");
		ph.value = localStorage.getItem("mPhone");
		eM.value = localStorage.getItem("email");
		rCBox.checked = true;
		if(localStore.getItem("mailCBx") == true) {
			mcb.checked;
		}
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
	if(!name.test(regex)) {
		alert("Invalid name; Can only contains letters ' . and - characters");
		name.focus();
		name.style.border = "solid 2px red";
		return false;
	}

	var regex1 = /\+614\d{8}|04\d{8}/g;
	var ph = document.getElementById("mPhone");
	if(!ph.test(regex1)) {
		alert("Must enter an Australian mobile number");
		ph.focus();
		ph.style.border = "solid 2px border";
		return false;
	}
	
}
