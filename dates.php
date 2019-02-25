<?php
date_default_timezone_set("Africa/Nairobi");
// used to set the default time zone
$today= date("d-M-y"); // use "y" to show only year in 2 digits. 'Y" will show the full dates
echo $today;
$time= date("H:i:s");//i is for the minutes
echo "<br> $time";


