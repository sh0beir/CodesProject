<?php

// Define an abstract Employee class
abstract class Employee {
    abstract public function performTasks();
    public function attendMeeting() {
        echo "Attending a general meeting...\n";
    }
}

// Worker class implementing the Employee contract
class Worker extends Employee {
    public function performTasks() {
        echo "Performing general worker tasks...\n";
    }
}

// Secretary class implementing the Employee contract
class Secretary extends Employee {
    public function performTasks() {
        echo "Planning the team and managing appointments...\n";
    }
}

// Manager class implementing the Employee contract
class Manager extends Employee {
    public function performTasks() {
        echo "Managing the team and delegating tasks...\n";
    }

    public function attendMeeting() {
        echo "Attending a managerial meeting...\n";
    }
}

// Usage example
$worker = new Worker();
$worker->performTasks();  // Output: Performing general worker tasks...
$worker->attendMeeting(); // Output: Attending a general meeting...

$secretary = new Secretary();
$secretary->performTasks();  // Output: Planning the team and managing appointments...
$secretary->attendMeeting(); // Output: Attending a general meeting...

$manager = new Manager();
$manager->performTasks();  // Output: Managing the team and delegating tasks...
$manager->attendMeeting(); // Output: Attending a managerial meeting...

?>
