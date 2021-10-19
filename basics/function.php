<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date</title>
 
</head>
<body>

   <?php
         function writeMessage()
         {
              echo "Hello, I am a message <br/>";
         }

         writeMessage();
         
         echo "<hr/>";

         function addFunction($num, $num2)
         {
            $sum = $num + $num;

            echo "The is $sum" . "<br/>";
         }

        function changeNum(&$num)
        {
           $num = $num + 12;
        }

        function Product($num, $num2)
        {
           $prod = $num + $num2;
           return $prod;
        }

        $num = 890;
        addFunction(67,90);
        addFunction(5,9);
        addFunction('5','90');

        changeNum($num);
        echo $num . "<br/>";

        $returnProd = Product(34,90);

        echo  $returnProd;
   ?>

</body>