<?php

    class Fruit {
        //Property
        public $name = "Apple";
        public $color = "Red";

        //Method
        function getName() {
            return $this->name;
        }

        function getColor() {
            return $this->color;
        }
    }

    $apple = new Fruit();
    $apple->name = "Apple";
    $apple->color = "Red";
    echo $apple->getName();
    echo $apple->getColor();

    echo "<br>";

    $banana = new Fruit();
    $banana->name = "Banana";
    $banana->color = "Yellow";
    echo $banana->getName();
    echo $banana->getColor();

    $alpukat = new Fruit();
    $alpukat->name = "Alpukat"
    $alpukat->color = "Green";
    echo $alpukat->getName();
    echo $alpukat->getColor(); 

?>