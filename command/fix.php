<?php


if( isset( $_POST[ 'submit' ]  ) ) {

    $target = $_REQUEST[ 'ip' ];


    $substitutions = array(
        '&&' => '',
        ';'  => '',
    );


    $target = str_replace( array_keys( $substitutions ), $substitutions, $target );


    if( stristr( php_uname( 's' ), 'Windows NT' ) ) {

        $cmd = shell_exec( 'ping  ' . $target );
    }
    else {

        $cmd = shell_exec( 'ping  -c 4 ' . $target );
    }

    // Feedback for the end user
    $html .= "<pre>{$cmd}</pre>";
}

?>
