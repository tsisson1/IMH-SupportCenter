<?php

$c_time = mktime();
$open = strtotime('Today 5am');
$close = strtotime('Today 6pm');

if ($c_time > $open && $c_time < $close) {
    echo 'Chat open.';
} else {
    echo 'Chat closed.';
}

?>
