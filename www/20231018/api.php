<?php

require "employees.class.php";

$employees = new Employees();

header('Content-type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "GET" && !isset($_GET['id'])) {
    echo json_encode($employees->getEmployees());
} elseif ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['id'])) {
    echo json_encode($employees->getEmployee($_GET['id']));
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents('php://input', true));

    $birthDate = $data->birth_date;
    $firstName = $data->first_name;
    $lastName = $data->last_name;
    $gender = $data->gender;
    $hireDate = $data->hire_date;

    echo json_encode(['id' => $employees->addEmployee($birthDate, $firstName, $lastName, $gender, $hireDate)]);
}
