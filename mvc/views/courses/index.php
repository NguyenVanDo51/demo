<?php

echo '<ul>';
foreach ($courses as $course) {
    echo
        '<li>ID: ' . $course->id . '</li>
        <li>Name: ' . $course->name . '</li>
        <li>Description: ' . $course->description . '</li>'
        . '<br>';
    ;
}

echo '</ul>';