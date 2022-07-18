<?php
function connectDB(): mysqli {
    $conn = new mysqli("localhost:3306", "root", "eC#Q5X&vyaXH", "concesionario");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}