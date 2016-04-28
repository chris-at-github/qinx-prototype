!(function(root, factory) {
	if(typeof define === 'function' && define.amd) {
		define(['jquery'], function($) {
			return factory(root, $);
		});
	} else if(typeof exports === 'object') {
		factory(root, require('jquery'));

	} else {
		factory(root, root.jQuery || root.Zepto);
	}
}) (this, function(global, $) {
	'use strict';

	$(function() {
		$('.map')
			.on('click', '.map--tile', function() {
				console.log('click: map-tile');
			})
			.on('mouseover', '.map--tile', function() {
				var oTile = $(this);

				if(oTile.find('.map--tile-object').length === 0) {
					var oObjectCreate = $('<div>')
						.addClass('map--tile-object')
						.addClass('map--tile-create');

					oTile.append(oObjectCreate);
				}
			})
			.on('mouseout', '.map--tile', function() {

			})
		;
	});
});