<?php
require_once "bootstrap.php";

use Entities\User;

// Find user by ID
$user = $entityManager->find(User::class, 1); // Assume ID = 1

if ($user) {
    $entityManager->remove($user);
    $entityManager->flush();

    echo "Deleted User with ID: 1";
} else {
    echo "User not found.";
}
?>
