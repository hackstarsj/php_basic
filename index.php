<?php
echo "Hello World";

//creating a integer variable;

$i=10;

//creating a double variable

$j=20.0;

//creating string variable

$string="Hello World";

echo "<br>";

echo $i;

echo "<br>";

echo $j;

echo "<br>";

echo $string;

//concating string means joining variable and string vALUE


echo "<br>".$i." - ".$j." - ".$string;

//dot (.) is used to joining variable and string value

//creating a simple function without Returning Value

function print_all_data(){
	echo "<br>Print All DATA<br>";
}

//now calling function
print_all_data();

//function are of two types userdefined and predefined
	//predefined are just define by application environment e.g print,echo 
	//user define function like we define the function just like above print_all_data()

//php if else


$a=10;
$b=20;

if($a>$b){

	echo "<br>A is Greater<br>";
}
else{
	echo "<br>B is Greater<br>";
}

//php for loop

//for loop use three value first initilization which is inital value like here k used 0 then checking until k not greater 10 and keep increasing value of k
//for(initilization;condition_checking;itteration) 
for($k=0;$k<10;$k++){
	echo "<br>".$k."<br>";
}

//while loop
//keep running the loop until condition not get false

echo "<br>==================While Loop Started=======================<br>";
$j=0;
while($j!=10){
	echo "<br>".$j."<br>";
	$j++;
}

//do while 
//it run once before condtion false means while run only condtion not false but do while loop run at least once if conditon get false
//let's see example

//you see it does not run one time but let's see do while loop

echo "=========================DO While Loop Started ========================";
$m=0;
do{
	echo "<br>".$m."<br>";
	$m++;
}
while($m!=10);



//you can see the differnce do while run atleast once but while loop not run at least once

//php array
//one d array;
$one_d=array("Hello","Hello 1","Hello 2","Hello 1");
print_r($one_d);

//key value array

echo "<br>==============================PHP KEY VALUE ARRAY=================<br>";
$one_d_key_value=array("key_1"=>"DATA 1","key_2"=>"DATA 2","key_3"=>"DATA 3");
print_r($one_d_key_value);


//in both array you can see one contain index and one contain key value

//foreach loop
//print one by one value
echo "<br>============================PHP Foreach Started==================<br>";
foreach($one_d as $one){
	echo $one."<br>";
}

//foreach with key value
echo "<br>====================PHP Foreach with Key Value===================<br>";
foreach($one_d_key_value as $one=>$one_value){
	echo "KEY IS ".$one." value is : ".$one_value."<br>";
}
//php 2d array
$two_d=array(array("key_1"=>"value 1","key_2"=>"value 2"),array("key_1_1"=>"value 1 1","key_2_1"=>"value 2 1"),array("key_3_1"=>"value 1 1 1","key_3_1"=>"value 2 1"));

print_r($two_d);

//printing this data

echo "<br>======================PHP TWO D array Print=================<br>";
foreach($two_d as $data){
	foreach($data as $dkey=>$d){
		echo "<br>KEY Is ".$dkey."  value is : ".$d."<br>";
	}
}

//convert php array to json
echo "<br>=========================PHP JSON DATA====================<br>";
$json=json_encode($two_d);
echo $json;

//php json to array
echo "<br>==========================PHP JSON to ARRAY===================<br>";

$array_d=json_decode($json,true);
print_r($array_d);