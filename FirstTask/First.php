<?php


class First {

    public function getClassname() {
        echo get_called_class();
        echo PHP_EOL;
    }

    public function getLetter() {
        echo "A";
        echo PHP_EOL;
    }
}

class Second extends First {

    public function getLetter() {
        echo "B";
        echo PHP_EOL;
    }
}


$firstObj = new First();

echo $firstObj->getClassname();
echo $firstObj->getLetter();

$secondObj = new Second();

echo $secondObj->getClassname();
echo $secondObj->getLetter();