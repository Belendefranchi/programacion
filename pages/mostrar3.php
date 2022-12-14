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
                        $year = date('Y', time());
                        $semana = 50;
                        /* date('W', time()); */
                        /* ------------------------------------ */

                        /* datos para pagina de otras semanas----- */
/*                         $year=($_GET['year']);
                        $semana=($_GET['semana']); */
                        /* ------------------------------------ */
                        
                        include("conexion3.php");
                        include("checkLote.php");
/*                         include("querys.php"); */
/*                         include("variables.php"); */
                        
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
<!--                         <input class="btn btn-danger fs-4 fw-bold text-center" type="button" value="Total: <?php echo $total?>">&nspb&nspb -->
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
                        <input type="text" value="<?php echo $year?>" name="year" hidden>
                        <input type="text" value="<?php echo $semana?>" name="semana" hidden>
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
                    <tr class='table__font'>
                        <th class='table__font'>FECHA</th>
                        <?php
                            for ($i=1; $i<=$lote; $i++){
                                echo "<th class='table__font'>LOTE {$i}</th>";
                            }
                        ?>
                        <th class='table__font'>COCIDO</th>
                        <th class='table__font'>EMBARQUES</th>
                    </tr>
                </thead>
                
<!-- ########################################### LUNES ################################################### -->
                <tbody>
                    <tr class="table__row--dark table-group-divider">
                        <th class="">LUN:</th>
                        <?php
                            for ($i=1; $i<=$lote; $i++){                                
                                $query="SELECT tipo
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='lun'
                                        and lote='$i'
                                        ORDER BY Id DESC";
        
                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iLun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();
                                
                                $iLun__tipo=$iLun__faena["tipo"];
                                echo "<td class='table_font tipo'>" . $iLun__tipo . "</td>";
                            }
                        ?>
<!--                         <td class='table_font'><?php echo $ProLun__cocido?></td>
                        <td class='table_font'><?php echo $ProLun__embarque?></td> -->
                    </tr>
                    <tr class="table__row--light">
                        <?php
                            $query="SELECT fecha
                                FROM faena 
                                where year='$year'
                                and sem='$semana'
                                and dia='lun'
                                and lote='$i'
                                ORDER BY Id DESC";

                            $resultado=$base->prepare($query);
                            $resultado->execute();     
                            $Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                            $resultado->closeCursor ();
                            
                            $Lun__fecha=$Lun__faena["fecha"];
/*                             $Lun__sem=$Lun__faena["sem"]; */
                        ?>
                        <th class=""><?php echo $Lun__fecha?></th>
                        <?php
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT proceso
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='lun'
                                        and lote='$i'
                                        ORDER BY Id DESC";
        
                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iLun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();
                                
                                $iLun__proceso = $iLun__faena["proceso"];
                                echo "<td class='table_font proceso'>" . $iLun__proceso . "</td>";
                            }
                        ?>
<!--                         <td class='table_font'><?php echo $OpeLun__cocido?></td>
                        <td class='table_font'><?php echo $OpeLun__embarque?></td> -->
                    </tr>
                    <tr class="table__row--dark">
                        <th class="total"><?php echo "TOTAL"?></th>
                        <?php
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT granja
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='lun'
                                        and lote='$i'
                                        ORDER BY Id DESC";
        
                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iLun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor();

                                $iLun__cantidad=$iLun__faena["granja"];
                                echo "<td class='table_font granja'>" . $iLun__cantidad . "</td>";
                            }
                        ?>
<!--                         <td class='table_font'><?php echo $ExtLun__cocido?></td>
                        <td class='table_font'><?php echo $ExtLun__embarque?></td> -->
                    </tr>
                    <tr class="table__row--light">
                        <?php
                        $totLun=0;
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT cantidad
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='lun'
                                        and lote='$i'
                                        ORDER BY Id DESC";

                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iLun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();
                                
                                $iLun__cantidad=$iLun__faena["cantidad"];
                                $totLun = $totLun + $iLun__cantidad;
                            }
                            echo "<td class='table_font total'>" . $totLun . "</td>";
                            
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT cantidad
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='lun'
                                        and lote='$i'
                                        ORDER BY Id DESC";
                                
                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iLun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();

                                $iLun__cantidad=$iLun__faena["cantidad"];
                                echo "<td class='table_font'>" . $iLun__cantidad . "</td>";
                            }
                            
                        ?>
