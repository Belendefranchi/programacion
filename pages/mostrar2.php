<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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

                        /* datos para paginas fijas------------ */
                        /* $year = date('Y', time()); */
                        /* $semana = date('W', time()); */
                        /* ------------------------------------ */

                        /* datos para pagina de otras semanas----- */
                        $year=($_GET['year']);
                        $semana=($_GET['semana']);
                        /* ------------------------------------ */
                        
                        include("conexion2.php");
                        include("querys.php");
                        include("variables.php");
                        
                        $prevSem=$semana-1;
                        $nextSem=$semana+1;
                        
                        if($prevSem<1){
                            $semana=52;
                        }
                        
                        if($nextSem>52){
                            $semana=1;
                        }
                    ?>
                    <form class="d-flex justify-content-end" action="editar2.php" method="GET">
                        <input class="btn btn-danger fs-4 fw-bold text-center" type="button" value="Total: <?php echo $total?>">&nspb&nspb
                        <a class="a" href="../index.php">
                            <input class="button fs-4 form-control fw-bold text-center" type="button" value="<?php echo $year?>">
                        </a>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="a" href="mostrar2.php?year=<?php echo $year?>&semana=<?php echo $prevSem?>">
                                <input class="button fs-4 form-control fw-bold text-center" type="button" value="<">
                            </a>
                            <a class="a" href="mostrar2.php?year=<?php echo $year?>&semana=<?php echo $semana?>">
                                <input class="button fs-4 form-control fw-bold text-center" type="button" value="Semana: <?php echo $semana?>">
                            </a>
                            <a class="a" href="mostrar2.php?year=<?php echo $year?>&semana=<?php echo $nextSem?>">
                                <input class="button fs-4 form-control fw-bold text-center" type="button" value=">">
                            </a>
                        </div>
                        <input class="button fs-4 form-control fw-bold text-center" type="text" value="<?php echo $year?>" name="year" hidden>
                        <input class="button fs-4 form-control fw-bold text-center" type="text" value="<?php echo $semana?>" name="semana" hidden>
                        <input class="button fs-4 form-control fw-bold text-center" type="submit" value="Editar">
                        <!-- <input class="button fs-4 form-control fw-bold text-center" type="reset" value="Borrar"> -->
                        <input class="button fs-4 form-control fw-bold text-center" type="button" value="Volver" onClick="history.go(-1);">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <script src="../js/script.js"></script>
            <table class="table-responsive table__font" id="target" style="margin: auto;">
                <thead>
                    <tr class="table__font">
                        <th class="table__font" >FECHA</th>
                        <th class="table__font" >LOTE 1</th>
                        <th class="table__font" >LOTE 2</th>
                        <th class="table__font" >LOTE 3</th>
                        <th class="table__font" >LOTE 4</th>
                        <th class="table__font" >LOTE 5</th>
                        <th class="table__font" >LOTE 6</th>
                        <th class="table__font" >COCIDO</th>
                        <th class="table__font" >EMBARQUES</th>
                    </tr>
                </thead>

