<?php
    require_once'class_balok.php';

    $kotak1 = new Kotak(28, 19, 9);
    $kotak2 = new Kotak(27, 18, 8);
    $kotak3 = new Kotak(26, 17, 7);
    $kotak4 = new Kotak(25, 16, 6);

    echo "Kotak Kayu ke-1:<br>";
    echo "Luas Permukaan:".
    $kotak1->getLuas(). "<br>";
    echo "Keliling:".
    $kotak1->getKeliling()."<br>";
    echo "Volume:".
    $kotak1->getVolume()."<br>";
    echo"<br>";

    echo "Kotak Kayu ke-2: <br>";
    echo "Luas Permukaan:".
    $kotak2->getLuas(). "<br>";
    echo "Keliling:".
    $kotak2->getKeliling()."<br>";
    echo "Volume:".
    $kotak2->getVolume()."<br>";
    echo"<br>";

    echo "Kotak Kayu ke-3: <br>";
    echo "Luas Permukaan:".
    $kotak3->getLuas(). "<br>";
    echo "Keliling:".
    $kotak3->getKeliling()."<br>";
    echo "Volume:".
    $kotak3->getVolume()."<br>";
    echo"<br>";

    echo "Kotak Kayu ke-4: <br>";
    echo "Luas Permukaan:".
    $kotak4->getLuas(). "<br>";
    echo "Keliling:".
    $kotak4->getKeliling()."<br>";
    echo "Volume:".
    $kotak4->getVolume()."<br>";
?>