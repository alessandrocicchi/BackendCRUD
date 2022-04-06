<!DOCTYPE html>
<html>

<head>

<script type="text/javascript"></script>

</head>
<body>

    

    <?php

        require("connessione.php");


        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST'){
            
            echo "Il metodo è POST";

        } elseif ($method == 'GET'){
            
            $pagina=0;
            $size=20;


            echo "Il metodo è GET";
            $query="SELECT * FROM employees order by id limit " . $pagina . "," . $size;

            if($result=$mysqli->query($query)){
                while($row=$result->fetch_assoc()){
                    
                    $array[]=$row;

                }
            }       
            $data=json_encode($array);
            echo $data;  

        } elseif ($method == 'PUT'){
            
            echo "Il metodo è PUT";

        } elseif ($method == 'DELETE'){
            
            echo "Il metodo è DELETE";

        } else {
            
            echo "Metodo sconosciuto";
}

    mysqli_close($connessione);

    ?>

</body>
</html>