<?php

    $servername = getenv("MYSQL_SERVER");
    $username = getenv("MYSQL_USERNAME");
    $password = getenv("MYSQL_PASSWORD");
    $databasename = getenv("MYSQL_DATABASE");


    $conn = new mysqli($servername,$username,$password,$databasename);



    $productName = $_POST["product_name"];
    $sku = $_POST["sku"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];

    $query = "INSERT INTO products (PRODUCT_NAME,SKU,QTY,UNIT_PRICE)
              values ('$productName','$sku','$qty',$price)";

    $conn->query($query);

    $conn->close();
