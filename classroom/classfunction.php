<?php
class Person1{


	var $name="Jack";
	function set_name($name){
         
		//echo $this->name;
	}
	

}
$ralph=new Person1;
$ralph1=new Person1;
$ralph->set_name("Ralph");
$ralph1->set_name("John");

class Person2{

private $name;
public function set_name($data){

	$name=$data;
	//echo $name;
}


}
$ralph=new Person2;
$ralph1=new Person2;
$ralph->set_name("Ralph");
$ralph1->set_name("John");

class Person3{

  var $name="Arindam";
  
  function __construct($data){

  	$this->name=$data;
  	//echo $this->name;
  }
 




}
$ralph1=new Person3("Arijit");


class Person4
{
var $name;
public function set_name($data){

   $this->name=$data;



}
function get_name()
{


	return $this->name;
}




}
class Friend extends Person4{
var $message;
function set_message($msg)
{

	$this->message=$msg;
	$this->set_name($this->message);
}
function set_name_public($name){


	$this->set_name($name);
}


}


$tony=new Friend();
$tony->set_name_public("Tony");
$tony->set_message("Tom");
//echo $tony->get_name();





//Constructor Inheitence








class Person
{
public $name;
public $message="";
public function __construct($data,$msg){

   $name=$data;
$message=$msg;


}


function __call($method,$args){

if($method=='set_name'){
$str="";
	foreach($args as $val){

		$str=$str.$val;
	}
return $str;
}


}


function get_name()
{


	return $this->name;
}




}
class Friend1 extends Person{

function __construct($data,$msg){

	parent::__construct($data,$msg);
	$this->message=$msg;


}
}

$tony=new Friend1('Hi','there');
echo $tony->set_name('Happy','Birthday');
echo $tony->set_name('Hello','there','Ravi');
