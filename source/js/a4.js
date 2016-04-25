require('./vendor/bootstrap/dropdown.js');
require('./vendor/bootstrap/tabs.js');
require('./vendor/vodkabears/remodal.js');

$(function() {


	// -------------------------------------------------------------------------------------------------------------------
	// Tabs
	$('.tabs .tabs--navigation a').click(function(e) {
		e.preventDefault();

		var tab = $(this);
		var text = tab.text();

		// Dropdown Toggle mit aktuellen Wert befuellen
		$('.dropdown-toggle', tab.closest('.dropdown')).text(text);

		// Active Klasse bei allen vorherigen entfernen
		$('li', tab.closest('ul')).removeClass('active');

		// Tab aktivieren
		tab.tab('show');
	});

});