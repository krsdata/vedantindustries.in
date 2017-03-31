( function( $ ) {
    /* ==============================
        Site Title and Description
    ============================== */
    wp.customize('blogname',function( value ) {
        value.bind(function(newvalue) {
            $('#site-title a').html(newvalue);
        });
    });
    wp.customize('blogdescription',function( value ) {
        value.bind(function(newvalue) {
            $('#site-description').html(newvalue);
        });
    });

    /* ==============================
        Home Blog Section
    ============================== */
    wp.customize('advertica_lite_home_blog_title',function( value ) {
        value.bind(function(newvalue) {
            $('#front-blog-title').html(newvalue);
        });
    });
    
    /* ==============================
        Footer Copyright Section
    ============================== */
    wp.customize('copyright',function( value ) {
        value.bind(function(newvalue) {
            $('#copyright').html(newvalue);
        });
    });

    /* ==============================
        Front Page Settings (Featured Box)
    ============================== */
    wp.customize('first_feature_heading',function( value ) {
        value.bind(function(newvalue) {
            $('#first-feature-heading').html(newvalue);
        });
    });
    wp.customize('second_feature_heading',function( value ) {
        value.bind(function(newvalue) {
            $('#second-feature-heading').html(newvalue);
        });
    });
    wp.customize('third_feature_heading',function( value ) {
        value.bind(function(newvalue) {
            $('#third-feature-heading').html(newvalue);
        });
    });

} )( jQuery )