<?php 

function lapizzeria_guardar() {
    if ( isset( $_POST["enviar"] ) && $_POST['oculto'] == "1" ):
        global $wpdb;
        $tabla = $wpdb->prefix  . 'reservaciones';

        $nombre = sanitize_text_field( $_POST['nombre'] );
        $fecha = sanitize_text_field( $_POST['fecha'] );
        $email = sanitize_text_field( $_POST['email'] );
        $tel = sanitize_text_field( $_POST['tel'] );
        $mensaje = sanitize_text_field( $_POST['mensaje'] );

        $datos = array(
            'nombre' => $nombre,
            'fecha' => $fecha,
            'email' => $email,
            'telefono' => $tel,
            'mensaje' => $mensaje
        );
    
        $formato = array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s'
        );
    
        $wpdb->insert( $tabla, $datos, $formato );
        
        $url = get_page_by_title('Gracias por  tu reserva');

        wp_redirect( get_permalink( $url->ID ) );
        
        exit();

    endif;
}

add_action( 'init', 'lapizzeria_guardar' );