<!-- ########################################### LUNES ################################################### -->
                <tbody>
                    <tr class="table__row--dark table-group-divider">
                        <th class="">LUN:</th>
                        <td class='table_font' id="L1Lun__tipo"><?php  echo $L1Lun__tipo?></td>
                        <td class='table_font' id="L2Lun__tipo"><?php  echo $L2Lun__tipo?></td>
                        <td class='table_font' id="L3Lun__tipo"><?php  echo $L3Lun__tipo?></td>
                        <td class='table_font' id="L4Lun__tipo"><?php  echo $L4Lun__tipo?></td>
                        <td class='table_font' id="L5Lun__tipo"><?php  echo $L5Lun__tipo?></td>
                        <td class='table_font' id="L6Lun__tipo"><?php  echo $L6Lun__tipo?></td>
                        <td class='table_font'><?php echo $ProLun__cocido?></td>
                        <td class='table_font'><?php echo $ProLun__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th class=""><?php echo "$Lun__fecha"?></th>
                        <td class='table_font' id="L1Lun__proceso"><?php echo $L1Lun__proceso?></td>
                        <td class='table_font' id="L2Lun__proceso"><?php echo $L2Lun__proceso?></td>
                        <td class='table_font' id="L3Lun__proceso"><?php echo $L3Lun__proceso?></td>
                        <td class='table_font' id="L4Lun__proceso"><?php echo $L4Lun__proceso?></td>
                        <td class='table_font' id="L5Lun__proceso"><?php echo $L5Lun__proceso?></td>
                        <td class='table_font' id="L6Lun__proceso"><?php echo $L6Lun__proceso?></td>
                        <td class='table_font'><?php echo $OpeLun__cocido?></td>
                        <td class='table_font'><?php echo $OpeLun__embarque?></td>
                    </tr>
                    <tr class="table__row--dark">
                        <th class="total"><?php if($totLun!=0){echo "TOTAL";}?></th>
                        <td class='table_font'><?php echo $L1Lun__granja?></td>
                        <td class='table_font'><?php echo $L2Lun__granja?></td>
                        <td class='table_font'><?php echo $L3Lun__granja?></td>
                        <td class='table_font'><?php echo $L4Lun__granja?></td>
                        <td class='table_font'><?php echo $L5Lun__granja?></td>
                        <td class='table_font'><?php echo $L6Lun__granja?></td>
                        <td class='table_font'><?php echo $ExtLun__cocido?></td>
                        <td class='table_font'><?php echo $ExtLun__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th class="total table_font" scope="row"><?php if($totLun!=0){echo $totLun;}?></th>
                        <td class='table_font'><?php if($L1Lun__cantidad!=0){echo $L1Lun__cantidad;}?></td>
                        <td class='table_font'><?php if($L2Lun__cantidad!=0){echo $L2Lun__cantidad;}?></td>
                        <td class='table_font'><?php if($L3Lun__cantidad!=0){echo $L3Lun__cantidad;}?></td>
                        <td class='table_font'><?php if($L4Lun__cantidad!=0){echo $L4Lun__cantidad;}?></td>
                        <td class='table_font'><?php if($L5Lun__cantidad!=0){echo $L5Lun__cantidad;}?></td>
                        <td class='table_font'><?php if($L6Lun__cantidad!=0){echo $L6Lun__cantidad;}?></td>
                        <td class='table_font'><?php echo $ExtLun__cocido2?></td>
                        <td class='table_font'><?php echo $ExtLun__embarque2?></td>
                    </tr>
                    
