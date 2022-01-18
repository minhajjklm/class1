<?php

$i = 10;
$j = 20;

echo ( $i + $j ."<br>");
echo ( $i - $j ."<br>");
echo ( $i * $j ."<br>");
echo ($i / $j ."<br>");

//Greater then exicute if only true
echo $j>$i;

//less then exicute if only true
echo $i<$j;

//Greater then or equal exicute if only true
echo $i>= $j;

//Less then or equal exicute if only true
echo $i<= $j;

//exicute if only equal 
echo $i==$j;

//exicute if only not equal
echo $i!=$j;

echo "</br>";

$floatvalue = 10.20;
$intvalue = (int)$floatvalue;
echo $intvalue;

echo "</br>";

$stringvalue = "12.34";
$intvalue = (int)$stringvalue;
echo $intvalue;

echo "</br>";

$rawvalue = -6.46;
echo abs($rawvalue);

echo "</br>";

// To find square root

$totalsqure= 64;
echo sqrt ($totalsqure);

echo "</br>";

//To round a digit

$assignvalue= 0.69;
$nonassignvalue = 0.45;

echo round($assignvalue);
echo "</br>";

echo round ($nonassignvalue);
echo "</br>";

//to generate random value

$randsomvalue = rand($i,$j);
echo $randsomvalue ;

echo "</br>";

$fname = "Minhaj";
$lname = "Uddin";
$name = "Minhaj Uddin";

echo $fname," ",$lname . "</br>";

echo $fname. " " .$lname . "</br>";

echo strrev ($name). "</br>";
echo strlen ($name);

echo 'Hi "hello"' . "</br";








?>