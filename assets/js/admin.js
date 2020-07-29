( function ( $ ) {


$( window ).load( function() {

  wp.customize( 'logo_header', function( value ) {
    	value.bind( function( value ) {

    		if ( 'svg-logo' === value ) {

          wp.customize.control('theme_header_svg_logo').container.show();
          wp.customize.control('custom_logo').container.hide();

    		} else {

    		  wp.customize.control('theme_header_svg_logo').container.hide();
          wp.customize.control('custom_logo').container.show();

    		}

    	});
    });
  });
} ) (jQuery);