<!-- ########################################### MARTES ################################################### -->

                    <tr class="table__row--dark table-group-divider">
                        <th class="">MAR:</th>
                        <td class='table_font' id="L1Mar__tipo"><?php  echo $L1Mar__tipo?></td>
                        <td class='table_font' id="L2Mar__tipo"><?php  echo $L2Mar__tipo?></td>
                        <td class='table_font' id="L3Mar__tipo"><?php  echo $L3Mar__tipo?></td>
                        <td class='table_font' id="L4Mar__tipo"><?php  echo $L4Mar__tipo?></td>
                        <td class='table_font' id="L5Mar__tipo"><?php  echo $L5Mar__tipo?></td>
                        <td class='table_font' id="L6Mar__tipo"><?php  echo $L6Mar__tipo?></td>
                        <td class='table_font'><?php echo $ProMar__cocido?></td>
                        <td class='table_font'><?php echo $ProMar__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th class=""><?php echo "$Mar__fecha"?></th>
                        <td class='table_font' id="L1Mar__proceso"><?php echo $L1Mar__proceso?></td>
                        <td class='table_font' id="L2Mar__proceso"><?php echo $L2Mar__proceso?></td>
                        <td class='table_font' id="L3Mar__proceso"><?php echo $L3Mar__proceso?></td>
                        <td class='table_font' id="L4Mar__proceso"><?php echo $L4Mar__proceso?></td>
                        <td class='table_font' id="L5Mar__proceso"><?php echo $L5Mar__proceso?></td>
                        <td class='table_font' id="L6Mar__proceso"><?php echo $L6Mar__proceso?></td>
                        <td class='table_font'><?php echo $OpeMar__cocido?></td>
                        <td class='table_font'><?php echo $OpeMar__embarque?></td>
                    </tr>
                    <tr class="table__row--dark">
                        <th class="total"><?php if($totMar!=0){echo "TOTAL";}?></th>
                        <td class='table_font'><?php echo $L1Mar__granja?></td>
                        <td class='table_font'><?php echo $L2Mar__granja?></td>
                        <td class='table_font'><?php echo $L3Mar__granja?></td>
                        <td class='table_font'><?php echo $L4Mar__granja?></td>
                        <td class='table_font'><?php echo $L5Mar__granja?></td>
                        <td class='table_font'><?php echo $L6Mar__granja?></td>
                        <td class='table_font'><?php echo $ExtMar__cocido?></td>
                        <td class='table_font'><?php echo $ExtMar__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th class="total table_font" scope="row"><?php if($totMar!=0){echo $totMar;}?></th>
                        <td class='table_font'><?php if($L1Mar__cantidad!=0){echo $L1Mar__cantidad;}?></td>
                        <td class='table_font'><?php if($L2Mar__cantidad!=0){echo $L2Mar__cantidad;}?></td>
                        <td class='table_font'><?php if($L3Mar__cantidad!=0){echo $L3Mar__cantidad;}?></td>
                        <td class='table_font'><?php if($L4Mar__cantidad!=0){echo $L4Mar__cantidad;}?></td>
                        <td class='table_font'><?php if($L5Mar__cantidad!=0){echo $L5Mar__cantidad;}?></td>
                        <td class='table_font'><?php if($L6Mar__cantidad!=0){echo $L6Mar__cantidad;}?></td>
                        <td class='table_font'><?php echo $ExtMar__cocido2?></td>
                        <td class='table_font'><?php echo $ExtMar__embarque2?></td>
                    </tr>

<!-- ########################################### MIERCOLES ################################################### -->

                    <tr class="table__row--dark table-group-divider">
                        <th class="">MIE:</th>
                        <td class='table_font' id="L1Mie__tipo"><?php echo $L1Mie__tipo?></td>
                        <td class='table_font' id="L2Mie__tipo"><?php echo $L2Mie__tipo?></td>
                        <td class='table_font' id="L3Mie__tipo"><?php echo $L3Mie__tipo?></td>
                        <td class='table_font' id="L4Mie__tipo"><?php echo $L4Mie__tipo?></td>
                        <td class='table_font' id="L5Mie__tipo"><?php echo $L5Mie__tipo?></td>
                        <td class='table_font' id="L6Mie__tipo"><?php echo $L6Mie__tipo?></td>
                        <td class='table_font'><?php echo $ProMie__cocido?></td>
                        <td class='table_font'><?php echo $ProMie__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th scope="row"><?php echo "$Mie__fecha"?></th>
                        <td class='table_font' id="L1Mie__proceso"><?php echo $L1Mie__proceso?></td>
                        <td class='table_font' id="L2Mie__proceso"><?php echo $L2Mie__proceso?></td>
                        <td class='table_font' id="L3Mie__proceso"><?php echo $L3Mie__proceso?></td>
                        <td class='table_font' id="L4Mie__proceso"><?php echo $L4Mie__proceso?></td>
                        <td class='table_font' id="L5Mie__proceso"><?php echo $L5Mie__proceso?></td>
                        <td class='table_font' id="L6Mie__proceso"><?php echo $L6Mie__proceso?></td>
                        <td class='table_font'><?php echo $OpeMie__cocido?></td>
                        <td class='table_font'><?php echo $OpeMie__embarque?></td>
                    </tr>
                    <tr class="table__row--dark">
                        <th class="total"><?php if($totMie!=0){echo "TOTAL";}?></th>
                        <td class='table_font'><?php echo $L1Mie__granja?></td>
                        <td class='table_font'><?php echo $L2Mie__granja?></td>
                        <td class='table_font'><?php echo $L3Mie__granja?></td>
                        <td class='table_font'><?php echo $L4Mie__granja?></td>
                        <td class='table_font'><?php echo $L5Mie__granja?></td>
                        <td class='table_font'><?php echo $L6Mie__granja?></td>
                        <td class='table_font'><?php echo $ExtMie__cocido?></td>
                        <td class='table_font'><?php echo $ExtMie__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th class="total table_font" scope="row"><?php if($totMie!=0){echo $totMie;}?></th>
                        <td class='table_font'><?php if($L1Mie__cantidad!=0){echo $L1Mie__cantidad;}?></td>
                        <td class='table_font'><?php if($L2Mie__cantidad!=0){echo $L2Mie__cantidad;}?></td>
                        <td class='table_font'><?php if($L3Mie__cantidad!=0){echo $L3Mie__cantidad;}?></td>
                        <td class='table_font'><?php if($L4Mie__cantidad!=0){echo $L4Mie__cantidad;}?></td>
                        <td class='table_font'><?php if($L5Mie__cantidad!=0){echo $L5Mie__cantidad;}?></td>
                        <td class='table_font'><?php if($L6Mie__cantidad!=0){echo $L6Mie__cantidad;}?></td>
                        <td class='table_font'><?php echo $ExtMie__cocido2?></td>
                        <td class='table_font'><?php echo $ExtMie__embarque2?></td>
                    </tr>


