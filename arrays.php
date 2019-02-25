<?php
//arrays
$names = ["Mary","Musa","Mike","Moha","Mendi","Jack","Omosh","Otamelon"];
//working with arrays you start counting from zero
$ages = [34,23,45,19,32,27,20,21,27,29,45];

echo $names[4];
echo"<hr>";
echo $ages [0];
//for-each loop can be used in order to read the data one by one
foreach ($names as $jina)
{
    echo "$jina <br>";
}
echo "<hr>";
//commonly used functions in arrays
echo sizeof($names); // count the number of names in the array
echo"<hr>";

array_push($names,"Bush");//used to add data in the array
echo sizeof($names);
echo"<hr>";
var_dump($names); // to check what is in the array
echo"<hr>";
array_pop($names);// it will remove the last thing in the array
var_dump($names);
echo "<hr>";
sort($ages); //arranges from the lowest to the highest
foreach ($ages as $miaka)
{
    echo"$miaka <br>";
}
echo "<hr>";
rsort($ages); //arranges from the  highest to the lowest. the tag used is called reverse sort.
foreach ($ages as $miaka)
{
    echo"$miaka <br>";
}

echo "<hr>";
echo array_sum($ages);

echo "<hr>";
//associative array
$person = ["names"=> "Moha Musa","age"=>45,"color"=>"black"];

echo $person["names"];
echo $person["age"];
echo $person["color"];
