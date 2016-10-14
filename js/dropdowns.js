
  $(document).ready(function() {
    $( "#FRO_M" ).selectmenu();   // selecting currencies
    $( "#TO_BE" ).selectmenu();
	$(function() {
    var availableTags = [        //search functionality
      "AUD-Australian Dollar",
      "BGN-Bulgarian Lev",
      "BRL-Brazilian Real",
      "CAD-Canadian Dollar",
      "CHF-Swiss Franc",
      "CNY-Chinese Yuan",
      "CZK-Czech Republic Koruna",
      "DKK-Danish Krone",
      "GBP-British Pound",
      "HKD-Hong Kong Dollar",
      "HRK-Croatian Kuna",
      "HUF-Hungarian Forint",
      "IDR-Indonesian Rupiah",
      "ILS-Israeli New Sheqel",
      "INR-Indian Rupee",
      "JPY-Japanese Yen",
      "KRW-South Korean Won",
      "MXN-Mexican Peso",
      "MYR-Malaysian Ringgit",
      "NOK-Norwegian Krone",
      "NZD-New Zealand Dollar",
      "PHP-Philippine Peso",
      "PLN-Polish Zloty",
      "RON-Romanian Leu",
      "RUB-Russian Ruble",
      "SEK-Swedish Krona",
      "SGD-Singapore Dollar",
      "THB-Thai Baht",
      "TRY-Turkish Lira",
      "USD-US Dollar",
      "ZAR-South African Rand",
      "EUR-Euro"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  });
  
