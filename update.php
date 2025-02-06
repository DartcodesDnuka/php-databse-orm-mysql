<?php
require_once "bootstrap.php";

use Entities\User;

// Find user by ID
$user = $entityManager->find(User::class, 1); // Assume ID = 1

if ($user) {
    $user->setName('Test one'); // Update the name
    $user->setEmail('test.doe@example.com'); // Update the email

    $entityManager->flush(); // No need to call persist() again
    echo "Updated User with ID: " . $user->getId();
} else {
    echo "User not found.";
}
?>
