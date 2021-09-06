<?php

include_once(dirname(__FILE__) . '/../class/include.php');

$USER = new Radiologist(NULL);

if ($USER->logOut()) {
    header('Location: ../radiologist/login.php');
} else {
    header('Location: ./radiologist?error=2');
}

