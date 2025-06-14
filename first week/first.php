<?php 
 echo"hello";
 echo date('y-m-d');

 $name = "DNS";
 echo"Hello, ".$name;

 $num = 10;
 echo $num;

 $greeting="Hello";
 $name=$greeting."DNS";
 echo $name;

 $greeting="Hello";
 $name="$greeting DNS";
 echo $name;

$heredoc_string=<<<START
THIs is my world
Im the king of here.
START;
echo $heredoc_string;

$name1="john Doe";
$age=23;
$heredoc_string1=<<<NEW
My name is $name1.I am $age years old.
NEW;
echo $heredoc_string1;

$price=20.00;
$tax=0.08;
$total=$price + ($price*$tax);
echo "The total cost is \${$total}";

$str ="Hello world";
$str[0]="F";
echo $str;
echo $str[9];

 //...........7................
echo 'it\'s me';
echo "she said, \"hello\" ";
echo "C:\\xampp\\htdocs";
//   \t  \n

//-------9-floats--------------
"<br>";

$temp=96.3;
$price=2.99;
$latitude=37.3224;

$number=1.23E6;
$smaller=1.23E-6;

echo $number ."<br>";
echo $smaller."<br>";

//----------19-booleans---------

$myBoolean=true;
$anotherBoolean= false;

$number =5;
$isNumberEqualFive =($number == 5);
echo $isNumberEqualFive;

//-------------------
$number=5;
if($number==5){
    echo"THe number is 5";
}else{
    echo"the number is not 5";
}
//------11-nul and numeric string---

"<br>";
$vari=null;
if(is_null($vari)){
    echo"This variable is null";
}else{
    echo"This variable is not null";
}

//--------------------

// function printVariable($variable){
//     echo "the value of the variable is $variable";
// }
// printVariable(10);

//--------------------
"<br>";
function printVariable($variable= 20 ){
    echo "the value of the variable is $variable";
}
printVariable();

//----------------------type casting------------
$numericString = "1234.66";
$numeric1 = (int)$numericString;
echo $numeric1;
"<br>";
"<br>";
//-----------13----global variable---------
$last_name="DNS";
$FullName = "John".$last_name;

echo $FullName;

"<br>";

$gl_variable = "I am a global variable";

function print_global_variable(){
    global $gl_variable;
    echo $gl_variable;
}
print_global_variable();

/////----------14--local variabe-----------

function multiply($num1,$num2){
    $result = $num1*$num2;
    return $result;
}
function add($num1,$num2){
    $result=$num1+$num2;
    return $result;
}
echo multiply(10,20);

//---------------------------------

function increment(){
    static $count = 0;
    $count++;
    echo $count ."<br>";
}
increment();increment();

//-----------------------

$counter = 8;
function increment1(){
    global $counter;
    $counter++;
    echo $counter;
}
increment1();increment1();increment1();
echo "<br>". $counter;

//----------------------------------

$counter = 6;
function increment2(){
    $GLOBALS['counter']++;
    echo "<br>".$GLOBALS['counter'];
}
increment2();increment2();increment2();

//--------------15--variables variables---

$var_name = "first_var";
$$var_name = "Hello World";

echo $first_var;

//--------------16-- constant-----

define("MY_CONSTANT","DNS JAYASINGHE");

echo MY_CONSTANT;

//echo _LINE_;
//echo _DIR_;


//-----18- function--------
function sum($param1, $para2){
$total = $param1 + $para2;
echo $total;
}
sum (20,12);


function isEven($num) {

    $result = $num % 2 == 0;
    if($result){
        return true;
    }else{
        return false;
    }
}
$isEv=isEven(12);
if($isEv){
    echo "12 is even"; 

}else{
    echo "4 is odd";
}

//---------------------------------

function addFive($num){
    $result= $num +5;
    return $result;
}

$number = 10;
$newNumber = addFive($number);

echo "Original : $number"."<br>";
echo "New Number Value $newNumber"."<br>";

//-------------------------
function addTen(&$num){
    $num=$num +10;
}
$number =10;
addTen($number);
echo $number;

//----default arguments

function addTwoNum($num1=0,$num2=0){
    return $num1 + $num2;
}
$result = addTwoNum(12,52);
echo $result;

//-----19---------------
//-----variable function





 ?>