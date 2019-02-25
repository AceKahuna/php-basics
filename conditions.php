<?php
$age=18;

if($age>=18) {
    echo "You can register";
}
else
{
    echo"You are under age";

}

echo'<hr>';

$day_of_the_week=8;

switch ($day_of_the_week)
{
    case 1:
        echo"Monday";
        break;/*means stop there*/
    case 2:
        echo"Tuesday";
        break;
    case 3:
        echo"Wednesday";
        break;
    case 4:
        echo"Thursday";
        break;
    case 5:
        echo"Friday";
        break;
    case 6:
        echo"Saturday";
        break;
    case 7:
        echo"Sunday";
        break;
    default: /*accommodates any other values*/
        echo "Unknown day";
}
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 3:25 PM
 */