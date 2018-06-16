<?php
    function startsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    function endsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        return $length === 0 ||
        (substr($haystack, -$length) === $needle);
    }

    function connectionMysql()
    {
        $serverName = "localhost";
        $userName = "juan";
        $pass ="Password12!";

        $conn = new mysqli($serverName,$userName,$pass);

        if($conn -> connect_error):
            die("Connection failed: " . $conn->connect_error);
        endif;

        $sql = "SELECT NAME FROM  prueba.users";
        $result = $conn->query($sql);

        if($result->num_rows>0)
            echo "result OK";
        else
            echo "not result";


        //return $conn;
    }