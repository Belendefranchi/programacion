<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico">
    <title>Programación Semanal</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fs-4 fw-bold">
            <div class="container-fluid">
                <a class="" href="#">
                    <img src="logo.png" alt="" width="70vw">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link disabled">Programación Semanal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="main">
        <form action="enviar.php" method="post">
            <div>
                <input type="submit" value="Enviar">
            </div>

            <?php

            include("conexion.php");

            $sem = date('W', time());

            $semana = array();
            for($d=0; $d<7 ; $d++)
                $semana[] = mktime(0, 0, 0, date('n'), date('d')-date('w')+$d, date('Y'));

            $lun = date('d/m/Y',$semana[1]);
            $mar = date('d/m/Y',$semana[2]);
            $mie = date('d/m/Y',$semana[3]);
            $jue = date('d/m/Y',$semana[4]);
            $vie = date('d/m/Y',$semana[5]);
            $sab = date('d/m/Y',$semana[6]);

/*             $query="SELECT tipo, proceso, granja, Id
                    FROM faena 
                        where sem='$sem'";
            
            $resultado=$base->prepare($query);
            $resultado->execute();     
            $faena=$resultado->fetchAll(PDO::FETCH_ASSOC);
            $resultado->closeCursor();

            $L1Lun__tipo=$faena["tipo"];
            $L1Lun__proceso=$faena["proceso"];
            $L1Lun__granja=$faena["granja"];
            
            echo $L1Lun__tipo;
            echo $L1Lun__proceso;
            echo $L1Lun__granja; */

            ?>

<!-- ###########################################   ENCABEZADO   ############################################### -->

            <div class="container text-center">
                <div class="row seven-cols align-items-center">
                <input type="text" class="col-md-1 fs-4 form-control fw-bold text-center" name="sem" value="<?php echo "Sem:    " . $sem?>">
                    <div class="col-md-1 fs-4 fw-bold table__font">LOTE 1</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">LOTE 2</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">LOTE 3</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">LOTE 4</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">COCIDO</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">EMBARQUES</div>
                </div>
            </div>
            <br>

<!-- ################################################   LUNES   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols align-items-center">
                    <input type="text" class="col-md-1 fw-bold form-control" value="LUN" readonly>
                    <select class="col-md-1 form-select" name="L1Lun__tipo" aria-label="Default select example">
                        <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Lun__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Lun__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Lun__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProLun__cocido">
                    <input type="text" class="col-md-1 form-control" name="ProLun__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center " name="lun" value="<?php echo (substr($lun,0,5));?>">
                    <select class="col-md-1 form-select" name="L1Lun__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Lun__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Lun__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Lun__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpeLun__cocido">
                    <input type="text" class="col-md-1 form-control" name="OpeLun__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" name="L1Lun__granja">
                    <input type="text" class="col-md-1 form-control" name="L2Lun__granja">
                    <input type="text" class="col-md-1 form-control" name="L3Lun__granja">
                    <input type="text" class="col-md-1 form-control" name="L4Lun__granja">
                    <input type="text" class="col-md-1 form-control" name="ExtLun__cocido">
                    <input type="text" class="col-md-1 form-control" name="ExtLun__embarque">
                </div>
            </div>
            <br>

<!-- ###############################################   MARTES   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="MAR" readonly>
                    <select class="col-md-1 form-select" name="L1Mar__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mar__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mar__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mar__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProMar__cocido">
                    <input type="text" class="col-md-1 form-control" name="ProMar__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->

                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="mar" value="<?php echo (substr($mar,0,5))?>">
                    <select class="col-md-1 form-select" name="L1Mar__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mar__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mar__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mar__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpeMar__cocido">
                    <input type="text" class="col-md-1 form-control" name="OpeMar__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" name="L1Mar__granja">
                    <input type="text" class="col-md-1 form-control" name="L2Mar__granja">
                    <input type="text" class="col-md-1 form-control" name="L3Mar__granja">
                    <input type="text" class="col-md-1 form-control" name="L4Mar__granja">
                    <input type="text" class="col-md-1 form-control" name="ExtMar__cocido">
                    <input type="text" class="col-md-1 form-control" name="ExtMar__embarque">
                </div>
            </div>
            <br>

