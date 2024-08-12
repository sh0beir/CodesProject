<?php

class UserManager {

    public function registerUser($firstName, $lastName, $email) {
        if (empty($firstName) || empty($lastName) || empty($email)) {
            throw new Exception("All fields are required.");
        }

        // Simulate saving user to the database
        echo "User registered: $firstName $lastName, $email\n";
    }

    public function updateUser($userId, $firstName, $lastName, $email) {
        if (empty($firstName) || empty($lastName) || empty($email)) {
            throw new Exception("All fields are required.");
        }

        // Simulate updating user in the database
        echo "User updated: $userId - $firstName $lastName, $email\n";
    }
}

class EmailService {

    public function sendWelcomeEmail($firstName, $lastName, $email) {
        $fullName = $firstName . ' ' . $lastName;
        // Simulate sending email
        echo "Welcome email sent to $fullName at $email\n";
    }
}

$userManager = new UserManager();
$userManager->registerUser("John", "Doe", "john.doe@example.com");
$userManager->updateUser(1, "John", "Doe", "john.doe@example.com");

$emailService = new EmailService();
$emailService->sendWelcomeEmail("John", "Doe", "john.doe@example.com");

?>