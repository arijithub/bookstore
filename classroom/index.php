

<?="Hello world"; ?><?php /*"This is a tree";
phpinfo(); */
?>
<?php
/*
$a=5;
$b=3;
$c=2;
$d=$a>$b?$a:$b;
$e=$d>$c?$d:$c;
echo $e;

echo (($a>$b&&$a>$c)?$a;
*/
$a=30;
$b=60;
$c=20;
//$d=50;
//echo ($a>$b&&$a>$c&&$a>$d)?$a:($b>$c&&$b>$d)?$b:($c>$d?$c:$d);
//echo ($a>$b)?($a>$c?$a:$c):($b>$c?$b:$c);
?>
<?php
echo "<br>";

echo display("Hello","there");
function display($greet,$mess){
$greet="Hi";
$mess="there";
$com=$greet.$mess;
return $com;
}




