<?php

$servername = getenv("MYSQL_SERVER");
$username = getenv("MYSQL_USERNAME");
$password = getenv("MYSQL_PASSWORD");
$databasename = getenv("MYSQL_DATABASE");
$salt = getenv("SALT");



$conn = new mysqli($servername,$username,$password,$databasename);


$name = $_POST["name"];
$address= $_POST["address"];
$email = $_POST["email"];
$pass = $_POST["pass"];

$pass_encrypt = crypt($pass,$salt);


$query = "INSERT INTO users (name,password,address,email)
              values ('$name','$pass_encrypt','$address','$email')";

$conn->query($query);

$conn->close();
