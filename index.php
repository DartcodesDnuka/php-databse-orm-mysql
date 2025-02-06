<?php
require_once "bootstrap.php"; // Ensures $entityManager is initialized

use Entities\User; // Ensure correct namespace

// Now create and persist the user entity
$user = new User();
$user->setName('John Doe');
$user->setEmail('john.doe@example1.com');

// Persist the entity
$entityManager->persist($user);
$entityManager->flush(); // Commit the transaction

echo "User created with ID: " . $user->getId();
?>
