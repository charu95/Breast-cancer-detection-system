<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of activities
 *
 * @author Suharshana DsW
 */
class Patient {

    public $id;
    public $name;
    public $image_name;
    public $age;
    public $gender;
    public $address;
    public $status;
    public $comment;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`name`,`image_name`,`age`,`gender`,`address`,`status`,`comment`,`queue` FROM `patient` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->image_name = $result['image_name'];
            $this->age = $result['age'];
            $this->gender = $result['gender'];
            $this->address = $result['address'];
            $this->status = $result['status'];
            $this->comment = $result['comment'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `patient` (`name`,`image_name`,`age`,`gender`,`address`,`status`,`comment`,`queue`) VALUES  ('"
                . $this->name . "','"
                . $this->image_name . "', '"
                . $this->age . "', '"
                . $this->gender . "', '"
                . $this->address . "', '"
                . $this->status . "', '"
                . $this->comment . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `patient` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `patient` SET "
                . "`name` ='" . $this->name . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`age` ='" . $this->age . "', "
                . "`gender` ='" . $this->gender . "', "
                . "`address` ='" . $this->address . "', "
                . "`status` ='" . $this->status . "', "
                . "`comment` ='" . $this->comment . "', "
                . "`queue` ='" . $this->queue . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {


        unlink(Helper::getSitePath() . "upload/patient/" . $this->image_name);

        $query = 'DELETE FROM `patient` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function arrange($key, $img) {
        $query = "UPDATE `patient` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
