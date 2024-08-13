<?php

// Benefit class to represent employee benefits
class Benefits {
    private $benefits;

    public function __construct($benefits) {
        $this->benefits = $benefits;
    }

    public function getBenefits() {
        return $this->benefits;
    }
}

// Employee class with a role and benefits
class Employee {
    private $role;
    private $benefits;

    public function __construct($role, Benefits $benefits) {
        $this->role = $role;
        $this->benefits = $benefits;
    }

    public function getRole() {
        return $this->role;
    }

    public function getBenefits() {
        return $this->benefits->getBenefits();
    }
}

// Usage example
$developerBenefits = new Benefits("Health insurance, Stock options");
$developer = new Employee("Developer", $developerBenefits);

echo $developer->getRole() . " has benefits: " . $developer->getBenefits() . "\n";

$managerBenefits = new Benefits("Health insurance, Stock options, Company car");
$manager = new Employee("Manager", $managerBenefits);

echo $manager->getRole() . " has benefits: " . $manager->getBenefits() . "\n";

?>
