<?php
require __DIR__ . "/../config/db.php";
require __DIR__ . "/../entities/Car.php";
function getAllCars(): array {
    $conn = connectDB();
    $sql = "SELECT * FROM Auto";
    $result = $conn->query($sql);
    $cars = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $car = new Car();
            $car->setId($row['id']);
            $car->setEnrollment($row['matricula']);
            $car->setMotorNumber($row['serial_motor']);
            $car->setBodyworkNumber($row['serial_carroceria']);
            $car->setBrand($row['marca']);
            $car->setModel($row['modelo']);
            $car->setYear($row['anio']);
            $car->setColor($row['color']);
            $car->setPrice($row['precio']);
            array_push($cars, $car);
        }
    }
    $conn->close();
    return $cars;
}

function getCarById(int $id): Car {
    $conn = connectDB();
    $sql = "SELECT * FROM Auto WHERE id = $id";
    $result = $conn->query($sql);
    $car = new Car();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $car->setId($row['id']);
        $car->setEnrollment($row['matricula']);
        $car->setMotorNumber($row['serial_motor']);
        $car->setBodyworkNumber($row['serial_carroceria']);
        $car->setBrand($row['marca']);
        $car->setModel($row['modelo']);
        $car->setYear($row['anio']);
        $car->setColor($row['color']);
        $car->setPrice($row['precio']);
    }
    $conn->close();
    return $car;
}

function createCar(string $enrollment, string $motorNumber, string $bodyworkNumber, string $brand, string $model, int $year, string $color, float $price): bool {
    $conn = connectDB();
    $sql = "INSERT INTO Auto (matricula, serial_motor, serial_carroceria, marca, modelo, anio, color, precio) ";
    $sql = $sql . "VALUES ('$enrollment', '$motorNumber', '$bodyworkNumber', '$brand', '$model', '$year', '$color', '$price')";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

//function for update car
function updateCar(int $id, string $enrollment, string $motorNumber, string $bodyworkNumber, string $brand, string $model, int $year, string $color, float $price): bool {
    $conn = connectDB();
    $sql = "UPDATE Auto SET matricula = '$enrollment', serial_motor = '$motorNumber', serial_carroceria = '$bodyworkNumber'";
    $sql = $sql . ", marca = '$brand', modelo = '$model', anio = '$year', color = '$color', precio = '$price' WHERE id = $id";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function deleteCar(int $id): bool {
    $conn = connectDB();
    $sql = "DELETE FROM Auto WHERE id = $id";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}