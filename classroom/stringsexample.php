<?php

$str="This is a string";
//$len=strlen($str);
//echo $len;

//for($i=5;$i<$len;$i++){

//	echo $str[$i];
//}

//echo substr($str,5,9);

//echo substr_replace($str,"toy",10,16);

//echo substr_count($str,'s');

//echo strpos($str,"string");
$vcounter=0;
$strv="Tiger is our national animal";
if(substr_count($strv,'a')>0){
		$vcounter++;
}
if(substr_count($strv,'e')>0){
		$vcounter++;
}
if(substr_count($strv,'i')>0){
		$vcounter++;
}
if(substr_count($strv,'o')>0){
		$vcounter++;
}
if(substr_count($strv,'u')>0){
		$vcounter++;
}


//echo $vcounter;
$str1="world";
$str2="world";

//echo substr_compare($str1,$str2,2);

//echo trim("  Hello world                  ");
/*
echo chr(97);
echo chr(98);
echo chr(99);
echo chr(100);
echo chr(101);
*/
/*
for($i=0;$i<5;$i++){

	for($j=97;$j<=97+$i;$j++){

		echo chr($j);
	}
	echo "<br>";
}
*/

$text="3.0";
$value=(float)$text;
echo number_format($value/2.0,2);


$num=8;
$val=(float)$num;
//echo number_format($val,4);


                                                                                                                                                                       