<?php
    try{

        $base=new PDO('mysql:dbname=programacion;host=127.0.0.1', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
        echo "Linea del error: " . $e->getLine();

    }

?>