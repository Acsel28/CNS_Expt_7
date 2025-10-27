<?php

if( isset( $_GET[ 'Submit' ] ) ) {

    $id = $_GET[ 'id' ];

    $query = "SELECT first_name, last_name FROM users WHERE user_id = ? LIMIT 1;";
    $stmt = mysqli_prepare($GLOBALS["___mysqli_ston"], $query);


    mysqli_stmt_bind_param($stmt, "s", $id);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);


    while( $row = mysqli_fetch_assoc( $result ) ) {

        $first = $row["first_name"];
        $last  = $row["last_name"];

        echo "<pre>ID: {$id}<br />First name: {$first}<br />Surname: {$last}</pre>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($GLOBALS["___mysqli_ston"]);
}
?>
