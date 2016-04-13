<?php

require 'vendor/autoload.php';

echo "hiii";


// $m = new (); // connect
// $db = $m->chulaDB; // get the database named "foo"

$query = (new MongoDB\Client)->JobDisable->disable_people->find();
echo '<pre>';

foreach ( $query as $current )
    print_r($current);

echo '</pre>';

?>