<?php


header ("X-XSS-Protection: 0");

if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {

    $html .= '<pre>Hello ' . htmlspecialchars( $_GET[ 'name' ] ) . '</pre>';
}

?>
