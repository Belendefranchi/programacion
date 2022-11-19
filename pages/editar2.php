<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="icon" href="../resources/favicon.ico">
    <title>Programación Semanal</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://192.168.1.113"> 
                    <img src="/temperatura/3.png" alt="" width="31" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://192.168.1.113/temperatura">Temperaturas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://192.168.1.113/">Contador de aves</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://192.168.1.113/calidad">Calidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://192.168.1.113/programacion">Programación</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-row justify-content-end">
                    <?php
                        $semana=substr(($_GET['semana']),-2);
                        echo $semana;
                        $prevSem=$semana-1;
                        $nextSem=$semana+1;
                        echo $prevSem;
                        echo $nextSem;
                        
                        ?>
                    <form class="d-flex justify-content-end" action="enviar2.php" method="GET">
                        <a class="a" href="editar2.php?semana=<?php echo $prevSem?>">
                            <input class="button fs-4 form-control fw-bold text-center" type="button" value="<" readonly>
                        </a>
                        <a class="a" href="mostrar.php?semana=<?php echo $semana?>">
                            <input class="button fs-4 form-control fw-bold text-center" type="button" value="Semana: <?php echo $semana?>" name="semana" readonly>
                        </a>
                        <a class="a" href="editar2.php?semana=<?php echo $nextSem?>">
                            <input class="button fs-4 form-control fw-bold text-center" type="button" value=">" readonly>
                        </a>
                        <input class="button fs-4 form-control fw-bold text-center" type="text" value="Semana: <?php echo $semana?>" name="semana" hidden>
                        <input class="button fs-4 form-control fw-bold text-center" type="submit" value="Enviar">
                        <!-- <input class="button fs-4 form-control fw-bold text-center" type="reset" value="Borrar"> -->
                        <input class="button fs-4 form-control fw-bold text-center" type="button" value="Volver" onClick="history.go(-1);">
                </div>
            </div>
        </nav>
    </header>
    <main>
        <br>
        <?php
            include("conexion2.php");                      
            include("querys.php");
        ?>
<!-- ########################################################################################################## -->
<!-- ###########################################   ENCABEZADO   ############################################### -->
        <div class="container d-flex flex-column">
            <div class="row seven-cols align-items-center">
                <div class="col-md-1 fs-4 fw-bold table__font">DIA</div>
                <div class="col-md-1 fs-4 fw-bold table__font">LOTE 1</div>
                <div class="col-md-1 fs-4 fw-bold table__font">LOTE 2</div>
                <div class="col-md-1 fs-4 fw-bold table__font">LOTE 3</div>
                <div class="col-md-1 fs-4 fw-bold table__font">LOTE 4</div>
                <div class="col-md-1 fs-4 fw-bold table__font">LOTE 5</div>
                <div class="col-md-1 fs-4 fw-bold table__font">LOTE 6</div>
                <div class="col-md-1 fs-4 fw-bold table__font">COCIDO</div>
                <div class="col-md-1 fs-4 fw-bold table__font">EMBARQUES</div>
            </div>
            <br>

    <!-- ###############################################   LUNES   ############################################### -->

    <!-- ---------------------------------------------------------------------------------------------------------- -->
    <!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
    <!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="LUNES" readonly>
                    <select class="col-md-1 form-select" name="L1Lun__tipo" aria-label="Default select example">
                        <option selected><?php echo $L1Lun__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Lun__tipo" aria-label="Default select example">
                        <option selected><?php echo $L2Lun__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Lun__tipo" aria-label="Default select example">
                        <option selected><?php echo $L3Lun__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Lun__tipo" aria-label="Default select example">
                        <option selected><?php echo $L4Lun__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Lun__tipo" aria-label="Default select example">
                        <option selected><?php echo $L5Lun__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Lun__tipo" aria-label="Default select example">
                        <option selected><?php echo $L6Lun__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProLun__cocido?>"   name="ProLun__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProLun__embarque?>" name="ProLun__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center " name="lun" value="<?php echo $Lun__fecha?>">
                    <select class="col-md-1 form-select" name="L1Lun__proceso" aria-label="Default select example">
                        <option selected><?php echo $L1Lun__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Lun__proceso" aria-label="Default select example">
                        <option selected><?php echo $L2Lun__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Lun__proceso" aria-label="Default select example">
                        <option selected><?php echo $L3Lun__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Lun__proceso" aria-label="Default select example">
                        <option selected><?php echo $L4Lun__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Lun__proceso" aria-label="Default select example">
                        <option selected><?php echo $L5Lun__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Lun__proceso" aria-label="Default select example">
                        <option selected><?php echo $L6Lun__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeLun__cocido?>"   name="OpeLun__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeLun__embarque?>" name="OpeLun__embarque">
                </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L1Lun__granja?>"    name="L1Lun__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L2Lun__granja?>"    name="L2Lun__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L3Lun__granja?>"    name="L3Lun__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L4Lun__granja?>"    name="L4Lun__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L5Lun__granja?>"    name="L5Lun__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L6Lun__granja?>"    name="L6Lun__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtLun__cocido?>"   name="ExtLun__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtLun__embarque?>" name="ExtLun__embarque">
                </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------CANTIDAD-------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L1Lun__cantidad?>"   name="L1Lun__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L2Lun__cantidad?>"   name="L2Lun__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L3Lun__cantidad?>"   name="L3Lun__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L4Lun__cantidad?>"   name="L4Lun__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L5Lun__cantidad?>"   name="L5Lun__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L6Lun__cantidad?>"   name="L6Lun__cantidad">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtLun__cocido2?>"   name="ExtLun__cocido2">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtLun__embarque2?>" name="ExtLun__embarque2">
                </div>
            </div>
            <br>

