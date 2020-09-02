<?php
//oefening 1
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
print_r ($klas);

//oefening 2
$klas = array("Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck");

echo count($klas);

for($i=0; $i < count($klas); $i++){
  echo $klas[$i], PHP_EOL;
}



//oefening 3
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

foreach ($klas as $naam) {
  echo($naam), PHP_EOL;
}


//oefening 4
$bucket_list[];
$hoeveelheid_activiteiten = readline("Hoeveel activiteiten wilt u toevoegen aan uw bucket list?");
for($i=0; $i < $hoeveelheid_activiteiten; $i++){
  $Activity = readline("Welke activiteit moet toegevoegd worden aan uw bucket list?");
  array_push($bucket_list, $Activity);

}

print_r($bucket_list);
foreach ($bucket_list as $x) {
  echo($x), PHP_EOL;
}





?>
