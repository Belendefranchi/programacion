<?php
    try{

        $base=new PDO('mysql:dbname=programacion2;host=192.168.1.113', 'user', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
        echo "Linea del error: " . $e->getLine();

    }

?>