<!-- ###############################################   MARTES   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="MARTES" readonly>
                    <select class="col-md-1 form-select" name="L1Mar__tipo" aria-label="Default select example">
                        <option selected><?php echo $L1Mar__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mar__tipo" aria-label="Default select example">
                        <option selected><?php echo $L2Mar__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mar__tipo" aria-label="Default select example">
                        <option selected><?php echo $L3Mar__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mar__tipo" aria-label="Default select example">
                        <option selected><?php echo $L4Mar__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Mar__tipo" aria-label="Default select example">
                        <option selected><?php echo $L5Mar__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Mar__tipo" aria-label="Default select example">
                        <option selected><?php echo $L6Mar__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProMar__cocido?>"   name="ProMar__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProMar__embarque?>" name="ProMar__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->

                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="mar" value="<?php print_r ($Mar__fecha)?>">
                    <select class="col-md-1 form-select" name="L1Mar__proceso" aria-label="Default select example">
                        <option selected><?php echo $L1Mar__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mar__proceso" aria-label="Default select example">
                        <option selected><?php echo $L2Mar__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mar__proceso" aria-label="Default select example">
                        <option selected><?php echo $L3Mar__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mar__proceso" aria-label="Default select example">
                    <option selected><?php echo $L4Mar__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Mar__proceso" aria-label="Default select example">
                        <option selected><?php echo $L5Mar__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Mar__proceso" aria-label="Default select example">
                        <option selected><?php echo $L6Mar__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeMar__cocido?>"   name="OpeMar__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeMar__embarque?>" name="OpeMar__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L1Mar__granja?>"    name="L1Mar__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L2Mar__granja?>"    name="L2Mar__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L3Mar__granja?>"    name="L3Mar__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L4Mar__granja?>"    name="L4Mar__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L5Mar__granja?>"    name="L5Mar__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L6Mar__granja?>"    name="L6Mar__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtMar__cocido?>"   name="ExtMar__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtMar__embarque?>" name="ExtMar__embarque">
                </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------CANTIDAD-------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L1Mar__cantidad?>"   name="L1Mar__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L2Mar__cantidad?>"   name="L2Mar__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L3Mar__cantidad?>"   name="L3Mar__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L4Mar__cantidad?>"   name="L4Mar__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L5Mar__cantidad?>"   name="L5Mar__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L6Mar__cantidad?>"   name="L6Mar__cantidad">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtMar__cocido2?>"   name="ExtMar__cocido2">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtMar__embarque2?>" name="ExtMar__embarque2">
                </div>
            </div>
            <br>

