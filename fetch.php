<?php
require_once "bootstrap.php";
use Entities\User;

// Find all users
$users = $entityManager->getRepository(User::class)->findAll();

foreach ($users as $user) {
    echo "User: " . $user->getName() . " - " . $user->getEmail() . "<br>";
}
?>

<?php


// Find user by ID
$id = 1; // Change this to the ID you want to fetch
$user = $entityManager->find(User::class, $id);

if ($user) {
    echo "User Found: " . $user->getName() . " - " . $user->getEmail();
} else {
    echo "User not found.";
}

echo "</br>";

$users = $entityManager->getRepository(User::class)->findBy(['name' => 'John Doe']);

foreach ($users as $user) {
    echo "User: " . $user->getName() . " - " . $user->getEmail() . "<br>";
}


echo "</br>";


$query = $entityManager->createQuery('SELECT u FROM Entities\User u ORDER BY u.name ASC');
$users = $query->getResult();

foreach ($users as $user) {
    echo "User: " . $user->getName() . " - " . $user->getEmail() . "<br>";
}


echo "</br>";

echo "</br>";
$query = $entityManager->createQuery('SELECT u FROM Entities\User u WHERE u.email LIKE :email')
                      ->setParameter('email', '%.com');

$users = $query->getResult();

foreach ($users as $user) {
    echo "User: " . $user->getName() . " - " . $user->getEmail() . "<br>";
}

?>
