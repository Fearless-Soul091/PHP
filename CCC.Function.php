<?php
/**
 * Types : Inbuilt, user defined
 */


 //define function : normal function,default
 /*function sayHello(){
     echo "Hello Guest";
 }*/

 //parameterized function
 /*function sayHello($name){
    echo "Hello " . $name;
 }*/
 //parameterized function with default value
 function sayHello($name='Guest'){
    echo "Hello " . $name;
 }

 //call function
 /*sayHello('Ram');
 sayHello();*/


 function sum($a,$b){
     return $a+$b;
 }

 function avg($total,$num){
     return $total/$num;
 }

$total = sum(34,87);
$av = avg($total,2);

//echo 'Total is  ' . $total;
//echo '<br>Average is  ' . $av;

// write a php program to calculate total marks obtained by 
//student and also calculate percentage,result and division using 
// user defined function


//function with dynamic arguments
function calculateTotal(){
    /*$data = func_get_args();

    $sum = 0;
    for($i=0;$i<count($data);$i++){
        $sum += $data[$i];
    }*/
    
    $sum = 0;
    for($i=0;$i<func_num_args();$i++){
        $sum += func_get_arg($i);
    }
    echo $sum . '<br>';
}

calculateTotal(30,23);
calculateTotal(34,56,56,11);
calculateTotal(87,98,23,34);
calculateTotal(30,23,11,98,23);
calculateTotal(30,23,46,78,78,23);

?>