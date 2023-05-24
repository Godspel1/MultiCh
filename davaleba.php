<?php
// Davaleba 1
$x = [
	"temo" => 23,
	"nika" => 32,
	"giorgi" => 45,
	"lia" => 28,
	"mariami" =>15,
	"tako" => 35,
	"vako" => 55
];

foreach ($x as $name => $age) {
    if ($age >= 30) { echo $name . "<br>"; }
    else { echo $name . " is younger than 30 " . "<br>" ; }
};
// Davaleba 2
$t = [
	"12",
	"32",
	"118",
	"15",
	"3",
];
function TimesTwo (int $num) {
    echo $num * 2;
};
 foreach ($t as $num) {echo TimesTwo($num) . "<br>";}
  