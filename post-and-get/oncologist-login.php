<?php
 
include(dirname(__FILE__) . '/../class/Oncologist.php');

include(dirname(__FILE__) . '/../class/Database.php');

$USER = new Oncologist(NULL);

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


if (empty($username) || empty($password)) {
    header('Location: ../oncologist/login.php?message=6');
    exit();
}

if ($USER->login($username, $password)) {
    header('Location: ../oncologist/?message=5');
    exit();
} else {
    header('Location: ../oncologist/login.php?message=7');
    exit();
}

