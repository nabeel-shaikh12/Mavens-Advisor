
"use strict"
var dzSettingsOptions = {};
function getUrlParams(dParam) 
	{
		var dPageURL = window.location.search.substring(1),
			dURLVariables = dPageURL.split('&'),
			dParameterName,
			i;

		for (i = 0; i < dURLVariables.length; i++) {
			dParameterName = dURLVariables[i].split('=');

			if (dParameterName[0] === dParam) {
				return dParameterName[1] === undefined ? true : decodeURIComponent(dParameterName[1]);
			}
		}
	}
(function($) {
	"use strict"
	dzSettingsOptions = {
		typography: "poppins",
		version: "light",
		layout: "vertical",
		primary: "color_14",
		headerBg: "color_14",
		navheaderBg: "color_14",
		sidebarBg: "color_14",
		sidebarStyle: "full",
		sidebarPosition: "fixed",
		headerPosition: "fixed",
		containerLayout: "full",
	};
	new dzSettings(dzSettingsOptions); 

	jQuery(window).on('resize',function(){
        dzSettingsOptions.containerLayout = $('#container_layout').val();
        new dzSettings(dzSettingsOptions); 
	});
	
})(jQuery);