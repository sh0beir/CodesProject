<?php

// First hierarchy for Employee roles
abstract class Employee {
    abstract public function getRole();
}

class Developer extends Employee {
    public function getRole() {
        return "Developer";
    }
}

class Manager extends Employee {
    public function getRole() {
        return "Manager";
    }
}

// Second hierarchy for Employee benefits
abstract class EmployeeBenefits {
    abstract public function getBenefits();
}

class DeveloperBenefits extends EmployeeBenefits {
    public function getBenefits() {
        return "Health insurance, Stock options";
    }
}

class ManagerBenefits extends EmployeeBenefits {
    public function getBenefits() {
        return "Health insurance, Stock options, Company car";
    }
}

// Usage example
$developer = new Developer();
$developerBenefits = new DeveloperBenefits();

echo $developer->getRole() . " has benefits: " . $developerBenefits->getBenefits() . "\n";

$manager = new Manager();
$managerBenefits = new ManagerBenefits();

echo $manager->getRole() . " has benefits: " . $managerBenefits->getBenefits() . "\n";

?>
