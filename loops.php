<?php
// loops for while,do-while,foreach
for($x=100;$x>=0;$x--) // here it is decreasing by one (--)
{
    $result= $x *$x;
    //echo "$x walter <br>"
    echo "$x x $x =$result <br>";

}

for($x=-50;$x<=0;$x++) // here it is increasing by one (++)
{
    $result = $x * $x;
    //echo "$x walter <br>"
    echo "$x x $x =$result <br>";
}
//while loop
$z=10;
while($z<=100)
{
    $result= sqrt($z);
    echo "Squareroot $z is $result <br>";
    $z+=5;// the increment codes must be typed or else the system will crush
    //
}

//do-while loop
$k=1;
do{
    echo"$k <hr>";
    $k++;
}
while($k<=10);