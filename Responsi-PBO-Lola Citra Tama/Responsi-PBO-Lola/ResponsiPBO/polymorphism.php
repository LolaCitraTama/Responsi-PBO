<?php

require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("Lola");
var_dump($company);

$company->programmer = new BackendProgrammer("Lola");
var_dump($company);

$company->programmer = new FrontendProgrammer("Lola");
var_dump($company);

sayHelloProgrammer(new Programmer("Lola Citra Tama"));
sayHelloProgrammer(new BackendProgrammer("Lola Citra Tama"));
sayHelloProgrammer(new FrontendProgrammer("Lola Citra Tama"));
