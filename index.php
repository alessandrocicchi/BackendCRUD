<!DOCTYPE html>
<html>

<head>

<script type="text/javascript"></script>

</head>
<body>


    <?php

        echo "Ciao, io sono Alessandro\n";

        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST'){
            
            echo "Il metodo è POST";

        } elseif ($method == 'GET'){
            
            /*echo "Il metodo è GET";*/

            $myObj->city = "New York";

            $myJSON = json_encode($myObj);

            echo $myJSON;

        } elseif ($method == 'PUT'){
            
            echo "Il metodo è PUT";

        } elseif ($method == 'DELETE'){
            
            echo "Il metodo è DELETE";

        } else {
            
            echo "Metodo sconosciuto";
}

    ?>

</body>
</html>