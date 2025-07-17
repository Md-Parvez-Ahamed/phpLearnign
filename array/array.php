<?php 

// $fruits = array(
//     "Mango","JackFruit","Litchi"
// );

// echo $fruits[0];
// var_dump($fruits);

// print_r($fruits);


// $number = [10,20,30];
// array_push($number,40);
// array_push($number,50);


// array_unshift($number,5);
// print_r($number);

//Remove item first

// array_shift($number);
// print_r($number);

// // Remove item last 
// array_pop($number);
// print_r($number);

// $student = [
//     "name" => "Md.Parvez Ahamed",
//     'age' => 31,
//     'depertment' => "Business Study",

// ];

// print_r($student);
// echo $student['name'];
// echo $student['age'];
// echo $student['depertment'];


// String to array
// $csv = "Mango,Jackfruit,Litchi";
// $fruits = explode(",",$csv);
// print_r($fruits);
// // arry to string
// $fruitsStr = implode("-",$fruits);
// print_r($fruitsStr);


$student = [
    ['name' => 'Abdur Rahim','age'=>25],
    ['name' => 'Abdur Kasem','age'=>24],
    ['name' => 'Abdur Hoqe','age'=>23],
];

print_r($student);
echo $student[2]['age'];

?>