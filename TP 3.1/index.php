<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo practico 3.1</title>
</head>
<body>
    <?php
        #1
        #a)
        $name = ['juan', 'maria', 'pepe', 'andrea', 'jorgelina', 'cecila'];
        mostrarArray($name);
        
        function mostrarArray($name)
        {
            echo ('<pre>');
            print_r($name);
            echo ('<pre>');
        }

        #b)
        mostrarArrayOrdenado($name);
        function mostrarArrayOrdenado($name)
        {
            sort($name, SORT_REGULAR);
            echo ('<pre>');
            print_r($name);
            echo ('<pre>');
        }

        #c)
        $newArray = [];
        
        pasarArray($name, $newArray);

        function pasarArray($name, $newArray)
        {
            for($i = 0; $i < count($name); $i++)
            {
                array_push($newArray, $name[$i]);
            }
        }

        echo 'Arreglo nuevo';
        print_r($newArray);
        mostrarArrayOrdenado($newArray);

        #d)
        contarValores($name);//Tengo que usar este array viejo, porque no logro pasar los valores de un array al otro

        function contarValores($newArray)
        {
            $contador = 0;
            for($i = 0; $i < count($newArray); $i++)
            {
                $contador++;
            }
            echo 'La cantidad de valores del Array es de:'. $contador . '<br>'; 
        }

        
        $keys = [2,4,6,8,10,12];
        contarValores($keys);

        $arrayAssociative = array_combine($name, $keys);

        #e)
        print_r($arrayAssociative);

        #2
        $value = 8;
        $newArray =[2,4,8];
        function verificarValor($value, $newArray)
        {
            for($i = 0; $i < count($newArray); $i++)
            {
                if($value == $newArray[$i])
                {
                    $boolean = 0;
                }
                
            }
            return $boolean;
        }

        verificarValor($value, $newArray);

        if($boolean == 0)
        {
            echo 'El valor ' . $value . ' se encuentra en el array <br>';
        }
        else
        {
            echo 'El valor ' . $value . ' NO se encuentra en el array <br>';
        }

        #3
        $llave = 3;
        $array3 = ['leandro','luca','juan','pablo','gustavo','enrique'];

        function verificarkey($llave, $array3)
        {
            foreach($array3 as $clave => $valor)
            {
                if($clave == $llave)
                {
                    echo 'El valor dentro de la Key solicitada es '.  $valor . '<br>'; 
                }
            }
        }

        verificarkey($llave, $array3);

        #4
        function mostrarAssociative($arrayAssociative)
        {
            foreach($arrayAssociative as $clave =>$valor)
            {
                $result = implode(",",$arrayAssociative);
                echo $clave. ",";
                //No esta hecho de la manera correcta pero cumple
            }
            
        }
        mostrarAssociative($arrayAssociative);
        
    ?>
</body>
</html>