<!-- #variables -->
<!-- -Prefix $
-Start with a letter or an underscore
-Only letters, numbers and underscores
-Case sensitive  -->

<!-- 
data types
strings (quotation marks ) concate two strings with period instead of plus sign or double quotes parse the variable 
escaping 
integers
floats
booleans
arrays
objects
NULL
Resource  


constant   define('Greeting', 'Hello Everyone');
echo Greeting
-->

<?php

#Array - variable that holds mutiple values

$people = array('kevein', 'Heremy', 'sara');

print_r($people) # prints out the entire array

var_dump($people) # shows that it is an array and holds 5 values 


#associative arrays
$people = array('brad' => 5, 'jose' => 3);
echo $people['brad'] # will equal 5

$ids = [22 => 'brad', 44 => 'jose'];
echo $ids[22]; #will equal brad 

$people['Jill'] = 42  # adds Jill to the people array 
echo $people['Jill'] # accesses the value of Jill 

#multi-dimensional array
$cars = array(
    array('hondat', 20, 10),
    array('toy', 30, 20)
);

echo $cars[1][2];


# loops 
# for, while, do...while, Foreach

#for loop
#@params - init, condition, inc

for($i = 0 ; $i < 10; $i++){
    echo $i;
    echo '<br>';
}

#while loop
# @params - condition

$i = 0;

while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
}

#do while
$i = 0;

do{
    echo $i;
    echo '<br>';
    $i++;
}
while($i < 10);

#for each for arrays
$people = array('Brad', 'Jose', 'William');
 foreach($people as $person){
     echo $person;
     echo '<br>';
 }

#with associative array
$newpeople =  array('Brad' => 'b@gm', 'Jose' => 'j@gma', 'William' => 'w@gmail');

foreach($people as $person => $email){
    echo $person.'';
    echo '<br>';
}
#gives key and value 

#functions
# formatting variable and names
# Camel Case = myFunctions()
# Lower Case = my_functions()
# Pascal Case = MyFunctions()

#create simple function
function simpleFunction(){
    echo 'hello world';
}

#calling simple function
simpleFunction();

#parameters arguments w/default 
functions sayHello($name = 'world'){
    echo "Hello $name";
}

sayHello('joe');


functions sayHelloAgain($name = 'world'){
    return "Hello $name";
}

//by reference 
$myNum = 10;

fucntion addFive($num){
    $num += 5;

}

# & by reference 

function addTen(&$num){
    $num += 10; 
}

addFive($myNum);



?>
