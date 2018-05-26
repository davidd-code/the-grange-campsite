function US() {
    var a = document.getElementById("US");
    var b = document.getElementById("PS");
    var c = document.getElementById("UM");
    var d = document.getElementById("PM");
    var e = document.getElementById("C");
    var f = document.getElementById("landing");

    if (a.style.display==="block") {
        document.getElementById("aid").value = "";
        f.style.display="block";	
        b.style.display="none"; 
        a.style.display="none";
        c.style.display="none";
        d.style.display="none";
        e.style.display="none";
    } else {
        document.getElementById("aid").value = "US";
        f.style.display="none";	
        a.style.display="block";
        b.style.display="none";
        c.style.display="none";
        d.style.display="none";
        e.style.display="none";
    }
}

function PS() {
    var a = document.getElementById("US");
    var b = document.getElementById("PS");
    var c = document.getElementById("UM");
    var d = document.getElementById("PM");
    var e = document.getElementById("C"); 
    var f = document.getElementById("landing");
    if (b.style.display==="block") {
        document.getElementById("aid").value = "";
        f.style.display="block";	
        a.style.display="none";
        b.style.display="none";
        c.style.display="none";
        d.style.display="none";
        e.style.display="none";
    } else {
        document.getElementById("aid").value = "PS";
        f.style.display="none";	
        b.style.display="block";
        a.style.display="none";
        c.style.display="none";
        d.style.display="none";
        e.style.display="none";
    }
}

function UM() {
    var a = document.getElementById("US");
    var b = document.getElementById("PS");
    var c = document.getElementById("UM");
    var d = document.getElementById("PM");
    var e = document.getElementById("C");
    var f = document.getElementById("landing");
    if (c.style.display==="block") {
        document.getElementById("aid").value = "";
        f.style.display="block";	
        c.style.display="none";
        a.style.display="none";
        b.style.display="none";
        d.style.display="none";
        e.style.display="none";
    } else {
        document.getElementById("aid").value = "UM";
        f.style.display="none";	
        c.style.display="block";
        b.style.display="none";
        a.style.display="none";
        d.style.display="none";
        e.style.display="none";
    }
}

function PM() {
    var a = document.getElementById("US");
    var b = document.getElementById("PS");
    var c = document.getElementById("UM");
    var d = document.getElementById("PM");
    var e = document.getElementById("C");
    var f = document.getElementById("landing");
    if (d.style.display==="block") {
        document.getElementById("aid").value = "";
        f.style.display="block";	
        d.style.display="none";
        b.style.display="none";
        c.style.display="none";
        a.style.display="none";
        e.style.display="none";
    } else {
        document.getElementById("aid").value = "PM";
        f.style.display="none";	
        d.style.display="block";
        b.style.display="none";
        c.style.display="none";
        a.style.display="none";
        e.style.display="none";
    }
}

function C() {
    var a = document.getElementById("US");
    var b = document.getElementById("PS");
    var c = document.getElementById("UM");
    var d = document.getElementById("PM");
    var e = document.getElementById("C");
    var f = document.getElementById("landing");
    if (e.style.display==="block") {
        document.getElementById("aid").value = "";
        e.style.display="none";	
        f.style.display="block";	
        b.style.display="none";
        c.style.display="none";
        d.style.display="none";
        a.style.display="none";
    } else {
        document.getElementById("aid").value = "C";
        e.style.display="block";
        f.style.display="none";	
        b.style.display="none";
        c.style.display="none";
        d.style.display="none";
        a.style.display="none";
    }
}

var priceBook = {
    minAdult: 1,
    minChild: 0,
    maxPerson: 10,
    sites: {
        US: {
            price: 35.25,
            additionalAdultPrice: 10,
            additionalChildPrice: 5,
            includedPerson: 2
        },
        UM: {
            price: 40.50,
            additionalAdultPrice: 10,
            additionalChildPrice: 5,
            includedPerson: 2
        },
        PS: {
            price:50.25,
            additionalAdultPrice: 10,
            additionalChildPrice: 5,
            includedPerson: 2
        },
        PM: {
            price: 60.50,
            additionalAdultPrice: 10,
            additionalChildPrice: 5,
            includedPerson: 2
        },
        C:  {
            price: 100,
            additionalAdultPrice: 0,
            additionalChildPrice: 0,
            includedPerson: 0
        }
    }
};

function calculatePrice()   {
    var aid = document.getElementById("aid");
    var days = parseInt(document.getElementById("days").value, 10);
    var adults = parseInt(document.getElementById("adults").value, 10);
    var children = parseInt(document.getElementById("children").value, 10);
    var totalPeople = adults+children;
    var pricePerDay = 0;
    var totalPrice = 0;
    var GST = 0;
    console.log(priceBook['sites'][aid.value]['additionalChildPrice']);
    if(priceBook['sites'][aid.value]['includedPerson'] > 0)    {
        if(totalPeople > priceBook.maxPerson)   {
            document.getElementById("error").innerHTML = "Maximum total number of people is 10";
            document.getElementById("price").innerHTML = "N/A";
            document.getElementById("GST").innerHTML = "N/A";
        }   else if(aid.value == "")   {
            document.getElementById("error").innerHTML = "Please select one of the camp sites above";
            document.getElementById("price").innerHTML = "N/A";
            document.getElementById("GST").innerHTML = "N/A";
        }   else if(totalPeople <= 2)   {
            pricePerDay += priceBook['sites'][aid.value]['price'];
            totalPrice = days * pricePerDay;
            GST = totalPrice / 10;
            document.getElementById("price").innerHTML = totalPrice;
            document.getElementById("GST").innerHTML = GST;
        }   else    {
            pricePerDay += priceBook['sites'][aid.value]['price'];
            if(adults == 1) {
                pricePerDay += (children-1) * priceBook['sites'][aid.value]['additionalChildPrice'];
                totalPrice = days * pricePerDay;
                totalPrice = days * pricePerDay;
                GST = totalPrice / 10;
                document.getElementById("price").innerHTML = totalPrice;
                document.getElementById("GST").innerHTML = GST;
            }   else    {
                pricePerDay += (adults - 2) * priceBook['sites'][aid.value]['additionalAdultPrice'];
                pricePerDay += (children) * priceBook['sites'][aid.value]['additionalChildPrice'];
                console.log(priceBook['sites'][aid.value]['additionalChildPrice']);
                totalPrice = days * pricePerDay;
                GST = totalPrice / 10;
                document.getElementById("price").innerHTML = totalPrice;
                document.getElementById("GST").innerHTML = GST;
            }
        }
    }   else    {
        pricePerDay += priceBook['sites'][aid.value]['price'];
        totalPrice = days * pricePerDay;
        GST = totalPrice / 10;
        document.getElementById("price").innerHTML = totalPrice;
        document.getElementById("GST").innerHTML = GST;
    }
}
