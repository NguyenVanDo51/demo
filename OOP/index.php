<?php

include_once 'Cat.php';
include_once 'Mouse.php';

$cat = new Cat('Cat 1', 'red');
$mouse1 = new Mouse('mouse 1', 'black');
$mouse2 = new Mouse('mouse 2', 'black');

echo('Start: ' . $mouse1 . $mouse2 . "<br>");

// Con meo an con chuot
$cat->eat($mouse1);
$cat->eat($mouse2);

echo('killed: ' . $mouse1 . $mouse2 . "<br>");
Mouse::ComeBack($mouse1, $mouse2);
echo('comeback cuc manh: ' . $mouse1 . $mouse2 . "<br>");

echo($cat);