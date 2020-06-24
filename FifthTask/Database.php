<?php

$link = mysqli_connect("localhost", "root", "root", "test");


$sqlOne = 'SELECT fullname, money FROM persons';
$resultOne = mysqli_query($link, $sqlOne);

while ($row = mysqli_fetch_row($resultOne)) {
    printf ("%s (%s)\n", $row[0], $row[1]);
}

