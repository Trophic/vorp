<?php
$slist = ["rolls", "bread"];
$slist[] = "Nescafe";
array_push($slist, "milk");
var_dump($slist);

array_splice($slist, 1 , 1);
echo "<br>";
var_dump($slist);

unset($slist[1]);
$slist = array_values($slist);
echo "<br>";
var_dump($slist);
?>
