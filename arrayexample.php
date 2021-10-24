<?php
// numeric array
$arr=['abc','def','ghi'];
//$arr1=array();
for($i=0;$i<count($arr);$i++){

	//echo "hello ".$arr[$i]."<br>";
}

foreach($arr as $key=>$val){

//echo "hello ".$val."<br>";
//echo "hello ".$arr[$key]."<br>";	

}

// associative array

$arr=['1'=>'abc','def','4'=>'ghi'];
//echo $arr['1']."<br>";
//echo $arr['2']."<br>";
//echo $arr['4'];
$arr1=[];
$arr1['a1']='abc';
$arr1[]='def';
$arr1['a3']='ghi';
//echo $arr1['a1']."<br>";
//echo $arr1['a2']."<br>";
//echo $arr1['a3'];

foreach($arr1 as $key=>$val){


//echo "hello ".$key ."<br>";	

}



$arr2=['abc','def','ghi'];

$str2=implode(',',$arr2);

//echo $str2;

$str3='abc,def,ghi';

$arr3=explode(',',$str3);

//print_r($arr3);


$arr4=['1'=>'abc','def','4'=>'ghi'];
unset($arr4['2']);
$arr4['2']='jkl';
//echo $arr4['1']."<br>";
//echo $arr4['2']."<br>";
//echo $arr4['4'];

$str="abcdefghi";
$new_str=substr($str,0,3).','.substr($str,3,3).','.substr($str,6,3);
$new_array=explode(',',$new_str);
//print_r($new_array);

$arrt[1]="orange";
$arrt[0]="vanilla";
$arrt[2]="rum raisin";
rsort($arrt);
//print_r($arrt);

$arrt[1]="orange";
$arrt[0]="vanilla";
$arrt[2]="rum raisin";
sort($arrt);
//print_r($arrt);

$arrt[1]="orange";
$arrt[0]="vanilla";
$arrt[2]="rum raisin";
asort($arrt);
//print_r($arrt);

$arrt[1]="orange";
$arrt[0]="vanilla";
$arrt[2]="rum raisin";
arsort($arrt);
//print_r($arrt);

$arrn['red']="orange";
$arrn['blue']="vanilla";
$arrn['brown']="rum raisin";
ksort($arrn);
//print_r($arrn);

$arrn['red']="orange";
$arrn['blue']="vanilla";
$arrn['brown']="rum raisin";
krsort($arrn);
//print_r($arrn);

$ice1=array('vanilla','chocolate','strawberry');
$ice2=array('vanilla','chocolate','papaya');
$diff=array_diff($ice2,$ice1);
foreach($diff as $val){

	//echo $val;
}

$arr=[1,2,3,4,5,6];
foreach($arr as $key=>$val){
//echo $arr[$key];
}

$scores[0][]=79;
$scores[0][]=74;
$scores[1][]=69;
$scores[1][]=84;
for($outer=0;$outer<count($scores);$outer++){
  for($inner=0;$inner<count($scores);$inner++){

  //	echo "\$scores[$outer][$inner]=",$scores[$outer][$inner]."<br>";
  }

}


//echo "<pre>";
//print_r($scores);
//echo "</pre>";

/* ----- Splitting and merging arrays ------- */


$crop['first']='Rice';
$crop['second']='Wheat';
$crop['third']='Sugarcane';
$crop['fourth']='Maize';

//$subarr=array_slice($crop,1,3);
/*
echo "<pre>";
print_r($subarr);
echo "</pre>";
*/

$arr1=['Rice','Wheat','Sugarcane','Maize'];
$arr2=['chocolate','pecan','Maize'];
$arr3=array_merge($arr1,$arr2);
echo "<pre>";
//print_r($arr3);
echo "</pre>";


for($p=1;$p<=10;$p++){


	echo $p." ";

}

$k=1;
for($i=0;$i<10;$i++){
$p=1;
for($j=0;$j<10;$j++){

$num=$k*$p;
$arrk[$i][$j]=$num;
$p++;

  }
  $k++;

}
echo "<br>";
for($i=0;$i<10;$i++){
  for($j=0;$j<10;$j++){
    echo $arrk[$i][$j]." ";
  }
  echo "<br>";
 }
//echo "<pre>";
//print_r($arrk);
//echo "</pre>";
$arr3=[];
$arr1=['a'=>'red','b'=>'orange','c'=>'blue'];
$arr2=['a'=>'red','b'=>'orange','d'=>'blue','c'=>'purple'];
foreach($arr2 as $key=>$val){

  foreach($arr1 as $key1=>$val1){
     if($key==$key1&&$arr1[$key1]==$arr2[$key]){
      unset($arr1[$key]);
      break;
     }else{

 $arr3[$key]=$val;
     }



  }
}
//print_r($arr3);



// Multidimensional array difference
//error_reporting(0);
$arr6=[];
$arr4=[[1,2,3],[4,5,6,10,3,12],[7,8]];
$arr5=[[1,2,3],[4,5,6,10,11,14],[5,6]];

for($i=0;$i<count($arr5);$i++){
$k=0;
  for($j=$i;$j<count($arr4),$k<count($arr4[$i]);){

if($arr4[$i][$k]!=$arr5[$j][$k]){
 $arr6[]=$arr4[$i][$k];
     }else{

    
     }

   
    $k++;  
  }
   unset($arr4[$i]);
}
print_r($arr6);
