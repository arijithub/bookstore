<?php
display("Hello","there");
function display($greet,$mess){

//echo $greet;
//echo $message;

}

$a=2;
$b=3;
//echo "\$a=".$a;
//echo "\$b=".$b;
swap($a,$b);
//echo "\$a=".$a;
//echo "\$b=".$b;
//echo $a;
//echo $b;
function swap(&$n1,&$n2){

 $swap=$n1;
 $n1=$n2;
 $n2=$swap;


}

$counter=0;

//echo count_num();
//echo count_num();
//echo count_num();
function count_num(){
global $counter;
//static $counter=0;
$counter++;
return $counter;

}
//echo $counter;

require 'encfunction1.php';
echo "hello";
 outer_function().inner_function();

