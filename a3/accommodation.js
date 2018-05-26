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
        document.getElementById("aid").value = "UM";
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
        document.getElementById("aid").value = "PS";
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
            additioanlChildPrice: 5,
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

function calculatePricee()  {
    var aid = document.getElementById("aid");
    var days = document.getElementById("days").value;
    var adults = document.getElementById("adults").value;
    var children = document.getElementById("children").value;
    var price = 0;
    var totalPrice = 0;
    var GST = 0;
    
    if(priceBook['sites'[]])
}

function calculatePrice()   {
    var aid = document.getElementById("aid");
    var days = document.getElementById("days").value;
    var adults = document.getElementById("adults").value;
    var children = document.getElementById("children").value;
    var price = 0;
    var totalPrice = 0;
    var GST = 0;

    switch(aid.value)    {
           case "US":
                if(adults+children <= priceBook.sites.US.includedPerson)
                {
                        price = days * priceBook.sites.US.price;
                }
                else
                {
                    if(adults >= 2)
                        {
                            price = days * (priceBook.sites.US.price + (priceBook.sites.US.additionalAdultPrice * (adults - 2)) + (priceBook.sites.US.additionalChildPrice * (children)));
                        }
                    else
                        {
                            price = days * (priceBook.sites.US.price + (priceBook.sites.US.additionalChildPrice * (children-1)));
                        }
                }
            break;
            case "UM":
                if(adults+children <= priceBook.sites.UM.includedPerson)
                {
                        price = days * priceBook.sites.UM.price;
                }
                else
                {
                    if(adults >= 2)
                        {
                            price = days * (priceBook.sites.UM.price + (priceBook.sites.UM.additionalAdultPrice * (adults - 2)) + (priceBook.sites.UM.additionalChildPrice * (children)));
                        }
                    else
                        {
                            price = days * (priceBook.sites.UM.price + (priceBook.sites.UM.additionalChildPrice * (children-1)));
                        }
                }
            break;
    
            case "PS":
                if(adults+children <= priceBook.sites.PS.includedPerson)
                {
                        price = days * priceBook.sites.PS.price;
                }
                else
                {
                    if(adults >= 2)
                        {
                            price = days * (priceBook.sites.PS.price + (priceBook.sites.PS.additionalAdultPrice * (adults - 2)) + (priceBook.sites.PS.additionalChildPrice * (children)));
                        }
                    else
                        {
                            price = days * (priceBook.sites.PS.price + (priceBook.sites.PS.additionalChildPrice * (children-1)));
                        }
                }
            break;
            
            case "PM":
                if(adults+children <= priceBook.sites.PM.includedPerson)
                {
                        price = days * priceBook.sites.PM.price;
                }
                else
                {
                    if(adults >= 2)
                        {
                            price = days * (priceBook.sites.PM.price + (priceBook.sites.PM.additionalAdultPrice * (adults - 2)) + (priceBook.sites.PM.additionalChildPrice * (children)));
                        }
                    else
                        {
                            price = days * (priceBook.sites.PM.price + (priceBook.sites.PM.additionalChildPrice * (children-1)));
                        }
                }
            break;
    
            case "C":
                if(adults+children <= priceBook.sites.C.includedPerson)
                {
                        price = days * priceBook.sites.C.price;
                }
                else
                {
                    if(adults >= 2)
                        {
                            price = days * (priceBook.sites.C.price + (priceBook.sites.C.additionalAdultPrice * (adults - 2)) + (priceBook.sites.C.additionalChildPrice * (children)));
                        }
                    else
                        {
                            price = days * (priceBook.sites.C.price + (priceBook.sites.C.additionalChildPrice * (children-1)));
                        }
                }
            break;
            
            case "":
                document.getElementById("error").innerHTML = "Select one of the campsites with the buttons above.";
                document.getElementById("price").innerHTML = "N/A";
                document.getElementById("GST").innerHTML = "N/A";
            return;
    }
    GST = price/10;
    totalPrice = price + GST;
    document.getElementById("price").innerHTML = totalPrice;
    document.getElementById("GST").innerHTML = GST;
}