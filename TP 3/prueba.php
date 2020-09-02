<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <?php
/*
        #Ejercicio 1
        ////////////
        $myNumber = 123;
        $numberString = "123";

        
        echo $myNumber + $numberString;
        echo "<br>";
        
        echo $numberString + $myNumber;
        echo "<br>";
        echo $myNumber - $numberString;
        echo "<br>";
        
        echo $myNumber.$numberString;
        echo "<br>";
        
        #Ejercicio 2
        ////////////
        if(1=="1"){
            echo "It´s right";
        }
        echo "<br>";
       
        if(1==="1"){
            echo "It´s right";
        }
        echo "<br>";
        
        if(!null){
            echo "It´s right";
        }
        echo "<br>";
        
        if(!false){
            echo "It´s right";
        }
        echo "<br>";
       
        if(""){
            echo "It´s right";
        }
        echo "<br>";
        
        if(" "){
            echo "It´s right";
        }
        echo "<br>";
        
        if("tested"){
            echo "It´s right";
        }
        echo "<br>";
       
        if(1-1){
            echo "It´s right";
        }
        echo "<br>";

        #Ejercicio 3
        ////////////
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $opcion = $_POST["opcion"];
        calcular($num1,$num2,$opcion);

        function  calcular($num1, $num2, $opcion)
        {
            
            if($opcion == 1)
            {
                multiplicar($num1,$num2);
            }
            else if($opcion == 2)
            {
                dividir($num1,$num2);
            }
        }

       function multiplicar($num1,$num2){
            echo "El resultado de la Multiplicacion es: ". $num1*$num2;
        }

        function dividir($num1,$num2){

            if($num2 == 0){
                echo "No es posible dividir por 0";
            }
            else{
                echo "El resultado de la Division es: ". $num1/$num2;
            }
        }

        #Ejercicio 5
        ////////////
       $people = [
            ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
            ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
            ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
            ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
            ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
            ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
            ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
        ];

        mostrararreglo($people);
        contarmayores($people);
        menoresmujeres($people);

        function mostrararreglo($people){

            echo("<pre>");
            print_r($people);
            echo("</pre>");
        }

        function contarmayores($people){

            $contador = 0;
            foreach($people as $person){

                if($person['age'] >=18){

                    $contador++;
                }
            }
            echo "$contador persona/s son mayores de edad </br>";
        }

        function menoresmujeres($people){

            $contador = 0;
            foreach($people as $person){

                if($person['age'] <18 && $person['sex'] == 'f'){

                    $contador++;
                }
            }
            echo "$contador mujer/es son menores de edad </br>";
        }
       
        echo "El día de la semana es :" . date("l"). "</br>";
        $wknd = date("w");

        if($wknd == 0 || $wknd == 6){
            echo "Es fin de semana </br>";
        }
    
        #Ejercicio 7
        ////////////
      $total_sale = $_POST['monto'];
        $type_sale = $_POST['producto'];
        procesarVenta($total_sale, $type_sale);

        function procesarVenta ($total_sale, $type_sale)
        {
            $costoEnvio = "80";
            $totalConEnvio = $costoEnvio + $total_sale;

            if($total_sale > 0)
            {
                if($total_sale <200)
                {
                    if($type_sale == 1)
                    {
                        echo "No se puede realizar el envio. Total a pagar: $" .$total_sale;
                    }
                    elseif($type_sale == 2)
                    {
                        echo "Los gastos de envio son 80 pesos. Total a pagar: $". $totalConEnvio;
                    }
                }
                if($total_sale >= 200 && $total_sale <=600)
                {
                    echo " Los gastos de envio son 80 pesos. Total a pagar: $". $totalConEnvio;
                }
                if($total_sale >600)
                {
                    echo "El envio es gratis. Total a pagar: $". $total_sale;
                }
                if($total_sale > 2000)
                {
                    echo "<br> Codigo de descuento: CODEDESCSS3";
                }
            }
                else
                {
                    echo "Has ingresado un numero negativo";
                }
        }


        #Ejercicio 8
        ////////////
        $a = 2;
        $b = 4;
        $c = 6;
        $d = 8;
    
        $array = array($a, $b, $c, $d);

        mayor($array);

        function mayor($array){
            $mayor = 0;
            foreach($array as $key){
                if($mayor < $key){
                    $mayor = $key;
                }
            }
            echo "El mayor numero es: ". $mayor ."</br>";
        }
*/
        #Ejercicio 9
        ////////////
    ?>
</body>
</html>