<?php

class Worker {
    public function performTasks() {
        echo "Performing general worker tasks...\n";
    }

    public function attendMeeting() {
        echo "Attending a general meeting...\n";
    }
    
}

class Secretary extends Worker{
    public function performTasks() {
        echo "Planning the team and delegating tasks...\n";
    }

    public function attendMeeting() {
        echo "Attending a general meeting...\n";
    }
}

class Manager extends Worker {
    public function performTasks() {
        // Manager does not perform general worker tasks
        echo "Managing the team and delegating tasks...\n";
    }

    // Manager may not need to attend general meetings
    public function attendMeeting() {
        echo "Attending a managerial meeting...\n";
    }
}

// Usage example
$worker = new Worker();
$worker->performTasks();  // Output: Performing general worker tasks...
$worker->attendMeeting(); // Output: Attending a general meeting...

$secretery = new Secretary();
$secretery->performTasks();  // Output: Planning the team and delegating tasks...
$secretery->attendMeeting(); // Output: Attending a managerial meeting...

$manager = new Manager();
$manager->performTasks();  // Output: Managing the team and delegating tasks...
$manager->attendMeeting(); // Output: Attending a managerial meeting...

?>
