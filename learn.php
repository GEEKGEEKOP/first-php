<?php


echo 'Hello World!';
define("pi",3);
echo "<br>";
$txt="Hello World!";
function Test(){
	echo pi;
	echo "<br>";
	echo $GLOBALS["txt"];
	echo "<br>";
	global $txt;
	echo strrev($txt);
	echo "<br>";
	echo strlen($txt);
	var_dump($txt);
}
Test();

echo "<br>";
$Hour=11;
if ($Hour > 12){
	echo "fool";
}
elseif ($Hour == 11){
	echo "Hour is 11";
}
else{
	echo "yep";
}
echo "<br>";
$y=55;
switch ($y){
case 53:
	echo "53";
	break;
case 54:
	echo "54";
	break;
case 55:
	echo "55";
	break;
default:
	echo"no number!!";
}
echo "<br> While:";
$x=1;
while ($x <= 5){
	echo "<br>";
	echo $x;
	$x++;
}
echo "<br> While Do";
// while do
$y=1;
do{
	echo "<br>";
	echo $y;
	$y++;
}
while ($y <= 10);
function say_name($name=null){
	echo "<br>";
	echo "he/she name is $name";
	return "he/she name is $name"; 
}	
say_name("Geek.op");
say_name("reyhaneh");
say_name("mohammad");
say_name("jafar");
say_name("sakineh");
say_name("nika");
say_name("layla");
say_name("parmida");
say_name("mahsa");
say_name();
echo "<hr>";
$txt=say_name("sarina");
echo '<hr>';
echo $txt;
echo '<hr>';
$arr=array("ali",'bahram','censrela','davood','erfan','farhad','golmina','homayon','iman','Jadi',"main"=>55);
function say_word($itrable,$word){
for ($i=0;$i <= 80;$i++){
	echo $itrable[$i];
	echo "<br>";
	if ($itrable[$i] == $word){
		echo "WIN";
		echo "<br>";
		echo "$word is index $i";
		break;
}	
}	
}
/////////////////////////////////////////
say_word($arr,"Jadi");
echo "<br>";
echo $arr[9];
echo "<br>";
echo count($arr);
echo "<br>";
echo "---------------------------->$arr[10]";
echo "<br>";
echo $arr["main"];
echo "<hr>";
$val=array("x"=>10,"y"=>11,'z'=>5);
foreach($val as $x=>$x_val){
	print("<br>");
	echo "$x -------------> $x_val";
}
/*
 *
 *Hello World
 *echo "Hello World';
 *                           */
/////////////////////////////////////////////////////////////////////
echo "<hr>";
$array_1=array(9,5,8,2,5,2,5,3,654,1,65,42,55,12545,15,454,54,54,545,4,41654,41,546,5415,41654,541,54,514,54,541,54,415,45,44,65,5464654,465465,4654,654,6546,465,46,464,654,654,654165465,416546,5415,46,454,65,54,654,65,45,654,6514,6546,65,44,4,654564,9842174,1,6749874,6496,8764,687,64,89786498786498,768,4798,768,74987,867,897,4687,4,7687,64,687,64,87,7,98768,79,68,79,7487);
sort($array_1);
foreach ($array_1 as $x){
	echo "<br>";
	echo $x;
}
rsort($array_1);
foreach ($array_1 as $_x){
	echo "<br>";
	echo $_x;
}
echo "<hr>";
////////////////////////////////////////////////////////////////////
echo "soring word";
echo "<br>";
$arra=array("e"=>0,"d"=>2,"c"=>3,"b"=>4,"a"=>5);
ksort($arra);
foreach ($arra as $x=>$y){
	echo "<br>";
	echo "$x ----->$y";
}
echo "<br>";
echo "soring number";
#############################################
asort($arra);
foreach ($arra as $x=>$y){
        echo "<br>";
        echo "$x ----->$y";
} 

?>
