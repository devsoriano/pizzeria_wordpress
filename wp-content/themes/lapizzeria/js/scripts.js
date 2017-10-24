$ = jQuery.noConflict();

$ ( document ).ready( function () {
  //ocultar y mostrar menú
  $( '.mobile-menu a' ).on('click', function () {
    $( 'nav.menu-sitio' ).toggle('slow');
  });

  //resize a pantalla para no desaparecer menú responsivo
  var breackpoint = 768;
  $( window ).resize( function () {
      if ( $( document ).width() >= breackpoint ) {
        $( 'nav.menu-sitio' ).show();
      } else {
        $( 'nav.menu-sitio' ).hide();
      }
  });
});