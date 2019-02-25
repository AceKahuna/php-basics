<?php
//files.php
$data="\nMark John "; // '\n' saves the data on a new line

$data2 =file_get_contents("names.txt");

echo $data2;

file_put_contents("names.txt",$data, FILE_APPEND);
// The tag "file_append' is used to display the file created in the data base


// sudo chmod 777 -R . this to allow files to be entered in this folder
// sudo means SuperUserdo