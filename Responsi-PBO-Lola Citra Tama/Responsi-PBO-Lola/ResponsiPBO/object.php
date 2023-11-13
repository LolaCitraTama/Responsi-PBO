<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("Lola", "Bengkulu");

// manipulasi properti nama, alamat, negara
$person->nama = "Lola";
$person->alamat = "Bengkulu";
$person->negara = "Indonesia";

// menampilkan hasil
echo "nama = {$person->nama}" . PHP_EOL;
echo "alamat = {$person->alamat}" . PHP_EOL;
echo "negara = {$person->negara}" . PHP_EOL;
