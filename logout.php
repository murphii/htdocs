<?php
/**
 * Created by PhpStorm.
 * User: EVESS
 * Date: 17/4/2559
 * Time: 11:58
 */

session_start();
session_destroy();
echo "Logging out";
header("Location: mainpage.php");