<!-- ########################################### JUEVES ################################################### -->

                    <tr class="table__row--dark table-group-divider">
                        <th class="">JUE:</th>
                        <td class='table_font' id="L1Jue__tipo"><?php echo $L1Jue__tipo?></td>
                        <td class='table_font' id="L2Jue__tipo"><?php echo $L2Jue__tipo?></td>
                        <td class='table_font' id="L3Jue__tipo"><?php echo $L3Jue__tipo?></td>
                        <td class='table_font' id="L4Jue__tipo"><?php echo $L4Jue__tipo?></td>
                        <td class='table_font' id="L5Jue__tipo"><?php  echo $L5Jue__tipo?></td>
                        <td class='table_font' id="L6Jue__tipo"><?php  echo $L6Jue__tipo?></td>
                        <td class='table_font'><?php echo $ProJue__cocido?></td>
                        <td class='table_font'><?php echo $ProJue__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th scope="row"><?php echo "$Jue__fecha"?></th>
                        <td class='table_font' id="L1Jue__proceso"><?php echo $L1Jue__proceso?></td>
                        <td class='table_font' id="L2Jue__proceso"><?php echo $L2Jue__proceso?></td>
                        <td class='table_font' id="L3Jue__proceso"><?php echo $L3Jue__proceso?></td>
                        <td class='table_font' id="L4Jue__proceso"><?php echo $L4Jue__proceso?></td>
                        <td class='table_font' id="L5Jue__proceso"><?php echo $L5Jue__proceso?></td>
                        <td class='table_font' id="L6Jue__proceso"><?php echo $L6Jue__proceso?></td>
                        <td class='table_font'><?php echo $OpeJue__cocido?></td>
                        <td class='table_font'><?php echo $OpeJue__embarque?></td>
                    </tr>

                    <tr class="table__row--dark">
                        <th class="total"><?php if($totJue!=0){echo "TOTAL";}?></th>
                        <td class='table_font'><?php echo $L1Jue__granja?></td>
                        <td class='table_font'><?php echo $L2Jue__granja?></td>
                        <td class='table_font'><?php echo $L3Jue__granja?></td>
                        <td class='table_font'><?php echo $L4Jue__granja?></td>
                        <td class='table_font'><?php echo $L5Jue__granja?></td>
                        <td class='table_font'><?php echo $L6Jue__granja?></td>
                        <td class='table_font'><?php echo $ExtJue__cocido?></td>
                        <td class='table_font'><?php echo $ExtJue__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th class="total table_font" scope="row"><?php if($totJue!=0){echo $totJue;}?></th>
                        <td class='table_font'><?php if($L1Jue__cantidad!=0){echo $L1Jue__cantidad;}?></td>
                        <td class='table_font'><?php if($L2Jue__cantidad!=0){echo $L2Jue__cantidad;}?></td>
                        <td class='table_font'><?php if($L3Jue__cantidad!=0){echo $L3Jue__cantidad;}?></td>
                        <td class='table_font'><?php if($L4Jue__cantidad!=0){echo $L4Jue__cantidad;}?></td>
                        <td class='table_font'><?php if($L5Jue__cantidad!=0){echo $L5Jue__cantidad;}?></td>
                        <td class='table_font'><?php if($L6Jue__cantidad!=0){echo $L6Jue__cantidad;}?></td>
                        <td class='table_font'><?php echo $ExtJue__cocido2?></td>
                        <td class='table_font'><?php echo $ExtJue__embarque2?></td>
                    </tr>

