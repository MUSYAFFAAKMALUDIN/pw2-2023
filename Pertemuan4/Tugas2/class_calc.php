<?php
    class Calculator {
    
        protected $bilangan1;
        protected $bilangan2;
    
        public function __construct($blgn1, $blgn2) {
            $this->bilangan1 = $blgn1;
            $this->bilangan2 = $blgn2;
        }
    
        public function pertambahan() {
            return $this->bilangan1 + $this->bilangan2;
        }
    
        public function pengurangan() {
            return $this->bilangan1 - $this->bilangan2;
        }
    
        public function pembagian() {
            return $this->bilangan1 / $this->bilangan2;
        }
    
        public function perkalian() {
            return $this->bilangan1 * $this->bilangan2;
        }
    }
    
    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);
    
    echo "Hasil Pertambahan: " . $calculator->pertambahan() . "<br>";
    echo "<br>";
    echo "Hasil Pengurangan: " . $calculator->pengurangan() . "<br>";
    echo "<br>";
    echo "Hasil Pembagian: " . $calculator->pembagian() . "<br>";
    echo "<br>";
    echo "Hasil Perkalian: " . $calculator->perkalian() . "<br>";
    echo "<br>";
    
?>