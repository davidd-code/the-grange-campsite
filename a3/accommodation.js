function displaySmallUnpoweredSite() {
	var a = document.getElementById("sus");
	var b = document.getElementById("sps");
	var c = document.getElementById("mus");
	var d = document.getElementById("mps");
	var e = document.getElementById("cs");
    var f = document.getElementById("landing");
	
    if (a.style.display==="none") {
        
        f.style.display="none";	
		b.style.display="none"; 
        a.style.display="block";
		c.style.display="none";
		d.style.display="none";
		e.style.display="none";
	} else {
		
        f.style.display="block";	
        a.style.display="none";
		b.style.display="none";
		c.style.display="none";
		d.style.display="none";
		e.style.display="none";
	}
}

function displaySmallPoweredSite() {
	var a = document.getElementById("sus");
	var b = document.getElementById("sps");
	var c = document.getElementById("mus");
	var d = document.getElementById("mps");
	var e = document.getElementById("cs"); 
    var f = document.getElementById("landing");
	if (b.style.display==="none") {

        f.style.display="none";	
		a.style.display="none";
        b.style.display="block";
		c.style.display="none";
		d.style.display="none";
		e.style.display="none";
	} else {
		
        f.style.display="block";	
        b.style.display="none";
		a.style.display="none";
		c.style.display="none";
		d.style.display="none";
		e.style.display="none";
	}
}

function displayMediumUnpoweredSite() {
	var a = document.getElementById("sus");
	var b = document.getElementById("sps");
	var c = document.getElementById("mus");
	var d = document.getElementById("mps");
	var e = document.getElementById("cs");
    var f = document.getElementById("landing");
	if (c.style.display==="none") {

        f.style.display="none";	
		c.style.display="block";
		a.style.display="none";
		b.style.display="none";
		d.style.display="none";
		e.style.display="none";
	} else {
	
        f.style.display="block";	
        c.style.display="none";
		b.style.display="none";
		a.style.display="none";
		d.style.display="none";
		e.style.display="none";
	}
}

function displayMediumPoweredSite() {
	var a = document.getElementById("sus");
	var b = document.getElementById("sps");
	var c = document.getElementById("mus");
	var d = document.getElementById("mps");
	var e = document.getElementById("cs");
    var f = document.getElementById("landing");
	if (d.style.display==="none") {
		 
        f.style.display="none";	
        d.style.display="block";
		b.style.display="none";
		c.style.display="none";
		a.style.display="none";
		e.style.display="none";
	} else {
		
        f.style.display="block";	
        d.style.display="none";
		b.style.display="none";
		c.style.display="none";
		a.style.display="none";
		e.style.display="none";
	}
}

function displayCaravanSite() {
	var a = document.getElementById("sus");
	var b = document.getElementById("sps");
	var c = document.getElementById("mus");
	var d = document.getElementById("mps");
	var e = document.getElementById("cs");
    var f = document.getElementById("landing");
	if (e.style.display==="none") {
		e.style.display="block";	
        f.style.display="none";	
        b.style.display="none";
		c.style.display="none";
		d.style.display="none";
		a.style.display="none";
	} else {
		e.style.display="none";
        f.style.display="block";	
		b.style.display="none";
		c.style.display="none";
		d.style.display="none";
		a.style.display="none";
	}
}