<!-- ##############################################   MIERCOLES   ############################################# -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="MIERCOLES" readonly>
                    <select class="col-md-1 form-select" name="L1Mie__tipo" aria-label="Default select example">
                    <option selected><?php echo $L1Mie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mie__tipo" aria-label="Default select example">
                    <option selected><?php echo $L2Mie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mie__tipo" aria-label="Default select example">
                    <option selected><?php echo $L3Mie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mie__tipo" aria-label="Default select example">
                    <option selected><?php echo $L4Mie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Mie__tipo" aria-label="Default select example">
                        <option selected><?php echo $L5Mie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Mie__tipo" aria-label="Default select example">
                        <option selected><?php echo $L6Mie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProMie__cocido?>"   name="ProMie__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProMie__embarque?>" name="ProMie__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="mie" value="<?php echo $Mie__fecha?>">
                    <select class="col-md-1 form-select" name="L1Mie__proceso" aria-label="Default select example">
                    <option selected><?php echo $L1Mie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mie__proceso" aria-label="Default select example">
                    <option selected><?php echo $L2Mie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mie__proceso" aria-label="Default select example">
                    <option selected><?php echo $L3Mie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mie__proceso" aria-label="Default select example">
                    <option selected><?php echo $L4Mie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Mie__proceso" aria-label="Default select example">
                        <option selected><?php echo $L5Mie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Mie__proceso" aria-label="Default select example">
                        <option selected><?php echo $L6Mie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeMie__cocido?>"   name="OpeMie__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeMie__embarque?>" name="OpeMie__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L1Mie__granja?>" name="L1Mie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L2Mie__granja?>" name="L2Mie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L3Mie__granja?>" name="L3Mie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L4Mie__granja?>" name="L4Mie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L5Mie__granja?>" name="L5Mie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L6Mie__granja?>" name="L6Mie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtMie__cocido?>" name="ExtMie__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtMie__embarque?>" name="ExtMie__embarque">
                </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------CANTIDAD-------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L1Mie__cantidad?>"   name="L1Mie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L2Mie__cantidad?>"   name="L2Mie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L3Mie__cantidad?>"   name="L3Mie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L4Mie__cantidad?>"   name="L4Mie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L5Mie__cantidad?>"   name="L5Mie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L6Mie__cantidad?>"   name="L6Mie__cantidad">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtMie__cocido2?>"   name="ExtMie__cocido2">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtMie__embarque2?>" name="ExtMie__embarque2">
                </div>
            </div>
            <br>

<!-- ###############################################   JUEVES   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="JUEVES" readonly>
                    <select class="col-md-1 form-select" name="L1Jue__tipo" aria-label="Default select example">
                    <option selected><?php echo $L1Jue__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Jue__tipo" aria-label="Default select example">
                    <option selected><?php echo $L2Jue__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Jue__tipo" aria-label="Default select example">
                    <option selected><?php echo $L3Jue__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Jue__tipo" aria-label="Default select example">
                    <option selected><?php echo $L4Jue__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Jue__tipo" aria-label="Default select example">
                        <option selected><?php echo $L5Jue__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Jue__tipo" aria-label="Default select example">
                        <option selected><?php echo $L6Jue__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProJue__cocido?>"   name="ProJue__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProJue__embarque?>" name="ProJue__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="jue" value="<?php echo $Jue__fecha?>">
                    <select class="col-md-1 form-select" name="L1Jue__proceso" aria-label="Default select example">
                    <option selected><?php echo $L1Jue__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Jue__proceso" aria-label="Default select example">
                    <option selected><?php echo $L2Jue__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Jue__proceso" aria-label="Default select example">
                    <option selected><?php echo $L3Jue__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Jue__proceso" aria-label="Default select example">
                    <option selected><?php echo $L4Jue__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Jue__proceso" aria-label="Default select example">
                        <option selected><?php echo $L5Jue__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Jue__proceso" aria-label="Default select example">
                        <option selected><?php echo $L6Jue__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeJue__cocido?>"   name="OpeJue__cocido">                  
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeJue__embarque?>" name="OpeJue__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L1Jue__granja?>" name="L1Jue__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L2Jue__granja?>" name="L2Jue__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L3Jue__granja?>" name="L3Jue__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L4Jue__granja?>" name="L4Jue__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L5Jue__granja?>" name="L5Jue__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L6Jue__granja?>" name="L6Jue__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtJue__cocido?>" name="ExtJue__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtJue__embarque?>" name="ExtJue__embarque">
                </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------CANTIDAD-------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L1Jue__cantidad?>"   name="L1Jue__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L2Jue__cantidad?>"   name="L2Jue__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L3Jue__cantidad?>"   name="L3Jue__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L4Jue__cantidad?>"   name="L4Jue__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L5Jue__cantidad?>"   name="L5Jue__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L6Jue__cantidad?>"   name="L6Jue__cantidad">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtJue__cocido2?>"   name="ExtJue__cocido2">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtJue__embarque2?>" name="ExtJue__embarque2">
                </div>
            </div>
            <br>

