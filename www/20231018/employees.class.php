<?php

require 'utils/db.php';

class Employees
{
    private $conn;

    public function __construct()
    {
        $db = DatabaseSingleton::getInstance();
        $this->conn = $db->getConnection();
    }

    public function getEmployees()
    {
        $result = $this->conn->query("SELECT emp_no, first_name FROM employees");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEmployee($id)
    {
        $result = $this->conn->query("SELECT * FROM employees WHERE emp_no='$id'");
        return $result->fetch_assoc();
    }

    public function addEmployee($birthDate, $firstName, $lastname, $gender, $hireDate)
    {
        $result = $this->conn->query("INSERT INTO `employees`(`birth_date`, `first_name`, `last_name`, `gender`, `hire_date`) VALUES ('$birthDate','$firstName','$lastname','$gender','$hireDate')");
        return $this->conn->affected_rows > 0 ? $this->conn->insert_id : null;
    }
}
