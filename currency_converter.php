<html>
<head>

<!--scripts-->
<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> 

<!--jquery_ui -->

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<!--dropdowns-->
<script src="js/dropdowns.js"></script>

<!-- creating list of currencies,converter & swap function-->
<script src="js/convert_swap_display.js"></script>

<!--/scripts-->  

<!--styling sheets-->

<!--layout-->
<link rel="stylesheet" type="text/css" href="css/layout.css">

<!--jquer ui-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<!--W3.css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<!--/styling sheets-->

</head>
<body>
<!--Full forms-->
<nav id="sidebar" class="w3-sidenav  w3-card-2" style="width:25%">
  <br>
  <ul id="full_form">
<div class="ui-widget">
  <label for="tags"><h3>Search Abbreviation:</h3> </label> <!--search-->
  <input id="tags">
</div>
        <li>AUD-Australian Dollar</li>
        <li>BGN-Bulgarian Lev</li>
        <li>BRL-Brazilian Real</li>
        <li>CAD-Canadian Dollar</li>
        <li>CHF-Swiss Franc</li>
        <li>CNY-Chinese Yuan</li>
        <li>CZK-Czech Republic Koruna</li>
        <li>DKK-Danish Krone</li>
        <li>GBP-British Pound</li>
        <li>HKD-Hong Kong Dollar</li>
        <li>HRK-Croatian Kuna</li>
        <li>HUF-Hungarian Forint</li>
        <li>IDR-Indonesian Rupiah</li>
        <li>ILS-Israeli New Sheqel</li>
        <li>INR-Indian Rupee</li>
        <li>JPY-Japanese Yen</li>
        <li>KRW-South Korean Won </li>
        <li>MXN-Mexican Peso</li>
        <li>MYR-Malaysian Ringgit</li>
        <li>NOK-Norwegian Krone</li>
        <li>NZD-New Zealand Dollar</li>
        <li>PHP-Philippine Peso</li>
        <li>PLN-Polish Zloty</li>
        <li>RON-Romanian Leu</li>
        <li>RUB-Russian Ruble</li>
        <li>SEK-Swedish Krona</li>
        <li>SGD-Singapore Dollar</li>
        <li>THB-Thai Baht</li>
        <li>TRY-Turkish Lira</li>
        <li>USD-US Dollar</li>
        <li>ZAR-South African Rand</li>
		<li>EUR-Euro</li>
		</ul>
		</nav>
		<!--/Full forms-->
		
<div style="margin-left:25%">
<!--heading-->
<header class="w3-container " >
 <h1><img id="image" src="images/converter.png" alt="converter"> Currency Converter</h1>
</header>
<!--/heading-->
<!--converter-->
<div id="main" class="w3-container ">
<fieldset style="margin:12%">
<h3>Price:</h3><input type="text" name="price" id="price" size="20">
    <label for="FRO_M"><h3>From:</h3></label>
    <select name="FRO_M" id="FRO_M">
	<option>EUR</option>
    </select><br>
	<label for="TO_BE"><h3>To:</h3></label>
    <select name="TO_BE" id="TO_BE">
	<option>EUR</option>
    </select><br>
   <button type="submit" class="button" onclick="converter('price','FRO_M','TO_BE');">Submit</button>    
   <button type="submit" class="button" onclick="swap('price','FRO_M','TO_BE');">Swap</button>
   <h2 id="answer"></h2>
   </fieldset>
	</div>
	<!--/converter-->
	</div>
	
</body>
</html>