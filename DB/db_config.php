<?php

    // Connect to DB
    function openCon(){

        $host   = 'localhost';
        $uname  = '';
        $passwd = '';
        $db     = '';
        
        $conn = new mysqli($host, $uname, $passwd, $db);

        if( $conn->connect_error ){
            die('Connection failed: ' . $conn->connect_error);
        }

        return $conn;
    }

    // Disconnect from DB
    function closeCon($conn){

        $conn -> close();
    }
?>