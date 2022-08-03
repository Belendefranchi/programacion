<?php
    try{

        $base=new PDO('mysql:dbname=programacion;host=192.168.1.140', 'prog', '/8cE-qDSUusvKLB');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
        echo "Linea del error: " . $e->getLine();

    }

?>