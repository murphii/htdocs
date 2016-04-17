<?php
/**
 * Created by PhpStorm.
 * User: EVESS
 * Date: 10/4/2559
 * Time: 12:07
 */
function getRealPOST() {
    return $_POST;
}

$posts = getRealPOST();

//This
foreach ($posts as $k => $v) {
    $_SESSION["register"][$k] = $v;
}
