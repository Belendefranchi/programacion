<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
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
                    <div class="d-flex flex-row justify-content-end">
                    <?php
                        $semana=substr(($_POST['semana']),-2);
                    ?>

                    <form class="d-flex justify-content-end" action="enviar.php" method="post">
                        <input class="button fs-4 form-control fw-bold text-center" type="text" value="Semana: <?php echo $semana?>" name="semana" readonly>
                        <input class="button fs-4 form-control fw-bold text-center" type="submit" value="Enviar">
                        <input class="button fs-4 form-control fw-bold text-center" type="button" value="Volver" onClick="history.go(-1);">
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="">
    <br>

<!-- ################################################      ############################################### -->
<?php
include("conexion.php");
$query="SELECT fecha
            FROM faena 
                where sem='$semana'
                and lote='1'";

$resultado=$base->prepare($query);
$resultado->execute();     
$sem__fecha=$resultado->fetchAll(PDO::FETCH_COLUMN);
$resultado->closeCursor();

$Lun__fecha=$sem__fecha[0];
$Mar__fecha=$sem__fecha[1];
$Mie__fecha=$sem__fecha[2];
$Jue__fecha=$sem__fecha[3];
$Vie__fecha=$sem__fecha[4];
$Sab__fecha=$sem__fecha[5];


/* ############################################################## */
/* ---------------------------LUNES------------------------------ */
/* ############################################################## */
        
/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */

/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='lun'
            and lote='1'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Lun__tipo=$L1Lun__faena["tipo"];
$L1Lun__proceso=$L1Lun__faena["proceso"];
$L1Lun__granja=$L1Lun__faena["granja"];
$L1Lun__cantidad=$L1Lun__faena["cantidad"];
$Lun__fecha=$L1Lun__faena["fecha"];
$Lun__sem=$L1Lun__faena["sem"];


/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='lun' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Lun__tipo=$L2Lun__faena["tipo"];
$L2Lun__proceso=$L2Lun__faena["proceso"];
$L2Lun__granja=$L2Lun__faena["granja"];
$L2Lun__cantidad=$L2Lun__faena["cantidad"];

/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='lun' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Lun__tipo=$L3Lun__faena["tipo"];
$L3Lun__proceso=$L3Lun__faena["proceso"];
$L3Lun__granja=$L3Lun__faena["granja"];
$L3Lun__cantidad=$L3Lun__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='lun' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Lun__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Lun__tipo=$L4Lun__faena["tipo"];
$L4Lun__proceso=$L4Lun__faena["proceso"];
$L4Lun__granja=$L4Lun__faena["granja"];
$L4Lun__cantidad=$L4Lun__faena["cantidad"];


/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='lun' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Lun__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProLun__cocido=$Lun__cocido["pro_cocido"];
$OpeLun__cocido=$Lun__cocido["ope_cocido"];
$ExtLun__cocido=$Lun__cocido["ext_cocido"];
$ExtLun__cocido2=$Lun__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque
            where sem='$semana'
            and dia='lun'
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Lun__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProLun__embarque=$Lun__embarque["pro_embarque"];
$OpeLun__embarque=$Lun__embarque["ope_embarque"];
$ExtLun__embarque=$Lun__embarque["ext_embarque"];
$ExtLun__embarque2=$Lun__embarque["ext_embarque2"];


/* ############################################################## */
/* ---------------------------MARTES----------------------------- */
/* ############################################################## */

/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mar' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Mar__tipo=$L1Mar__faena["tipo"];
$L1Mar__proceso=$L1Mar__faena["proceso"];
$L1Mar__granja=$L1Mar__faena["granja"];
$L1Mar__cantidad=$L1Mar__faena["cantidad"];
$Mar__fecha=$L1Mar__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mar' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Mar__tipo=$L2Mar__faena["tipo"];
$L2Mar__proceso=$L2Mar__faena["proceso"];
$L2Mar__granja=$L2Mar__faena["granja"];
$L2Mar__cantidad=$L2Mar__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='mar' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Mar__tipo=$L3Mar__faena["tipo"];
$L3Mar__proceso=$L3Mar__faena["proceso"];
$L3Mar__granja=$L3Mar__faena["granja"];
$L3Mar__cantidad=$L3Mar__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mar' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Mar__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Mar__tipo=$L4Mar__faena["tipo"];
$L4Mar__proceso=$L4Mar__faena["proceso"];
$L4Mar__granja=$L4Mar__faena["granja"];
$L4Mar__cantidad=$L4Mar__faena["cantidad"];