<!-- ##############################################   MIERCOLES   ############################################# -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="MIE" readonly>
                    <select class="col-md-1 form-select" name="L1Mie__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mie__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mie__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mie__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProMie__cocido">
                    <input type="text" class="col-md-1 form-control" name="ProMie__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="mie" value="<?php echo (substr($mie,0,5))?>">
                    <select class="col-md-1 form-select" name="L1Mie__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mie__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mie__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mie__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpeMie__cocido">
                    <input type="text" class="col-md-1 form-control" name="OpeMie__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" name="L1Mie__granja">
                    <input type="text" class="col-md-1 form-control" name="L2Mie__granja">
                    <input type="text" class="col-md-1 form-control" name="L3Mie__granja">
                    <input type="text" class="col-md-1 form-control" name="L4Mie__granja">
                    <input type="text" class="col-md-1 form-control" name="ExtMie__cocido">
                    <input type="text" class="col-md-1 form-control" name="ExtMie__embarque">
                </div>
            </div>
            <br>

<!-- ###############################################   JUEVES   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="JUE" readonly>
                    <select class="col-md-1 form-select" name="L1Jue__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Jue__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Jue__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Jue__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProJue__cocido">
                    <input type="text" class="col-md-1 form-control" name="ProJue__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="jue" value="<?php echo (substr($jue,0,5))?>">
                    <select class="col-md-1 form-select" name="L1Jue__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Jue__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Jue__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Jue__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpeJue__cocido">                  
                    <input type="text" class="col-md-1 form-control" name="OpeJue__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" name="L1Jue__granja">
                    <input type="text" class="col-md-1 form-control" name="L2Jue__granja">
                    <input type="text" class="col-md-1 form-control" name="L3Jue__granja">
                    <input type="text" class="col-md-1 form-control" name="L4Jue__granja">
                    <input type="text" class="col-md-1 form-control" name="ExtJue__cocido">
                    <input type="text" class="col-md-1 form-control" name="ExtJue__embarque">
                </div>
            </div>
            <br>

<!-- ###############################################   VIERNES   ############################################## -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="VIE" readonly>
                    <select class="col-md-1 form-select" name="L1Vie__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Vie__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Vie__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Vie__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProVie__cocido">
                    <input type="text" class="col-md-1 form-control" name="ProVie__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="vie" value="<?php echo (substr($vie,0,5))?>">
                    <select class="col-md-1 form-select" name="L1Vie__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Vie__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Vie__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Vie__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpeVie__cocido">                    
                    <input type="text" class="col-md-1 form-control" name="OpeVie__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" name="L1Vie__granja">
                    <input type="text" class="col-md-1 form-control" name="L2Vie__granja">
                    <input type="text" class="col-md-1 form-control" name="L3Vie__granja">
                    <input type="text" class="col-md-1 form-control" name="L4Vie__granja">
                    <input type="text" class="col-md-1 form-control" name="ExtVie__cocido">
                    <input type="text" class="col-md-1 form-control" name="ExtVie__embarque">
                </div>
            </div>
            <br>

<!-- ###############################################   SABADO   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="SAB" readonly>
                    <select class="col-md-1 form-select" name="L1Sab__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Sab__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Sab__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Sab__tipo" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProSab__cocido">
                    <input type="text" class="col-md-1 form-control" name="ProSab__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="sab" value="<?php echo (substr($sab,0,5))?>">
                    <select class="col-md-1 form-select" name="L1Sab__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Sab__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Sab__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Sab__proceso" aria-label="Default select example">
                    <option value="" selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpeSab__cocido">                
                    <input type="text" class="col-md-1 form-control" name="OpeSab__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" name="L1Sab__granja">
                    <input type="text" class="col-md-1 form-control" name="L2Sab__granja">
                    <input type="text" class="col-md-1 form-control" name="L3Sab__granja">
                    <input type="text" class="col-md-1 form-control" name="L4Sab__granja">
                    <input type="text" class="col-md-1 form-control" name="ExtSab__cocido">
                    <input type="text" class="col-md-1 form-control" name="ExtSab__embarque">
                </div>
            </div>

<!-- ########################################################################################################## -->

            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>