<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$Lola = new Person("Lola", "Bengkulu");

// tambahkan value nama di object
$Lola->nama = "Lola";

// panggil function sayHelloNull dengan parameter
$Lola->sayHelloNull("Citra");

// buat object dari kelas person
$Aga = new Person("Aga", "Korea");

// tambahkan value nama di object
$Aga->nama = "Dwi";

// panggil function sayHelloNull dengan parameter null
$Aga->sayHelloNull(null);