<!-- ########################################### VIERNES ################################################### -->

                    <tr class="table__row--dark table-group-divider">
                        <th class="">VIE:</th>
                        <td class='table_font' id="L1Vie__tipo"><?php echo $L1Vie__tipo?></td>
                        <td class='table_font' id="L2Vie__tipo"><?php echo $L2Vie__tipo?></td>
                        <td class='table_font' id="L3Vie__tipo"><?php echo $L3Vie__tipo?></td>
                        <td class='table_font' id="L4Vie__tipo"><?php echo $L4Vie__tipo?></td>
                        <td class='table_font' id="L5Vie__tipo"><?php  echo $L5Vie__tipo?></td>
                        <td class='table_font' id="L6Vie__tipo"><?php  echo $L6Vie__tipo?></td>
                        <td class='table_font'><?php echo $ProVie__cocido?></td>
                        <td class='table_font'><?php echo $ProVie__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th scope="row"><?php echo "$Vie__fecha"?></th>
                        <td class='table_font' id="L1Vie__proceso"><?php echo $L1Vie__proceso?></td>
                        <td class='table_font' id="L2Vie__proceso"><?php echo $L2Vie__proceso?></td>
                        <td class='table_font' id="L3Vie__proceso"><?php echo $L3Vie__proceso?></td>
                        <td class='table_font' id="L4Vie__proceso"><?php echo $L4Vie__proceso?></td>
                        <td class='table_font' id="L5Vie__proceso"><?php echo $L5Vie__proceso?></td>
                        <td class='table_font' id="L6Vie__proceso"><?php echo $L6Vie__proceso?></td>
                        <td class='table_font'><?php echo $OpeVie__cocido?></td>
                        <td class='table_font'><?php echo $OpeVie__embarque?></td>
                    </tr>
                    <tr class="table__row--dark">
                        <th class="total"><?php if($totVie!=0){echo "TOTAL";}?></th>
                        <td class='table_font'><?php echo $L1Vie__granja?></td>
                        <td class='table_font'><?php echo $L2Vie__granja?></td>
                        <td class='table_font'><?php echo $L3Vie__granja?></td>
                        <td class='table_font'><?php echo $L4Vie__granja?></td>
                        <td class='table_font'><?php echo $L5Vie__granja?></td>
                        <td class='table_font'><?php echo $L6Vie__granja?></td>
                        <td class='table_font'><?php echo $ExtVie__cocido?></td>
                        <td class='table_font'><?php echo $ExtVie__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th class="total table_font" scope="row"><?php if($totVie!=0){echo $totVie;}?></th>
                        <td class='table_font'><?php if($L1Vie__cantidad!=0){echo $L1Vie__cantidad;}?></td>
                        <td class='table_font'><?php if($L2Vie__cantidad!=0){echo $L2Vie__cantidad;}?></td>
                        <td class='table_font'><?php if($L3Vie__cantidad!=0){echo $L3Vie__cantidad;}?></td>
                        <td class='table_font'><?php if($L4Vie__cantidad!=0){echo $L4Vie__cantidad;}?></td>
                        <td class='table_font'><?php if($L5Vie__cantidad!=0){echo $L5Vie__cantidad;}?></td>
                        <td class='table_font'><?php if($L6Vie__cantidad!=0){echo $L6Vie__cantidad;}?></td>
                        <td class='table_font'><?php echo $ExtVie__cocido2?></td>
                        <td class='table_font'><?php echo $ExtVie__embarque2?></td>
                    </tr>

