<?php
/**
 * Created by PhpStorm.
 * User: EVESS
 * Date: 17/4/2559
 * Time: 15:24
 */

require 'vendor/autoload.php';

$db = new MongoDB\Client();
$col = $db->mydb->disable_people;

$result = $col->findOne(['email' => $_GET['email']]);

if (empty($result)){
    echo "true";
} else {
    echo "false";
}




