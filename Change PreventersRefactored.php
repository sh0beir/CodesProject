<?php

class Salary {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function increase($amount) {
        $this->amount += $amount;
    }

    public function calculateBonus() {
        return $this->amount * 0.10;
    }
}

class Employee {
    private $name;
    private $address;
    private $salary;

    public function __construct($name, $address, Salary $salary) {
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
        return $this->salary->getAmount();
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function applySalaryIncrease($amount) {
        $this->salary->increase($amount);
    }

    public function getBonus() {
        return $this->salary->calculateBonus();
    }
}

class EmployeeRepository {
    public function save(Employee $employee) {
        // Simulate database save
        echo "Employee saved: " . $employee->getName() . ", " . $employee->getAddress() . "\n";
    }
}

class EmployeeService {
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository) {
        $this->employeeRepository = $employeeRepository;
    }

    public function updateEmployeeSalary(Employee $employee, $increaseAmount) {
        $employee->applySalaryIncrease($increaseAmount);
        $this->employeeRepository->save($employee);
    }

    public function changeEmployeeAddress(Employee $employee, $newAddress) {
        $employee->setAddress($newAddress);
        $this->employeeRepository->save($employee);
    }
}

// Usage example
$salary = new Salary(50000);
$employee = new Employee("John Doe", "123 Main St", $salary);
$employeeRepository = new EmployeeRepository();
$employeeService = new EmployeeService($employeeRepository);

$employeeService->updateEmployeeSalary($employee, 5000);
$employeeService->changeEmployeeAddress($employee, "456 Elm St");

?>