<!-- ###############################################   VIERNES   ############################################## -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="VIERNES" readonly>
                    <select class="col-md-1 form-select" name="L1Vie__tipo" aria-label="Default select example">
                    <option selected><?php echo $L1Vie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Vie__tipo" aria-label="Default select example">
                    <option selected><?php echo $L2Vie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Vie__tipo" aria-label="Default select example">
                    <option selected><?php echo $L3Vie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Vie__tipo" aria-label="Default select example">
                    <option selected><?php echo $L4Vie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Vie__tipo" aria-label="Default select example">
                        <option selected><?php echo $L5Vie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Vie__tipo" aria-label="Default select example">
                        <option selected><?php echo $L6Vie__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProVie__cocido?>"   name="ProVie__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProVie__embarque?>" name="ProVie__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="vie" value="<?php echo $Vie__fecha?>">
                    <select class="col-md-1 form-select" name="L1Vie__proceso" aria-label="Default select example">
                    <option selected><?php echo $L1Vie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Vie__proceso" aria-label="Default select example">
                    <option selected><?php echo $L2Vie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Vie__proceso" aria-label="Default select example">
                    <option selected><?php echo $L3Vie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Vie__proceso" aria-label="Default select example">
                    <option selected><?php echo $L4Vie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Vie__proceso" aria-label="Default select example">
                        <option selected><?php echo $L5Vie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Vie__proceso" aria-label="Default select example">
                        <option selected><?php echo $L6Vie__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeVie__cocido?>"   name="OpeVie__cocido">                    
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeVie__embarque?>" name="OpeVie__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L1Vie__granja?>" name="L1Vie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L2Vie__granja?>" name="L2Vie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L3Vie__granja?>" name="L3Vie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L4Vie__granja?>" name="L4Vie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L5Vie__granja?>" name="L5Vie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L6Vie__granja?>" name="L6Vie__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtVie__cocido?>" name="ExtVie__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtVie__embarque?>" name="ExtVie__embarque">
                </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------CANTIDAD-------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L1Vie__cantidad?>"   name="L1Vie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L2Vie__cantidad?>"   name="L2Vie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L3Vie__cantidad?>"   name="L3Vie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L4Vie__cantidad?>"   name="L4Vie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L5Vie__cantidad?>"   name="L5Vie__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L6Vie__cantidad?>"   name="L6Vie__cantidad">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtVie__cocido2?>"   name="ExtVie__cocido2">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtVie__embarque2?>" name="ExtVie__embarque2">
                </div>
            </div>
            <br>