/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='mar' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Mar__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProMar__cocido=$Mar__cocido["pro_cocido"];
$OpeMar__cocido=$Mar__cocido["ope_cocido"];
$ExtMar__cocido=$Mar__cocido["ext_cocido"];
$ExtMar__cocido2=$Mar__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='mar' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Mar__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProMar__embarque=$Mar__embarque["pro_embarque"];
$OpeMar__embarque=$Mar__embarque["ope_embarque"];
$ExtMar__embarque=$Mar__embarque["ext_embarque"];
$ExtMar__embarque2=$Mar__embarque["ext_embarque2"];

/* ############################################################## */
/* -------------------------MIERCOLES---------------------------- */
/* ############################################################## */
        
/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */       
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mie' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Mie__tipo=$L1Mie__faena["tipo"];
$L1Mie__proceso=$L1Mie__faena["proceso"];
$L1Mie__granja=$L1Mie__faena["granja"];
$L1Mie__cantidad=$L1Mie__faena["cantidad"];
$Mie__fecha=$L1Mie__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mie' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Mie__tipo=$L2Mie__faena["tipo"];
$L2Mie__proceso=$L2Mie__faena["proceso"];
$L2Mie__granja=$L2Mie__faena["granja"];
$L2Mie__cantidad=$L2Mie__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='mie' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Mie__tipo=$L3Mie__faena["tipo"];
$L3Mie__proceso=$L3Mie__faena["proceso"];
$L3Mie__granja=$L3Mie__faena["granja"];
$L3Mie__cantidad=$L3Mie__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='mie' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Mie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Mie__tipo=$L4Mie__faena["tipo"];
$L4Mie__proceso=$L4Mie__faena["proceso"];
$L4Mie__granja=$L4Mie__faena["granja"];
$L4Mie__cantidad=$L4Mie__faena["cantidad"];


/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='mie' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Mie__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProMie__cocido=$Mie__cocido["pro_cocido"];
$OpeMie__cocido=$Mie__cocido["ope_cocido"];
$ExtMie__cocido=$Mie__cocido["ext_cocido"];
$ExtMie__cocido2=$Mie__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='mie' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Mie__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProMie__embarque=$Mie__embarque["pro_embarque"];
$OpeMie__embarque=$Mie__embarque["ope_embarque"];
$ExtMie__embarque=$Mie__embarque["ext_embarque"];
$ExtMie__embarque2=$Mie__embarque["ext_embarque2"];

/* ############################################################## */
/* --------------------------JUEVES------------------------------ */
/* ############################################################## */
        
/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */       
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='jue' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Jue__tipo=$L1Jue__faena["tipo"];
$L1Jue__proceso=$L1Jue__faena["proceso"];
$L1Jue__granja=$L1Jue__faena["granja"];
$L1Jue__cantidad=$L1Jue__faena["cantidad"];
$Jue__fecha=$L1Jue__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='jue' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Jue__tipo=$L2Jue__faena["tipo"];
$L2Jue__proceso=$L2Jue__faena["proceso"];
$L2Jue__granja=$L2Jue__faena["granja"];
$L2Jue__cantidad=$L2Jue__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='jue' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Jue__tipo=$L3Jue__faena["tipo"];
$L3Jue__proceso=$L3Jue__faena["proceso"];
$L3Jue__granja=$L3Jue__faena["granja"];
$L3Jue__cantidad=$L3Jue__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='jue' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Jue__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Jue__tipo=$L4Jue__faena["tipo"];
$L4Jue__proceso=$L4Jue__faena["proceso"];
$L4Jue__granja=$L4Jue__faena["granja"];
$L4Jue__cantidad=$L4Jue__faena["cantidad"];


/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='jue' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Jue__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProJue__cocido=$Jue__cocido["pro_cocido"];
$OpeJue__cocido=$Jue__cocido["ope_cocido"];
$ExtJue__cocido=$Jue__cocido["ext_cocido"];
$ExtJue__cocido2=$Jue__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='jue' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Jue__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProJue__embarque=$Jue__embarque["pro_embarque"];
$OpeJue__embarque=$Jue__embarque["ope_embarque"];
$ExtJue__embarque=$Jue__embarque["ext_embarque"];
$ExtJue__embarque2=$Jue__embarque["ext_embarque2"];

/* ############################################################## */
/* --------------------------VIERNES----------------------------- */
/* ############################################################## */
        
