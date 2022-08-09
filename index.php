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
    <main>
        <?php

        include("conexion.php");
        
        $sem = date('W', time());

/* ############################################################## */
/* ---------------------------LUNES------------------------------ */
/* ############################################################## */
        
/* ---------------------------tipo------------------------------- */ 
/* -------------------------------------------------------------- */       
        $query="SELECT tipo, Id
                FROM faena 
                where sem='$sem'
                    and dia='lun' 
                    and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Lun__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();
        
        $query="SELECT tipo, Id
                FROM faena 
                where sem='$sem'
                    and dia='lun' 
                    and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Lun__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id 
        FROM faena 
        where sem='$sem'
            and dia='lun' 
            and lote='3' ORDER BY Id DESC";
        
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Lun__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
                FROM faena 
                where sem='$sem'
                    and dia='lun' 
                    and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Lun__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* -------------------------proceso----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='lun' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Lun__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
                FROM faena 
                where sem='$sem'
                    and dia='lun' 
                    and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Lun__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id 
        FROM faena 
        where sem='$sem'
            and dia='lun' 
            and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Lun__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
                FROM faena 
                where sem='$sem'
                    and dia='lun' 
                    and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Lun__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ---------------------------granja----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT granja, Id
                FROM faena 
                where sem='$sem'
                    and dia='lun' 
                    and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Lun__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
                FROM faena 
                where sem='$sem'
                    and dia='lun' 
                    and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Lun__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id 
        FROM faena 
        where sem='$sem'
            and dia='lun' 
            and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Lun__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
                FROM faena 
                where sem='$sem'
                    and dia='lun' 
                    and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Lun__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ---------------------------cocido----------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT pro_cocido, Id
FROM cocido 
where sem='$sem'
    and dia='lun' 
    and lote='1' ORDER BY Id DESC";
$resultado=$base->prepare($query);
$resultado->execute();     
$ProLun__cocido=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

/* ---------------------------embarque--------------------------- */
/* -------------------------------------------------------------- */ 

$query="SELECT granja, Id
FROM faena 
where sem='$sem'
    and dia='lun' 
    and lote='1' ORDER BY Id DESC";
$resultado=$base->prepare($query);
$resultado->execute();     
$ProLun__embarque=$resultado->fetch(PDO::FETCH_ASSOC);
$resultado->closeCursor();

/* ############################################################## */
/* ---------------------------MARTES----------------------------- */
/* ############################################################## */

/* ---------------------------tipo------------------------------- */ 
/* -------------------------------------------------------------- */       
        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='mar' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Mar__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='mar' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Mar__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id 
        FROM faena 
        where sem='$sem'
        and dia='mar' 
        and lote='3' ORDER BY Id DESC";

        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Mar__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='mar' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Mar__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* -------------------------proceso----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
        and dia='mar' 
        and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Mar__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='mar' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Mar__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id 
        FROM faena 
        where sem='$sem'
        and dia='mar' 
        and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Mar__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='mar' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Mar__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ---------------------------granja----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='mar' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Mar__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='mar' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Mar__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id 
        FROM faena 
        where sem='$sem'
        and dia='mar' 
        and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Mar__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='mar' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Mar__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();
        
/* ############################################################## */
/* -------------------------MIERCOLES---------------------------- */
/* ############################################################## */
        
/* ---------------------------tipo------------------------------- */ 
/* -------------------------------------------------------------- */       
        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='mie' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Mie__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='mie' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Mie__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id 
        FROM faena 
        where sem='$sem'
        and dia='mie' 
        and lote='3' ORDER BY Id DESC";

        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Mie__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='mie' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Mie__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* -------------------------proceso----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
        and dia='mie' 
        and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Mie__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='mie' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Mie__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id 
        FROM faena 
        where sem='$sem'
        and dia='mie' 
        and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Mie__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='mie' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Mie__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ---------------------------granja----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='mie' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Mie__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='mie' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Mie__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id 
        FROM faena 
        where sem='$sem'
        and dia='mie' 
        and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Mie__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='mie' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Mie__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ############################################################## */
/* --------------------------JUEVES------------------------------ */
/* ############################################################## */
        
/* ---------------------------tipo------------------------------- */ 
/* -------------------------------------------------------------- */       
        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Jue__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Jue__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id 
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='3' ORDER BY Id DESC";

        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Jue__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Jue__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* -------------------------proceso----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Jue__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Jue__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id 
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Jue__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='jue'
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Jue__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ---------------------------granja----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Jue__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Jue__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id 
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Jue__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='jue' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Jue__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ############################################################## */
/* --------------------------VIERNES----------------------------- */
/* ############################################################## */
        
/* ---------------------------tipo------------------------------- */ 
/* -------------------------------------------------------------- */       
        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Vie__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Vie__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id 
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='3' ORDER BY Id DESC";

        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Vie__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='vie'
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Vie__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* -------------------------proceso----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Jue__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Vie__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id 
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Vie__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='vie'
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Vie__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ---------------------------granja----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Vie__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Vie__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id 
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Vie__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='vie' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Vie__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ############################################################## */
/* --------------------------SABADO------------------------------ */
/* ############################################################## */
        
