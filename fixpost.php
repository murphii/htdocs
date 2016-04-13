<?php
/**
 * Created by PhpStorm.
 * User: EVESS
 * Date: 10/4/2559
 * Time: 12:07
 */
function getRealPOST() {
    $pairs = explode("&", file_get_contents("php://input"));
    $vars = array();
    foreach ($pairs as $pair) {
        $nv = explode("=", $pair);
        $name = urldecode($nv[0]);
        $value = urldecode($nv[1]);
        $vars[$name] = $value;
    }
    return $vars;
}

$posts = getRealPOST();

//This
foreach ($posts as $k => $v) {
    $_SESSION["register"][$k] = $v;
}
