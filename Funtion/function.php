<?php 
/*
function greet(){
    echo "Hello world";
}

greet();
*/

// User define Funtion
/*
function add ($n1,$n2){
   return  $n1 + $n2;

}
echo add(10,5);

*/


/*
$globalVar = "Global\n"; // Global variable



function testScope (){

    $local = "Md : Parvez Ahamed";// local variable
    global $globalVar;
    echo $globalVar;
    echo $local;

}

testScope();
*/

/*
$greet = function(){
    echo "Hello world";
};

echo $greet();
*/

// $add = fn($n1,$n2) => $n1 + $n2;
// echo $add(10,10);

function process ($callback){
    return $callback("Futer Developer") ;
}

process(function($name) {
    return "Hello $name!";
});

echo $result;



?>