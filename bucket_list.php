<?php
echo "hoeveel wil je toevoegen\n";
$num = readline();
if (is_numeric($num)){
}
else {
    echo "$num is geen getal lol"; exit();
}
$list = array ();
for ($x = 1; $x <= $num; $x++) {
   echo "wat wil je in de bucket list zetten\n";
   $keuze = readline();
   array_push($list , "- $keuze\n");
  }
echo "je hebt nu:\n";
foreach ($list as $keuze){
    echo "$keuze";
}
