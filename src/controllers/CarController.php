<?php
require __DIR__ . "/../models/CarModel.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST['action']) {
        case 'add':
            add($_POST);
            break;
        case 'update':
            update($_POST);
            break;
        case 'delete':
            delete($_POST);
            break;
        default:
            header('Location: index.php');
            break;
    }
}

function add($postArray): void {
    $enrollment = $postArray['txtEnrollment'];
    $motorNumber = $postArray['txtMotorNumber'];
    $bodyworkNumber = $postArray['txtBodyworkNumber'];
    $brand = $postArray['txtBrand'];
    $model = $postArray['txtModel'];
    $year = $postArray['txtYear'];
    $color = $postArray['txtColor'];
    $price = $postArray['txtPrice'];
    createCar($enrollment, $motorNumber, $bodyworkNumber, $brand, $model, $year, $color, $price);
    header('location: ../index.php');
}

function update($postArray): void {
    $id = $postArray['txtId'];
    $enrollment = $postArray['txtEnrollment'];
    $motorNumber = $postArray['txtMotorNumber'];
    $bodyworkNumber = $postArray['txtBodyworkNumber'];
    $brand = $postArray['txtBrand'];
    $model = $postArray['txtModel'];
    $year = $postArray['txtYear'];
    $color = $postArray['txtColor'];
    $price = $postArray['txtPrice'];
    updateCar($id, $enrollment, $motorNumber, $bodyworkNumber, $brand, $model, $year, $color, $price);
    header('location: ../index.php');
}

function delete($postArray): void {
    $id = $postArray['txtId'];
    deleteCar($id);
    header('location: ../index.php');
}

