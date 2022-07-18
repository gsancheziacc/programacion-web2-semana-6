<?php

class Car {
    private int $id;
    private string $enrollment;
    private string $motorNumber;
    private string $bodyworkNumber;
    private string $brand;
    private string $model;
    private int $year;
    private string $color;
    private float $price;

    public function __construct() {
        $this->id = 0;
        $this->enrollment = "";
        $this->motorNumber = "";
        $this->bodyworkNumber = "";
        $this->brand = "";
        $this->model = "";
        $this->year = 0;
        $this->color = "";
        $this->price = 0;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getEnrollment(): string {
        return $this->enrollment;
    }

    public function setEnrollment(string $enrollment): void {
        $this->enrollment = $enrollment;
    }

    public function getMotorNumber(): string {
        return $this->motorNumber;
    }

    public function setMotorNumber(string $motorNumber): void {
        $this->motorNumber = $motorNumber;
    }

    public function getBodyworkNumber(): string {
        return $this->bodyworkNumber;
    }

    public function setBodyworkNumber(string $bodyworkNumber): void {
        $this->bodyworkNumber = $bodyworkNumber;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function setBrand(string $brand): void {
        $this->brand = $brand;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function setModel(string $model): void {
        $this->model = $model;
    }

    public function getYear(): int {
        return $this->year;
    }

    public function setYear(int $year): void {
        $this->year = $year;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(string $price): void {
        $this->price = $price;
    }

}