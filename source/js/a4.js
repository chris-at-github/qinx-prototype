require('./vendor/bootstrap/dropdown.js');
require('./vendor/bootstrap/tabs.js');
require('./vendor/vodkabears/remodal.js');

require('./maps.js');

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

	// Open dummy modal
	var oBuildingModal = $('[data-remodal-id=c64569bf41d4b7d7e675ba16df104321]').remodal();

	if(oBuildingModal !== undefined) {
		oBuildingModal.open();
	}

});