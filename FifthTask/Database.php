<?php

$link = mysqli_connect("localhost", "root", "root", "test");


$sqlOne = 'SELECT fullname, money FROM persons';
$resultOne = mysqli_query($link, $sqlOne);

while ($row = mysqli_fetch_row($resultOne)) {
    printf ("%s %s\n", $row[0], $row[1]);
}
echo PHP_EOL;


$sqlTwo = 'SELECT name FROM cities
JOIN persons ON cities.id=persons.city_id
JOIN transactions ON persons.id=transactions.from_person_id
GROUP BY cities.name
ORDER BY count(*) DESC LIMIT 1';
$resultTwo = mysqli_query($link, $sqlTwo);

while ($row = mysqli_fetch_row($resultTwo)) {
    printf ("%s \n", $row[0]);
}
echo PHP_EOL;


$sqlThree ='SELECT transaction_id, from_person_id, to_person_id, amount FROM transactions
JOIN persons p1 ON transactions.from_person_id=p1.id
JOIN persons p2 ON transactions.to_person_id=p2.id
WHERE p1.city_id=p2.city_id';
$resultThree = mysqli_query($link, $sqlThree);

while ($row = mysqli_fetch_row($resultThree)) {
    printf ("%s %s %s %s\n", $row[0], $row[1], $row[2], $row[3]);
}