/* ---------------------------tipo------------------------------- */ 
/* -------------------------------------------------------------- */       
        
        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Sab__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Sab__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id 
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='3' ORDER BY Id DESC";

        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Sab__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT tipo, Id
        FROM faena 
        where sem='$sem'
            and dia='sab'
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Sab__tipo=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* -------------------------proceso----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Sab__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Sab__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id 
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Sab__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT proceso, Id
        FROM faena 
        where sem='$sem'
            and dia='sab'
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Sab__proceso=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

/* ---------------------------granja----------------------------- */
/* -------------------------------------------------------------- */ 

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='1' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L1Sab__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='2' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L2Sab__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id 
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='3' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L3Sab__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();

        $query="SELECT granja, Id
        FROM faena 
        where sem='$sem'
            and dia='sab' 
            and lote='4' ORDER BY Id DESC";
        $resultado=$base->prepare($query);
        $resultado->execute();     
        $L4Sab__granja=$resultado->fetch(PDO::FETCH_ASSOC);
        $resultado->closeCursor();



        ?>
        <input type="button" value="Volver" onClick="history.go(-1);"></td>
        <table class="table table__font">
            <thead>
                <tr class="table__font">
                    <th class="table__font" scope="col">Sem:</th>
                    <th scope="col">LOTE 1</th>
                    <th scope="col">LOTE 2</th>
                    <th scope="col">LOTE 3</th>
                    <th scope="col">LOTE 4</th>
                    <th scope="col">COCIDO</th>
                    <th scope="col">EMBARQUES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">LUN</th>
                    <td><?php print_r ($L1Lun__tipo["tipo"])?></td>
                    <td><?php print_r ($L2Lun__tipo["tipo"])?></td>
                    <td><?php print_r ($L3Lun__tipo["tipo"])?></td>
                    <td><?php print_r ($L4Lun__tipo["tipo"])?></td>
                    <td><?php print_r ($ProLun__cocido["tipo"])?></td>
                    <td><?php print_r ($ProLun__embarque["tipo"])?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Lun__proceso["proceso"])?></td>
                    <td><?php print_r ($L2Lun__proceso["proceso"])?></td>
                    <td><?php print_r ($L3Lun__proceso["proceso"])?></td>
                    <td><?php print_r ($L4Lun__proceso["proceso"])?></td>
                    <td><?php print_r ($OpLun__cocido["proceso"])?></td>
                    <td><?php print_r ($OpLun__embarque["proceso"])?></td>               
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Lun__granja["granja"])?></td>
                    <td><?php print_r ($L2Lun__granja["granja"])?></td>
                    <td><?php print_r ($L3Lun__granja["granja"])?></td>
                    <td><?php print_r ($L4Lun__granja["granja"])?></td>
                    <td><?php print_r ($ExtLun__cocido["granja"])?></td>
                    <td><?php print_r ($ExtLun__embarque["granja"])?></td> 
                </tr>
                <tr>
                    <th scope="row">MAR</th>
                    <td><?php print_r ($L1Mar__tipo["tipo"])?></td>
                    <td><?php print_r ($L2Mar__tipo["tipo"])?></td>
                    <td><?php print_r ($L3Mar__tipo["tipo"])?></td>
                    <td><?php print_r ($L4Mar__tipo["tipo"])?></td>
                    <td><?php print_r ($ProMar__cocido["tipo"])?></td>
                    <td><?php print_r ($ProMar__embarque["tipo"])?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Mar__proceso["proceso"])?></td>
                    <td><?php print_r ($L2Mar__proceso["proceso"])?></td>
                    <td><?php print_r ($L3Mar__proceso["proceso"])?></td>
                    <td><?php print_r ($L4Mar__proceso["proceso"])?></td>
                    <td><?php print_r ($OpMar__cocido["proceso"])?></td>
                    <td><?php print_r ($OpMar__embarque["proceso"])?></td>               
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Mar__granja["granja"])?></td>
                    <td><?php print_r ($L2Mar__granja["granja"])?></td>
                    <td><?php print_r ($L3Mar__granja["granja"])?></td>
                    <td><?php print_r ($L4Mar__granja["granja"])?></td>
                    <td><?php print_r ($ExtMar__cocido["granja"])?></td>
                    <td><?php print_r ($ExtMar__embarque["granja"])?></td> 
                </tr>
                <tr>
                    <th scope="row">MIE</th>
                    <td><?php print_r ($L1Mie__tipo["tipo"])?></td>
                    <td><?php print_r ($L2Mie__tipo["tipo"])?></td>
                    <td><?php print_r ($L3Mie__tipo["tipo"])?></td>
                    <td><?php print_r ($L4Mie__tipo["tipo"])?></td>
                    <td><?php print_r ($ProMie__cocido["tipo"])?></td>
                    <td><?php print_r ($ProMie__embarque["tipo"])?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Mie__proceso["proceso"])?></td>
                    <td><?php print_r ($L2Mie__proceso["proceso"])?></td>
                    <td><?php print_r ($L3Mie__proceso["proceso"])?></td>
                    <td><?php print_r ($L4Mie__proceso["proceso"])?></td>
                    <td><?php print_r ($OpMie__cocido["proceso"])?></td>
                    <td><?php print_r ($OpMie__embarque["proceso"])?></td>               
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Mie__granja["granja"])?></td>
                    <td><?php print_r ($L2Mie__granja["granja"])?></td>
                    <td><?php print_r ($L3Mie__granja["granja"])?></td>
                    <td><?php print_r ($L4Mie__granja["granja"])?></td>
                    <td><?php print_r ($ExtMie__cocido["granja"])?></td>
                    <td><?php print_r ($ExtMie__embarque["granja"])?></td> 
                </tr>
                <tr>
                    <th scope="row">JUE</th>
                    <td><?php print_r ($L1Jue__tipo["tipo"])?></td>
                    <td><?php print_r ($L2Jue__tipo["tipo"])?></td>
                    <td><?php print_r ($L3Jue__tipo["tipo"])?></td>
                    <td><?php print_r ($L4Jue__tipo["tipo"])?></td>
                    <td><?php print_r ($ProJue__cocido["tipo"])?></td>
                    <td><?php print_r ($ProJue__embarque["tipo"])?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Jue__proceso["proceso"])?></td>
                    <td><?php print_r ($L2Jue__proceso["proceso"])?></td>
                    <td><?php print_r ($L3Jue__proceso["proceso"])?></td>
                    <td><?php print_r ($L4Jue__proceso["proceso"])?></td>
                    <td><?php print_r ($OpJue__cocido["proceso"])?></td>
                    <td><?php print_r ($OpJue__embarque["proceso"])?></td>               
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Jue__granja["granja"])?></td>
                    <td><?php print_r ($L2Jue__granja["granja"])?></td>
                    <td><?php print_r ($L3Jue__granja["granja"])?></td>
                    <td><?php print_r ($L4Jue__granja["granja"])?></td>
                    <td><?php print_r ($ExtJue__cocido["granja"])?></td>
                    <td><?php print_r ($ExtJue__embarque["granja"])?></td> 
                </tr>
                <tr>
                    <th scope="row">VIE</th>
                    <td><?php print_r ($L1Vie__tipo["tipo"])?></td>
                    <td><?php print_r ($L2Vie__tipo["tipo"])?></td>
                    <td><?php print_r ($L3Vie__tipo["tipo"])?></td>
                    <td><?php print_r ($L4Vie__tipo["tipo"])?></td>
                    <td><?php print_r ($ProVie__cocido["tipo"])?></td>
                    <td><?php print_r ($ProVie__embarque["tipo"])?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Vie__proceso["proceso"])?></td>
                    <td><?php print_r ($L2Vie__proceso["proceso"])?></td>
                    <td><?php print_r ($L3Vie__proceso["proceso"])?></td>
                    <td><?php print_r ($L4Vie__proceso["proceso"])?></td>
                    <td><?php print_r ($OpVie__cocido["proceso"])?></td>
                    <td><?php print_r ($OpVie__embarque["proceso"])?></td>               
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Vie__granja["granja"])?></td>
                    <td><?php print_r ($L2Vie__granja["granja"])?></td>
                    <td><?php print_r ($L3Vie__granja["granja"])?></td>
                    <td><?php print_r ($L4Vie__granja["granja"])?></td>
                    <td><?php print_r ($ExtVie__cocido["granja"])?></td>
                    <td><?php print_r ($ExtVie__embarque["granja"])?></td> 
                </tr>
                <tr>
                    <th scope="row">SAB</th>
                    <td><?php print_r ($L1Sab__tipo["tipo"])?></td>
                    <td><?php print_r ($L2Sab__tipo["tipo"])?></td>
                    <td><?php print_r ($L3Sab__tipo["tipo"])?></td>
                    <td><?php print_r ($L4Sab__tipo["tipo"])?></td>
                    <td><?php print_r ($ProSab__cocido["tipo"])?></td>
                    <td><?php print_r ($ProSab__embarque["tipo"])?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Sab__proceso["proceso"])?></td>
                    <td><?php print_r ($L2Sab__proceso["proceso"])?></td>
                    <td><?php print_r ($L3Sab__proceso["proceso"])?></td>
                    <td><?php print_r ($L4Sab__proceso["proceso"])?></td>
                    <td><?php print_r ($OpSab__cocido["proceso"])?></td>
                    <td><?php print_r ($OpSab__embarque["proceso"])?></td>               
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php print_r ($L1Sab__granja["granja"])?></td>
                    <td><?php print_r ($L2Sab__granja["granja"])?></td>
                    <td><?php print_r ($L3Sab__granja["granja"])?></td>
                    <td><?php print_r ($L4Sab__granja["granja"])?></td>
                    <td><?php print_r ($ExtSab__cocido["granja"])?></td>
                    <td><?php print_r ($ExtSab__embarque["granja"])?></td> 
                </tr>
            </tbody>
        </table>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>