<?php 
//inicializa la creación delas  tablas nuevas
function lapizzeria_database() {
    //WPDB se optienen los métodos para trabajar con tablas
    global $wpdb;
    global $lapizzeria_dbversion;
    //se agrega versión
    $lapizzeria_dbversion = '1.0';
    //se  obtiene el prefijo de la tabla
    $tabla = $wpdb->prefix  . 'reservaciones';
    //se obtiene collation de instalación
    $charset_collate = $wpdb->get_charset_collate();

    //Se agrega la estructura de la base de datos
    $sql = "CREATE TABLE " . $tabla. " (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        nombre varchar(50) NOT NULL,
        fecha datetime NOT NULL,
        email varchar(150) DEFAULT '' NOT NULL,
        telefono varchar(20) NOT NULL,
        mensaje longtext NOT NULL,
        PRIMARY KEY (id)
    ) " . $charset_collate . "; ";

    //Se necesita dbDelta para ejecutar SQL y está en upgrade
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    //Se agrega la versión de la base de datos para compararla con futuras actualizaciones
    add_option( 'lapizzeria_dbversion', $lapizzeria_dbversion );

    //Actualizar en caso de ser necesario
    $version_actual = get_option( 'lapizzeria_dbversion' );

    //Se comparan las dos versiones
    if ( $lapizzeria_dbversion != $version_actual ) {
        
        $tabla = $wpdb->prefix  . 'reservaciones';
        $charset_collate = $wpdb->get_charset_collate();
        
        //script de actualizaciones
        $sql = "CREATE TABLE " . $tabla. " (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            nombre varchar(50) NOT NULL,
            fecha datetime NOT NULL,
            email varchar(150) DEFAULT '' NOT NULL,
            telefono varchar(20) NOT NULL,
            mensaje longtext NOT NULL,
            PRIMARY KEY (id)
        ) " . $charset_collate . "; ";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
        
        //Se actualiza la versión de ser el caso
        update_option( 'lapizzeria_dbversion', $lapizzeria_dbversion );
    }
}

add_action( 'after_setup_theme', 'lapizzeria_database' );

//función para comprobar que la versión instalada es iguala  la base de datos nueva
function lapizzeriadb_revisar() {
    global $lapizzeria_dbversion;

    if( get_site_option( 'lapizzeria_dbversion' ) != $lapizzeria_dbversion ) {
        lapizzeria_database();
    }
}

add_action( 'plugins_loaded', 'lapizzeriadb_revisar' );