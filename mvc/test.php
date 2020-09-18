<?php
include_once('connection.php');

$db = DB::getInstance();
$req = $db->query('SELECT * from courses');

var_dump($req->fetchAll());