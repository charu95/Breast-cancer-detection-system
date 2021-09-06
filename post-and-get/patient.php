<?php

include_once(dirname(__FILE__) . '/../class/include.php');

if (isset($_POST['create'])) {

    $PATIENT = new Patient(NULL);
    $VALID = new Validator();

    $PATIENT->name = $_POST['name'];
    $PATIENT->age = $_POST['age'];
    $PATIENT->gender = $_POST['gender'];
    $PATIENT->address = $_POST['address'];
    $PATIENT->status = "0";
    $PATIENT->comment = '';
    $PATIENT->queue = 0;

    $dir_dest = '../upload/patient/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 150;
        $handle->image_y = 150;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PATIENT->image_name = $imgName;

    $VALID->check($PATIENT, [
        'name' => ['required' => TRUE],
        'age' => ['required' => TRUE],
        'gender' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $PATIENT->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}


if (isset($_POST['change'])) {

    
    var_dump($_POST['change']);

    $PATIENT = new Patient($_POST['id']);

    
    $PATIENT->status = $_POST['status'];
    $PATIENT->comment = $_POST['comment'];

    $VALID = new Validator();
    $VALID->check($PATIENT, [
        'ststus' => ['required' => TRUE],
        'comment' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $PATIENT->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $PATIENT = Activities::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}