<?php
    try{

<<<<<<< HEAD
        $base=new PDO('mysql:dbname=programacion;host=192.168.1.140', 'prog', '/8cE-qDSUusvKLB');
=======
        $base=new PDO('mysql:dbname=programacion;host=192.168.1.140', 'prog', 'ldc2t3.t3SyCZhu');
>>>>>>> 2dbb0796bcb2253d16b75825ddc53012d90bba53
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
        echo "Linea del error: " . $e->getLine();

    }

?>