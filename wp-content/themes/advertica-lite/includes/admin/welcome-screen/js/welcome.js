jQuery(document).ready(function() {
	
	/* Tabs in welcome page */
	function advertica_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".advertica-lite-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}
	
	var advertica_actions_anchor = location.hash;
	
	if( (typeof advertica_actions_anchor !== 'undefined') && (advertica_actions_anchor != '') ) {
		advertica_welcome_page_tabs('a[href="'+ advertica_actions_anchor +'"]');
	}
	
    jQuery(".advertica-lite-nav-tabs a").click(function(event) {
        event.preventDefault();
		advertica_welcome_page_tabs(this);
    });

});