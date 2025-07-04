<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Php</title>
</head>
<body style = "font-size : 30px">
    <?php 
    
        // echo "Hello World<br>";
        // echo "Hi Bangladesh<br>";

        // Variable Declar 
        // $_name = "Md:Parvez Ahamed<br>";
        // echo $_name;

        // Best Practice of Declaring Variable
        
        // $my_name ===== Snakecase (Variable/function)
        // $myName ====== Camelcase (Method)
        // $MyName ====== PascalCase (Class)

        // Const

        // define("PI",3.1416);
        // echo PI;

        /****
         * Data Types
         * 
         * Scalar Types
         *  Integer 
         *  Float/Double
         *  String
         *  Boolean
         * 
         * Compaund Types
         *  Array
         *  Object
         * 
         * Specila Types
         *  Null
         *  Resource
         * 
         */

         $age = 31; // Integer
         $price = 35.1; // Float
         $myName = "Parvez"; // String
         $is_Admin =  false; // Boolan

        //  Array 
        $bank_name = ['IFIC','DBBL','BRAC',1212];
         echo $bank_name[0];

        // Object

        $user1 =  new User();
        $user1 =  new User();

        // Null

        $variable = NULL;

        // Oparator 

        $a = 15;
        $b = 4;

        $addition = $a + $b;
        $subtraction = $a - $b;
        $multiplication = $a * $b;
        $divisiton= $a / $b ;
        $moduler = $a % $b;
        $exponential= $a ** $b;
        $divisiton= $a / $b;
        $divisiton= $a / $b;

        // Assingment Operators

        $a += 2; // $a = $a +2 ;
        $a -= 2; // $a = $a -2 ;
        $a *= 2; // $a = $a *2 ;
        $a /= 2; // $a = $a /2 ;
        $a %= 2; // $a = $a %2 ;


         
    ?>
</body>
</html>