<!-- ###############################################   SABADO   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="SABADO" readonly>
                    <select class="col-md-1 form-select" name="L1Sab__tipo" aria-label="Default select example">
                    <option selected><?php echo $L1Sab__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Sab__tipo" aria-label="Default select example">
                    <option selected><?php echo $L2Sab__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Sab__tipo" aria-label="Default select example">
                    <option selected><?php echo $L3Sab__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Sab__tipo" aria-label="Default select example">
                    <option selected><?php echo $L4Sab__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Sab__tipo" aria-label="Default select example">
                        <option selected><?php echo $L5Sab__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Sab__tipo" aria-label="Default select example">
                        <option selected><?php echo $L6Sab__tipo?></option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                        <option value="POLLO">POLLO</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProSab__cocido?>"   name="ProSab__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ProSab__embarque?>" name="ProSab__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control fw-bold text-center" name="sab" value="<?php echo $Sab__fecha?>">
                    <select class="col-md-1 form-select" name="L1Sab__proceso" aria-label="Default select example">
                        <option selected><?php echo $L1Sab__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Sab__proceso" aria-label="Default select example">
                        <option selected><?php echo $L2Sab__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Sab__proceso" aria-label="Default select example">
                        <option selected><?php echo $L3Sab__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Sab__proceso" aria-label="Default select example">
                        <option selected><?php echo $L4Sab__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L5Sab__proceso" aria-label="Default select example">
                        <option selected><?php echo $L5Sab__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <select class="col-md-1 form-select" name="L6Sab__proceso" aria-label="Default select example">
                        <option selected><?php echo $L6Sab__proceso?></option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                        <option value=""></option>
                    </select>
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeSab__cocido?>"   name="OpeSab__cocido">                
                    <input type="text" class="col-md-1 form-control" value="<?php echo $OpeSab__embarque?>" name="OpeSab__embarque">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L1Sab__granja?>" name="L1Sab__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L2Sab__granja?>" name="L2Sab__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L3Sab__granja?>" name="L3Sab__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L4Sab__granja?>" name="L4Sab__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L5Sab__granja?>" name="L5Sab__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $L6Sab__granja?>" name="L6Sab__granja">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtSab__cocido?>" name="ExtSab__cocido">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtSab__embarque?>" name="ExtSab__embarque">
                </div>

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------CANTIDAD-------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L1Sab__cantidad?>"   name="L1Sab__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L2Sab__cantidad?>"   name="L2Sab__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L3Sab__cantidad?>"   name="L3Sab__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L4Sab__cantidad?>"   name="L4Sab__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L5Sab__cantidad?>"   name="L5Sab__cantidad">
                    <input type="text" pattern="[0-9]{1,4}" class="col-md-1 form-control" value="<?php echo $L6Sab__cantidad?>"   name="L6Sab__cantidad">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtSab__cocido2?>"   name="ExtSab__cocido2">
                    <input type="text" class="col-md-1 form-control" value="<?php echo $ExtSab__embarque2?>" name="ExtSab__embarque2">
                </div>
            </div>

<!--                 <div class="container text-center">
                    <div class="row seven-cols">
                        <div class="col-md-1 fs-4 fw-bold table__font">OPERACION</div>
                        <div class="col-md-1 fs-4 fw-bold table__font">PRODUCTO</div>
                        <div class="col-md-1 fs-4 fw-bold table__font">ESTADO</div>
                        <div class="col-md-1 fs-4 fw-bold table__font">DESPACHO</div>
                    </div>
                    <div class="row seven-cols">
                        <input type="text" class="col-md-1 form-control" value="<?php echo $ProLun__cocido?>"   name="ProLun__cocido">
                        <input type="text" class="col-md-1 form-control" value="<?php echo $ProLun__embarque?>" name="ProLun__embarque">
                        <input type="text" class="col-md-1 form-control" value="<?php echo $ProLun__cocido?>"   name="ProLun__cocido">
                        <input type="text" class="col-md-1 form-control" value="<?php echo $ProLun__embarque?>" name="ProLun__embarque">
                    </div>
                    <div class="row seven-cols">
                        <input type="text" class="col-md-1 form-control" value="<?php echo $OpeLun__cocido?>"   name="OpeLun__cocido">
                        <input type="text" class="col-md-1 form-control" value="<?php echo $OpeLun__embarque?>" name="OpeLun__embarque">
                        <input type="text" class="col-md-1 form-control" value="<?php echo $OpeLun__cocido?>"   name="OpeLun__cocido">
                        <input type="text" class="col-md-1 form-control" value="<?php echo $OpeLun__embarque?>" name="OpeLun__embarque">
                    </div>
                </div> -->
            </div>
<!-- ########################################################################################################## -->
        </form>
    </main>
    <script src="../js/script.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>