<!--                         <td class='table_font'><?php echo $ExtLun__cocido2?></td>
                        <td class='table_font'><?php echo $ExtLun__embarque2?></td> -->
                    </tr>
                    
<!-- ########################################### MARTES ################################################### -->

                    <tr class="table__row--dark table-group-divider">
                        <th class="">MAR:</th>
                        <?php
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT fecha, sem
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='mar'
                                        and lote='$i'
                                        ORDER BY Id DESC";

                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iMar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();
                                
                                $Mar__fecha=$iMar__faena["fecha"];
                                $Mar__sem=$iMar__faena["sem"];
                                
                                $query="SELECT tipo
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='mar'
                                        and lote='$i'
                                        ORDER BY Id DESC";
        
                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iMar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();
                                
                                echo "<td class='table_font tipo'>" . $iMar__faena["tipo"] . "</td>";
                            }
                        ?>
<!--                         <td class='table_font'><?php echo $ProMar__cocido?></td>
                        <td class='table_font'><?php echo $ProMar__embarque?></td> -->
                    </tr>
                    <tr class="table__row--light">
                        <th class=""><?php echo "$Mar__fecha"?></th>
                        <?php
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT proceso
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='mar'
                                        and lote='$i'
                                        ORDER BY Id DESC";
        
                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iMar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();
                                
                                echo "<td class='table_font proceso'>" . $iMar__faena["proceso"] . "</td>";
                            }
                        ?>
<!--                         <td class='table_font'><?php echo $OpeMar__cocido?></td>
                        <td class='table_font'><?php echo $OpeMar__embarque?></td> -->
                    </tr>
                    <tr class="table__row--dark">
                        <th class="total"><?php echo "TOTAL"?></th>
                        <?php
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT granja
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='mar'
                                        and lote='$i'
                                        ORDER BY Id DESC";
        
                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iMar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();

                                echo "<td class='table_font granja'>" . $iMar__faena["granja"] . "</td>";
                            }
                        ?>
<!--                         <td class='table_font'><?php echo $ExtMar__cocido?></td>
                        <td class='table_font'><?php echo $ExtMar__embarque?></td> -->
                    </tr>
                    <tr class="table__row--light">
                        <?php
                            $totMar=0;
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT cantidad
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='mar'
                                        and lote='$i'
                                        ORDER BY Id DESC";

                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iMar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();
                                
                                $iMar__cantidad=$iMar__faena["cantidad"];
                                $totMar = $totMar + $iMar__cantidad;
                            }
                            echo "<td class='table_font total'>" . $totMar . "</td>";
                            
                            for ($i=1; $i<=$lote; $i++){
                                $query="SELECT cantidad
                                        FROM faena 
                                        where year='$year'
                                        and sem='$semana'
                                        and dia='mar'
                                        and lote='$i'
                                        ORDER BY Id DESC";
                                
                                $resultado=$base->prepare($query);
                                $resultado->execute();     
                                $iMar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
                                $resultado->closeCursor ();

                                $iMar__cantidad=$iMar__faena["cantidad"];
                                
                                echo "<td class='table_font'>" . $iMar__cantidad . "</td>";
                            }
                            
                        ?>
<!--                         <td class='table_font'><?php echo $ExtMar__cocido2?></td>
                        <td class='table_font'><?php echo $ExtMar__embarque2?></td> -->
                    </tr>


<!-- ########################################### MIERCOLES ################################################### -->




<!-- ########################################### JUEVES ################################################### -->



<!-- ########################################### VIERNES ################################################### -->



<!-- ########################################### SABADO ################################################### -->


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