<?php

include_once(dirname(__FILE__) . '/../class/include.php');

$USER = new Radiologist(NULL);

if ($USER->logOut()) {
    header('Location: ../oncologist/login.php');
} else {
    header('Location: ./oncologist?error=2');
}

