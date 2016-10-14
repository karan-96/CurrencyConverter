
    $.getJSON("http://api.fixer.io/latest", function(result){        // getting api
		$.each(result.rates, function( index, value ) {      // iterating over json objects
            var btn=  document.createElement("option");              // creating a option inside select menu
		    var t =	document.createTextNode(index);      //text for option, index is key of json object
			btn.appendChild(t);                           // append text to option    
            document.getElementById("FRO_M").appendChild(btn);       // appending option to select menu
		
			var btn1=  document.createElement("option");  //repeating above steps for second select menu
		    var t1 =	document.createTextNode(index);
			btn1.appendChild(t1);                               
            document.getElementById("TO_BE").appendChild(btn1);
			
    });

    });
	 
function swap(price,FRO_M,TO_BE){         //swap
	converter(price,TO_BE,FRO_M);    //parameters exchanged
	
} 
	

function converter(price,FRO_M,TO_BE) {       // converting currencies
	
    var P1 = document.getElementById(price).value;   //value from textbox
	if(isNaN(P1)||P1=="")
	{
		alert("enter a valid input");   // validation of price textbox
	}
	else{
	var P2 = document.getElementById(FRO_M).value;   //currency from
	var P3 = document.getElementById(TO_BE).value;    //currency to
	$.getJSON("http://api.fixer.io/latest", function(result){
	
	var C2=parseFloat(P1);      
	var ans;
	if(P2=="EUR"&&P3=="EUR"){
		ans=C2;                            //calculation for base value i.e euro,it is not in the selectmenu
	}
	else if(P2=="EUR"){
		ans=C2*result.rates[P3];
	}
	else if(P3=="EUR"){
		ans=C2/result.rates[P2];
	}
	
	else{
		var C1=result.rates[P3]/result.rates[P2];
	 ans=C1*C2;                                                //calculation for other currencies
	}
	
	document.getElementById("answer").innerHTML = P1+" "+P2+" = "+ans+" "+P3;  //showing result
	});
	
}
}