<!-- ########################################### SABADO ################################################### -->

                    <tr class="table__row--dark table-group-divider">
                        <th class="">SAB:</th>
                        <td class='table_font' id="L1Sab__tipo"><?php echo $L1Sab__tipo?></td>
                        <td class='table_font' id="L2Sab__tipo"><?php echo $L2Sab__tipo?></td>
                        <td class='table_font' id="L3Sab__tipo"><?php echo $L3Sab__tipo?></td>
                        <td class='table_font' id="L4Sab__tipo"><?php echo $L4Sab__tipo?></td>
                        <td class='table_font' id="L5Sab__tipo"><?php  echo $L5Sab__tipo?></td>
                        <td class='table_font' id="L6Sab__tipo"><?php  echo $L6Sab__tipo?></td>
                        <td class='table_font'><?php echo $ProSab__cocido?></td>
                        <td class='table_font'><?php echo $ProSab__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th scope="row"><?php echo "$Sab__fecha";?></th>
                        <td class='table_font' id="L1Sab__proceso"><?php echo $L1Sab__proceso?></td>
                        <td class='table_font' id="L2Sab__proceso"><?php echo $L2Sab__proceso?></td>
                        <td class='table_font' id="L3Sab__proceso"><?php echo $L3Sab__proceso?></td>
                        <td class='table_font' id="L4Sab__proceso"><?php echo $L4Sab__proceso?></td>
                        <td class='table_font' id="L5Sab__proceso"><?php echo $L5Sab__proceso?></td>
                        <td class='table_font' id="L6Sab__proceso"><?php echo $L6Sab__proceso?></td>
                        <td class='table_font'><?php echo $OpeSab__cocido?></td>              
                        <td class='table_font'><?php echo $OpeSab__cocido?></td>       
                    </tr>
                    <tr class="table__row--dark">
                        <th class="total"><?php if($totSab!=0){echo "TOTAL";}?></th>
                        <td class='table_font'><?php echo $L1Sab__granja?></td>
                        <td class='table_font'><?php echo $L2Sab__granja?></td>
                        <td class='table_font'><?php echo $L3Sab__granja?></td>
                        <td class='table_font'><?php echo $L4Sab__granja?></td>
                        <td class='table_font'><?php echo $L5Sab__granja?></td>
                        <td class='table_font'><?php echo $L6Sab__granja?></td>
                        <td class='table_font'><?php echo $ExtSab__cocido?></td>
                        <td class='table_font'><?php echo $ExtSab__embarque?></td>
                    </tr>
                    <tr class="table__row--light">
                        <th class="total table_font" scope="row"><?php if($totSab!=0){echo $totSab;}?></th>
                        <td class='table_font'><?php if($L1Sab__cantidad!=0){echo $L1Sab__cantidad;}?></td>
                        <td class='table_font'><?php if($L2Sab__cantidad!=0){echo $L2Sab__cantidad;}?></td>
                        <td class='table_font'><?php if($L3Sab__cantidad!=0){echo $L3Sab__cantidad;}?></td>
                        <td class='table_font'><?php if($L4Sab__cantidad!=0){echo $L4Sab__cantidad;}?></td>
                        <td class='table_font'><?php if($L5Sab__cantidad!=0){echo $L5Sab__cantidad;}?></td>
                        <td class='table_font'><?php if($L6Sab__cantidad!=0){echo $L6Sab__cantidad;}?></td>
                        <td class='table_font'><?php echo $ExtSab__cocido2?></td>
                        <td class='table_font'><?php echo $ExtSab__embarque2?></td>
                    </tr>
                    <tr class="table__row--dark table-group-divider">
                    </tr>
                </tbody>
            </table>


        <!-- ######################################################################################################################################################################### -->
        <!-- ######################################################################################################################################################################### -->
        <!-- ######################################################################################################################################################################### -->
        <!-- ######################################################################################################################################################################### -->
        <!-- ######################################################################################################################################################################### -->
        <div class="text-center">
            <video width="100" height="100" src="../resources/loop.mp4" loop autoplay hidden></video>
        </div>
    </main>
        <script>
            function actualizar(){location.reload(true);}
            setInterval("actualizar()",10000);
        </script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>