<?php

class Employee {
    private $name;
    private $address;
    private $salary;

    public function __construct($name, $address, $salary) {
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}

class Payroll {
    public function calculateBonus(Employee $employee) {
        return $employee->getSalary() * 0.10;
    }

    public function applySalaryIncrease(Employee $employee, $increaseAmount) {
        $employee->setSalary($employee->getSalary() + $increaseAmount);
    }
}

class EmployeeDatabase {
    public function updateEmployeeDetails(Employee $employee) {
        // Simulate database update
        echo "Employee details updated: " . $employee->getName() . ", " . $employee->getAddress() . "\n";
    }
}

class EmployeeService {
    private $payroll;
    private $employeeDatabase;

    public function __construct(Payroll $payroll, EmployeeDatabase $employeeDatabase) {
        $this->payroll = $payroll;
        $this->employeeDatabase = $employeeDatabase;
    }

    public function updateEmployeeSalary(Employee $employee, $increaseAmount) {
        $this->payroll->applySalaryIncrease($employee, $increaseAmount);
        $this->employeeDatabase->updateEmployeeDetails($employee);
    }

    public function changeEmployeeAddress(Employee $employee, $newAddress) {
        $employee->setAddress($newAddress);
        $this->employeeDatabase->updateEmployeeDetails($employee);
    }
}

// Usage example
$employee = new Employee("John Doe", "123 Main St", 50000);
$payroll = new Payroll();
$employeeDatabase = new EmployeeDatabase();
$employeeService = new EmployeeService($payroll, $employeeDatabase);

$employeeService->updateEmployeeSalary($employee, 5000);
$employeeService->changeEmployeeAddress($employee, "456 Elm St");

?>
