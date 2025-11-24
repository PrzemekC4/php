<?php

$servername ="localhost";
$username = "root";
$password = "";

$dbname = "goetel_makow";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die(" nie udalo sie polaczyc". $conn->connect_error);
    ($conn->connect_error) 
}
    echo "Polaczaono z serwerem";

$sql = "CREATE DATABASE IF NOT EXIST goetel_makow";
if ($conn -> query($sql)) === TRUE) {
    echo "Utworzono baze badz baza juz istenieje";
    } else 
    die($conn->error) {
        echo "baza nie zostala utworzona"
    }

    