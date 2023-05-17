<?php
class Animal
{
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo()
    {
        return "Hewan: " . $this->nama . "\nJenis: " . $this->jenis;
    }
}

class Cat extends Animal
{
    public function __construct($nama)
    {
        parent::__construct($nama, "kucing");
    }

    public function getInfo()
    {
        return parent::getInfo() . "\nInformasi kucing khusus";
    }
}

class Dog extends Animal
{
    public function __construct($nama)
    {
        parent::__construct($nama, "anjing");
    }

    public function getInfo()
    {
        return parent::getInfo() . "\nInformasi anjing khusus";
    }
}

// Membuat objek dari class Animal
$animal = new Animal("Harimau", "Hewan ini adalah hewan jenis karnivora");
// Membuat objek dari class Kucing
$cat = new Cat("Mpuss, Hewan ini adalah mpuss jenis kucing. Kucing adalah hewan yang suka bermain dan bersih");
// Membuat objek dari class Dog
$dog = new Dog("Doggy, Hewan ini adalah Doggy jenis anjing. Anjing adalah hewan yang setia dan cerdas.");

// Memanggil method getInfo() untuk masing-masing objek
echo $animal->getInfo() . "\n";
echo "<br>";
echo $cat->getInfo() . "\n";
echo "<br>";
echo $dog->getInfo() . "\n";
