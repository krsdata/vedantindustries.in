jQuery(document).ready(function() {
    var advertica_aboutpage = adverticaLiteWelcomeScreenCustomizerObject.aboutpage;
    var advertica_nr_actions_required = adverticaLiteWelcomeScreenCustomizerObject.nr_actions_required;

    /* Number of required actions */
    if ((typeof advertica_aboutpage !== 'undefined') && (typeof advertica_nr_actions_required !== 'undefined') && (advertica_nr_actions_required != '0')) {
        jQuery('#accordion-section-themes .accordion-section-title').append('<a href="' + advertica_aboutpage + '"><span class="advertica-lite-actions-count">' + advertica_nr_actions_required + '</span></a>');
    }

    /* Upsell in Customizer (Link to Welcome page) */
    if ( !jQuery( ".advertica-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section advertica-upsells">');
    }
    if (typeof advertica_aboutpage !== 'undefined') {
        jQuery('.advertica-upsells').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="' + advertica_aboutpage + '" class="button" target="_blank">{themeinfo}</a>'.replace('{themeinfo}', adverticaLiteWelcomeScreenCustomizerObject.themeinfo));
    }
    if ( !jQuery( ".advertica-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('</li>');
    }
});