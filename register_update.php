<?php
/**
 * Created by PhpStorm.
 * User: EVESS
 * Date: 18/4/2559
 * Time: 18:58
 */
session_start();
error_reporting(0);

require 'vendor/autoload.php';

if(isset($_SESSION['authentication']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $db = new MongoDB\Client();
    $collection = $db->mydb->disable_people;

    $result = $collection->updateOne(['email' => $_SESSION['email']], ['$set'=>$_POST]);
}
