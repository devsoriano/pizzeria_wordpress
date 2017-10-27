$ = jQuery.noConflict();

$ ( document ).ready( function () {
  //ocultar y mostrar menú
  $( '.mobile-menu a' ).on('click', function () {
    $( 'nav.menu-sitio' ).toggle('slow');
  });

  //resize a pantalla para no desaparecer menú responsivo
  var breackpoint = 768;
  $( window ).resize( function () {
    //llamar a ajustarCajas  
    ajustarCajas();
    if ( $( document ).width() >= breackpoint ) {
      $( 'nav.menu-sitio' ).show();
    } else {
      $( 'nav.menu-sitio' ).hide();
    }
  });

  //llamar a ajustarCajas  
  ajustarCajas();
});

//ajustar cajas
function ajustarCajas() {
  var imagenes = $( '.imagen-caja' );
  if( imagenes.length > 0 ) {
    var altura = imagenes[0].height;
    var cajas = $( 'div.contenido-caja' );
    $( cajas ).each( function ( i, elemento ) {
      $( elemento ).css( { 'height': altura + 'px' } ); 
    }); 
  }
}