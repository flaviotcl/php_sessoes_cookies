<?php

session_start();

$user = $_SESSION['user'] ?? null;

if(!$user){
    header('location: login.php');
    exit;
}

?>

<h1>Página Protegida</h1>

<p>Olá, <?php echo $user['email']; ?></p>