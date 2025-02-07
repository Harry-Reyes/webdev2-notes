<?php
    $dbhost = '127.0.0.1';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'sql_injection';

    try {
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    } catch(Exception $e) {
        die("Connection not found " . $e->getMessage());
    }

    function prepare_username($sql_query, $options){
        global $conn;

        $stmt = mysqli_prepare($conn, $sql_query);

        mysqli_stmt_execute($stmt, $options);

        return mysqli_stmt_get_result($stmt);
    }
?>