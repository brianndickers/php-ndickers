<?php
//arrays
$names=["Miriam", "Kevo","Ken","Patrick","Edu","Carlos","Evy","Liams"];
$ages=[19,15,24,16,35,45,17,98,45,78];
echo $names[4];
echo "<hr>";
echo $ages[5];

foreach ($names as $jina)
{
    echo "$jina <br>";
}



echo "<hr>";
echo sizeof($names);
echo "<hr";
array_push($names,"Kalvo");
echo sizeof($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
array_pop($names);
var_dump($names);
echo "<hr>";
rsort($sge);
foreach ($ages as $miaka)
{
    echo "$miaka<br>";
}
echo "<hr>";
echo array_sum($ages);
echo "<hr>";
//associative array
$person =["names"=>"Miriam ken", "age"=>16, "color"=>"red"];
echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["color"];
