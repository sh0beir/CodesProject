<?php

class User {
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email) {
        if (empty($firstName) || empty($lastName) || empty($email)) {
            throw new Exception("All fields are required.");
        }

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class UserManager {

    public function registerUser(User $user) {
        // Simulate saving user to the database
        echo "User registered: " . $user->getFullName() . ", " . $user->getEmail() . "\n";
    }

    public function updateUser($userId, User $user) {
        // Simulate updating user in the database
        echo "User updated: $userId - " . $user->getFullName() . ", " . $user->getEmail() . "\n";
    }
}

class EmailService {

    public function sendWelcomeEmail(User $user) {
        // Simulate sending email
        echo "Welcome email sent to " . $user->getFullName() . " at " . $user->getEmail() . "\n";
    }
}

$user = new User("John", "Doe", "john.doe@example.com");

$userManager = new UserManager();
$userManager->registerUser($user);
$userManager->updateUser(1, $user);

$emailService = new EmailService();
$emailService->sendWelcomeEmail($user);

?>
