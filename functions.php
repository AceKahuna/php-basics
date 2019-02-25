<?php
//functions
$number = 25;
//the words followed by the $ sign are just variables
$squareroot = sqrt($number);

echo $squareroot;
echo"<br>";
echo sqrt(10000);
echo"<br>";
echo pow(2.5,5);//data in the brackets are called 'arguments'.The order really matter
echo"<br>";
echo  max(34,56,981892,1000000,32232,33,3,3,2,2223,2,333,232323232);
echo"<br>";
echo min(29239,23232,2,112,32,311,23,121);

$x = 63.74849;
echo"<br>";
echo round($x);
echo "<hr>";
echo round($x,3); //precision is to round off to how many dec. places
echo "<hr>";
echo floor($x);//this rounds it up downwards
echo "<hr>";
echo ceil($x);//this rounds it up upwards

$sentence="The Quick Brown Fox Jumped Over a Lazy dog";
echo "<hr>";
echo strtoupper($sentence); //a word in programming is called a string
echo "<hr>";
echo $sentence;
echo "<br>";
echo strtolower($sentence);
echo "<br>";
echo ucwords($sentence);
echo "<hr>";
echo str_word_count($sentence);//counts the words in the sentence
echo "<hr>";
echo strlen($sentence);//count the letters in the sentence
// how to encrpt a password
//one way encyrption
$password= "p@55w0rd";
echo "<hr>";
echo md5($password);//weak
echo "<hr>";
echo sha1($password);
// a better way to encrypt your password
echo "<hr>";
echo crypt($password,"dsaadjijdiajdiaiodivdsa");

//date
//files
//db
//email
//fetch data from another website
//

