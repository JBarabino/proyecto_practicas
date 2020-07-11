<?php
    // Connection to DB
    $conn = mysqli_connect('db', 'user', 'pass', "mydb");
    // $conn = mysqli_connect('localhost', 'root', '', "db"); 
    
    if (isset($_POST['button'])){
        
        $buscar = array(
            "name" => $_POST['name'],
            "localidad" => $_POST['localidad'],
            "tipo" => $_POST['tipo'],
            "precio" => $_POST['precio'],
        );
    
        $name="'%".$_POST['name']."%'";
        $localidad=$_POST['localidad'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['precio'];

        // **************PRUEBA LÓGICA query buscador****************
        $query= "SELECT * FROM Restaurantes ";

            if ($name != "'%%'"){
                $query .= "WHERE name LIKE $name ";
            }
            if ($localidad != ""){
                if ($name != "'%%'"){
                    $query .= " AND localidad = '$localidad'";
                } else{
                    $query .= "WHERE localidad = '$localidad'";
                }
            }
            if ($tipo != ""){
                if (($name == "'%%'") && ($localidad == "")){
                    $query .= "WHERE tipo = '$tipo'";
                } else{
                    $query .= " AND tipo = '$tipo'";
                }
            }
            if ($precio != ""){
                if (($name == "'%%'") && ($localidad == "") && ($tipo == "")){
                    $query .= "WHERE precio = $precio";
                } else{
                    $query .= " AND precio = $precio";
                }
            }
        
        $result = mysqli_query($conn, $query);
        
    } else {
           
        $buscar = array(
            "name" => "",
            "localidad" => "",
            "tipo" => "",
            "precio" => "",
        );

        $name="";
        $localidad="";
        $tipo="";
        $precio="";
        $query = 'SELECT * FROM Restaurantes ORDER BY valor DESC LIMIT 5';
        $result = mysqli_query($conn, $query);
    }

?>
    



