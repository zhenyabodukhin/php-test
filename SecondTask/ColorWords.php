<?php

 $data = array("red", "blue", "green", "yellow", "lime",
    "magenta", "black", "gold", "gray", "tomato");

class ColorWords
{

    public function printWord($array)
    {
        $line = 0;

        while ($line < 6) {
            for ($i = 0; $i < count($array); $i++) {
                if ($line > 4) {
                    break;
                }

                $color = $this->random();
                while ($color == $i) {
                    $color = $this->random();
                }

                echo '<span style="color: '.$array[$color].' ">', $array[$i] . " ", '</span>';

                if ($i == count($array) / 2 - 1) {
                    echo PHP_EOL;
                    $line++;
                }
            }
            echo PHP_EOL;
            $line++;
        }
    }

    public function random() {
        return rand(0, 9);
    }
}

$obj = new ColorWords();
$obj->printWord($data);