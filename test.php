<?php
require_once "src/SearchEngine.php";

$rq = new \SearchEngine\SearchEngine();

$rq->setEngine('google.com');

$res = $rq->search(array('Flipcart'));
echo '<pre>';
print_r($res);
?>