/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */       
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='vie' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Vie__tipo=$L1Vie__faena["tipo"];
$L1Vie__proceso=$L1Vie__faena["proceso"];
$L1Vie__granja=$L1Vie__faena["granja"];
$L1Vie__cantidad=$L1Vie__faena["cantidad"];
$Vie__fecha=$L1Vie__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='vie' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Vie__tipo=$L2Vie__faena["tipo"];
$L2Vie__proceso=$L2Vie__faena["proceso"];
$L2Vie__granja=$L2Vie__faena["granja"];
$L2Vie__cantidad=$L2Vie__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='vie' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Vie__tipo=$L3Vie__faena["tipo"];
$L3Vie__proceso=$L3Vie__faena["proceso"];
$L3Vie__granja=$L3Vie__faena["granja"];
$L3Vie__cantidad=$L3Vie__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='vie' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Vie__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Vie__tipo=$L4Vie__faena["tipo"];
$L4Vie__proceso=$L4Vie__faena["proceso"];
$L4Vie__granja=$L4Vie__faena["granja"];
$L4Vie__cantidad=$L4Vie__faena["cantidad"];


/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='vie' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Vie__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProVie__cocido=$Vie__cocido["pro_cocido"];
$OpeVie__cocido=$Vie__cocido["ope_cocido"];
$ExtVie__cocido=$Vie__cocido["ext_cocido"];
$ExtVie__cocido2=$Vie__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='vie' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Vie__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProVie__embarque=$Vie__embarque["pro_embarque"];
$OpeVie__embarque=$Vie__embarque["ope_embarque"];
$ExtVie__embarque=$Vie__embarque["ext_embarque"];
$ExtVie__embarque2=$Vie__embarque["ext_embarque2"];

/* ############################################################## */
/* --------------------------SABADO------------------------------ */
/* ############################################################## */

/* ---------------------------faena------------------------------ */ 
/* -------------------------------------------------------------- */       
/* ---------------------------lote 1----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='sab' 
            and lote='1' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L1Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L1Sab__tipo=$L1Sab__faena["tipo"];
$L1Sab__proceso=$L1Sab__faena["proceso"];
$L1Sab__granja=$L1Sab__faena["granja"];
$L1Sab__cantidad=$L1Sab__faena["cantidad"];
$Sab__fecha=$L1Sab__faena["fecha"];

/* ---------------------------lote 2----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
            where sem='$semana'
            and dia='sab' 
            and lote='2' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L2Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L2Sab__tipo=$L2Sab__faena["tipo"];
$L2Sab__proceso=$L2Sab__faena["proceso"];
$L2Sab__granja=$L2Sab__faena["granja"];
$L2Sab__cantidad=$L2Sab__faena["cantidad"];


/* ---------------------------lote 3----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id 
        FROM faena 
            where sem='$semana'
            and dia='sab' 
            and lote='3' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L3Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L3Sab__tipo=$L3Sab__faena["tipo"];
$L3Sab__proceso=$L3Sab__faena["proceso"];
$L3Sab__granja=$L3Sab__faena["granja"];
$L3Sab__cantidad=$L3Sab__faena["cantidad"];


/* ---------------------------lote 4----------------------------- */ 

$query="SELECT tipo, proceso, granja, fecha, cantidad, sem, Id
        FROM faena 
        where sem='$semana'
        and dia='sab' 
            and lote='4' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();     
$L4Sab__faena=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$L4Sab__tipo=$L4Sab__faena["tipo"];
$L4Sab__proceso=$L4Sab__faena["proceso"];
$L4Sab__granja=$L4Sab__faena["granja"];
$L4Sab__cantidad=$L4Sab__faena["cantidad"];


/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, ope_cocido, ext_cocido, ext_cocido2, sem, Id
        FROM cocido 
            where sem='$semana'
            and dia='sab' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Sab__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProSab__cocido=$Sab__cocido["pro_cocido"];
$OpeSab__cocido=$Sab__cocido["ope_cocido"];
$ExtSab__cocido=$Sab__cocido["ext_cocido"];
$ExtSab__cocido2=$Sab__cocido["ext_cocido2"];


/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_embarque, ope_embarque, ext_embarque, ext_embarque2, sem, Id
        FROM embarque 
            where sem='$semana'
            and dia='sab' 
                ORDER BY Id DESC";

$resultado=$base->prepare($query);
$resultado->execute();
$Sab__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

$ProSab__embarque=$Sab__embarque["pro_embarque"];
$OpeSab__embarque=$Sab__embarque["ope_embarque"];
$ExtSab__embarque=$Sab__embarque["ext_embarque"];
$ExtSab__embarque2=$Sab__embarque["ext_embarque2"];


?>

<!-- ###########################################   ENCABEZADO   ############################################### -->
            <div class="container d-flex flex-column">
                <div class="row seven-cols align-items-center">
                    <div class="col-md-1 fs-4 fw-bold table__font">DIA</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">LOTE 1</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">LOTE 2</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">LOTE 3</div>
                    <div class="col-md-1 fs-4 fw-bold table__font">LOTE 4</div>
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