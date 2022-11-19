<?php

    include("conexion2.php");
    
    $semana=substr(($_GET['semana']),-2);    

    echo $semana;

    $lun=($_GET['lun']);
    $mar=($_GET['mar']);
    $mie=($_GET['mie']);
    $jue=($_GET['jue']);
    $vie=($_GET['vie']);
    $sab=($_GET['sab']);

    $L1Lun__tipo=strtoupper($_GET['L1Lun__tipo']);
    $L2Lun__tipo=strtoupper($_GET['L2Lun__tipo']);
    $L3Lun__tipo=strtoupper($_GET['L3Lun__tipo']);
    $L4Lun__tipo=strtoupper($_GET['L4Lun__tipo']);
    $L5Lun__tipo=strtoupper($_GET['L5Lun__tipo']);
    $L6Lun__tipo=strtoupper($_GET['L6Lun__tipo']);
    
    $ProLun__cocido=strtoupper($_GET['ProLun__cocido']);
    $ProLun__embarque=strtoupper($_GET['ProLun__embarque']);

    $L1Lun__proceso=strtoupper($_GET['L1Lun__proceso']);
    $L2Lun__proceso=strtoupper($_GET['L2Lun__proceso']);
    $L3Lun__proceso=strtoupper($_GET['L3Lun__proceso']);
    $L4Lun__proceso=strtoupper($_GET['L4Lun__proceso']);
    $L5Lun__proceso=strtoupper($_GET['L5Lun__proceso']);
    $L6Lun__proceso=strtoupper($_GET['L6Lun__proceso']);
    
    $OpeLun__cocido=strtoupper($_GET['OpeLun__cocido']);
    $OpeLun__embarque=strtoupper($_GET['OpeLun__embarque']);

    $L1Lun__granja=strtoupper($_GET['L1Lun__granja']);
    $L2Lun__granja=strtoupper($_GET['L2Lun__granja']);
    $L3Lun__granja=strtoupper($_GET['L3Lun__granja']);
    $L4Lun__granja=strtoupper($_GET['L4Lun__granja']);
    $L5Lun__granja=strtoupper($_GET['L5Lun__granja']);
    $L6Lun__granja=strtoupper($_GET['L6Lun__granja']);
    
    $ExtLun__cocido=strtoupper($_GET['ExtLun__cocido']);
    $ExtLun__embarque=strtoupper($_GET['ExtLun__embarque']);

    $L1Lun__cantidad=strtoupper($_GET['L1Lun__cantidad']);
    if ($L1Lun__cantidad == null){
        $L1Lun__cantidad = 0;
    }

    $L2Lun__cantidad=strtoupper($_GET['L2Lun__cantidad']);
    if ($L2Lun__cantidad == null){
        $L2Lun__cantidad = 0;
    }

    $L3Lun__cantidad=strtoupper($_GET['L3Lun__cantidad']);
    if ($L3Lun__cantidad == null){
        $L3Lun__cantidad = 0;
    }

    $L4Lun__cantidad=strtoupper($_GET['L4Lun__cantidad']);
    if ($L4Lun__cantidad == null){
        $L4Lun__cantidad = 0;
    }

    $L5Lun__cantidad=strtoupper($_GET['L4Lun__cantidad']);
    if ($L5Lun__cantidad == null){
        $L5Lun__cantidad = 0;
    }
    
    $L6Lun__cantidad=strtoupper($_GET['L4Lun__cantidad']);
    if ($L6Lun__cantidad == null){
        $L6Lun__cantidad = 0;
    }

    $ExtLun__cocido2=strtoupper($_GET['ExtLun__cocido2']);
    $ExtLun__embarque2=strtoupper($_GET['ExtLun__embarque2']);

    $L1Mar__tipo=strtoupper($_GET['L1Mar__tipo']);
    $L2Mar__tipo=strtoupper($_GET['L2Mar__tipo']);
    $L3Mar__tipo=strtoupper($_GET['L3Mar__tipo']);
    $L4Mar__tipo=strtoupper($_GET['L4Mar__tipo']);
    $L5Mar__tipo=strtoupper($_GET['L5Mar__tipo']);
    $L6Mar__tipo=strtoupper($_GET['L6Mar__tipo']);
    
    $ProMar__cocido=strtoupper($_GET['ProMar__cocido']);
    $ProMar__embarque=strtoupper($_GET['ProMar__embarque']);
    
    $L1Mar__proceso=strtoupper($_GET['L1Mar__proceso']);
    $L2Mar__proceso=strtoupper($_GET['L2Mar__proceso']);
    $L3Mar__proceso=strtoupper($_GET['L3Mar__proceso']);
    $L4Mar__proceso=strtoupper($_GET['L4Mar__proceso']);
    $L5Mar__proceso=strtoupper($_GET['L5Mar__proceso']);
    $L6Mar__proceso=strtoupper($_GET['L6Mar__proceso']);
    
    $OpeMar__cocido=strtoupper($_GET['OpeMar__cocido']);
    $OpeMar__embarque=strtoupper($_GET['OpeMar__embarque']);
    
    $L1Mar__granja=strtoupper($_GET['L1Mar__granja']);
    $L2Mar__granja=strtoupper($_GET['L2Mar__granja']);
    $L3Mar__granja=strtoupper($_GET['L3Mar__granja']);
    $L4Mar__granja=strtoupper($_GET['L4Mar__granja']);
    $L5Mar__granja=strtoupper($_GET['L5Mar__granja']);
    $L6Mar__granja=strtoupper($_GET['L6Mar__granja']);

    $ExtMar__cocido=strtoupper($_GET['ExtMar__cocido']);
    $ExtMar__embarque=strtoupper($_GET['ExtMar__embarque']);

    $L1Mar__cantidad=strtoupper($_GET['L1Mar__cantidad']);
    if ($L1Mar__cantidad == null){
        $L1Mar__cantidad = 0;
    }

    $L2Mar__cantidad=strtoupper($_GET['L2Mar__cantidad']);
    if ($L2Mar__cantidad == null){
        $L2Mar__cantidad = 0;
    }

    $L3Mar__cantidad=strtoupper($_GET['L3Mar__cantidad']);
    if ($L3Mar__cantidad == null){
        $L3Mar__cantidad = 0;
    }

    $L4Mar__cantidad=strtoupper($_GET['L4Mar__cantidad']);
    if ($L4Mar__cantidad == null){
        $L4Mar__cantidad = 0;
    }

    $L5Mar__cantidad=strtoupper($_GET['L5Mar__cantidad']);
    if ($L5Mar__cantidad == null){
        $L5Mar__cantidad = 0;
    }

    $L6Mar__cantidad=strtoupper($_GET['L6Mar__cantidad']);
    if ($L6Mar__cantidad == null){
        $L6Mar__cantidad = 0;
    }

    $ExtMar__cocido2=strtoupper($_GET['ExtMar__cocido2']);
    $ExtMar__embarque2=strtoupper($_GET['ExtMar__embarque2']);

    $L1Mie__tipo=strtoupper($_GET['L1Mie__tipo']);
    $L2Mie__tipo=strtoupper($_GET['L2Mie__tipo']);
    $L3Mie__tipo=strtoupper($_GET['L3Mie__tipo']);
    $L4Mie__tipo=strtoupper($_GET['L4Mie__tipo']);
    $L5Mie__tipo=strtoupper($_GET['L5Mie__tipo']);
    $L6Mie__tipo=strtoupper($_GET['L6Mie__tipo']);
    
    $ProMie__cocido=strtoupper($_GET['ProMie__cocido']);
    $ProMie__embarque=strtoupper($_GET['ProMie__embarque']);
    
    $L1Mie__proceso=strtoupper($_GET['L1Mie__proceso']);
    $L2Mie__proceso=strtoupper($_GET['L2Mie__proceso']);
    $L3Mie__proceso=strtoupper($_GET['L3Mie__proceso']);
    $L4Mie__proceso=strtoupper($_GET['L4Mie__proceso']);
    $L5Mie__proceso=strtoupper($_GET['L5Mie__proceso']);
    $L6Mie__proceso=strtoupper($_GET['L6Mie__proceso']);
    
    $OpeMie__cocido=strtoupper($_GET['OpeMie__cocido']);
    $OpeMie__embarque=strtoupper($_GET['OpeMie__embarque']);
    
    $L1Mie__granja=strtoupper($_GET['L1Mie__granja']);
    $L2Mie__granja=strtoupper($_GET['L2Mie__granja']);
    $L3Mie__granja=strtoupper($_GET['L3Mie__granja']);
    $L4Mie__granja=strtoupper($_GET['L4Mie__granja']);
    $L5Mie__granja=strtoupper($_GET['L5Mie__granja']);
    $L6Mie__granja=strtoupper($_GET['L6Mie__granja']);
    
    $ExtMie__cocido=strtoupper($_GET['ExtMie__cocido']);
    $ExtMie__embarque=strtoupper($_GET['ExtMie__embarque']);
    
    $L1Mie__cantidad=strtoupper($_GET['L1Mie__cantidad']);
    if ($L1Mie__cantidad == null){
        $L1Mie__cantidad = 0;
    }

    $L2Mie__cantidad=strtoupper($_GET['L2Mie__cantidad']);
    if ($L2Mie__cantidad == null){
        $L2Mie__cantidad = 0;
    }

    $L3Mie__cantidad=strtoupper($_GET['L3Mie__cantidad']);
    if ($L3Mie__cantidad == null){
        $L3Mie__cantidad = 0;
    }

    $L4Mie__cantidad=strtoupper($_GET['L4Mie__cantidad']);
    if ($L4Mie__cantidad == null){
        $L4Mie__cantidad = 0;
    }

    $L5Mie__cantidad=strtoupper($_GET['L5Mie__cantidad']);
    if ($L5Mie__cantidad == null){
        $L5Mie__cantidad = 0;
    }

    $L6Mie__cantidad=strtoupper($_GET['L6Mie__cantidad']);
    if ($L6Mie__cantidad == null){
        $L6Mie__cantidad = 0;
    }

    $ExtMie__cocido2=strtoupper($_GET['ExtMie__cocido2']);
    $ExtMie__embarque2=strtoupper($_GET['ExtMie__embarque2']);

    $L1Jue__tipo=strtoupper($_GET['L1Jue__tipo']);
    $L2Jue__tipo=strtoupper($_GET['L2Jue__tipo']);
    $L3Jue__tipo=strtoupper($_GET['L3Jue__tipo']);
    $L4Jue__tipo=strtoupper($_GET['L4Jue__tipo']);
    $L5Jue__tipo=strtoupper($_GET['L5Jue__tipo']);
    $L6Jue__tipo=strtoupper($_GET['L6Jue__tipo']);
    
    $ProJue__cocido=strtoupper($_GET['ProJue__cocido']);
    $ProJue__embarque=strtoupper($_GET['ProJue__embarque']);
    
    $L1Jue__proceso=strtoupper($_GET['L1Jue__proceso']);
    $L2Jue__proceso=strtoupper($_GET['L2Jue__proceso']);
    $L3Jue__proceso=strtoupper($_GET['L3Jue__proceso']);
    $L4Jue__proceso=strtoupper($_GET['L4Jue__proceso']);
    $L5Jue__proceso=strtoupper($_GET['L5Jue__proceso']);
    $L6Jue__proceso=strtoupper($_GET['L6Jue__proceso']);
    
    $OpeJue__cocido=strtoupper($_GET['OpeJue__cocido']);
    $OpeJue__embarque=strtoupper($_GET['OpeJue__embarque']);
    
    $L1Jue__granja=strtoupper($_GET['L1Jue__granja']);
    $L2Jue__granja=strtoupper($_GET['L2Jue__granja']);
    $L3Jue__granja=strtoupper($_GET['L3Jue__granja']);
    $L4Jue__granja=strtoupper($_GET['L4Jue__granja']);
    $L5Jue__granja=strtoupper($_GET['L5Jue__granja']);
    $L6Jue__granja=strtoupper($_GET['L6Jue__granja']);
    
    $ExtJue__cocido=strtoupper($_GET['ExtJue__cocido']);
    $ExtJue__embarque=strtoupper($_GET['ExtJue__embarque']);
    
    $L1Jue__cantidad=strtoupper($_GET['L1Jue__cantidad']);
    if ($L1Jue__cantidad == null){
        $L1Jue__cantidad = 0;
    }
    $L2Jue__cantidad=strtoupper($_GET['L2Jue__cantidad']);
    if ($L2Jue__cantidad == null){
        $L2Jue__cantidad = 0;
    }
    $L3Jue__cantidad=strtoupper($_GET['L3Jue__cantidad']);
    if ($L3Jue__cantidad == null){
        $L3Jue__cantidad = 0;
    }
    $L4Jue__cantidad=strtoupper($_GET['L4Jue__cantidad']);
    if ($L4Jue__cantidad == null){
        $L4Jue__cantidad = 0;
    }
    $L5Jue__cantidad=strtoupper($_GET['L5Jue__cantidad']);
    if ($L5Jue__cantidad == null){
        $L5Jue__cantidad = 0;
    }
    $L6Jue__cantidad=strtoupper($_GET['L6Jue__cantidad']);
    if ($L6Jue__cantidad == null){
        $L6Jue__cantidad = 0;
    }
    
    $ExtJue__cocido2=strtoupper($_GET['ExtJue__cocido2']);
    $ExtJue__embarque2=strtoupper($_GET['ExtJue__embarque2']);

    $L1Vie__tipo=strtoupper($_GET['L1Vie__tipo']);
    $L2Vie__tipo=strtoupper($_GET['L2Vie__tipo']);
    $L3Vie__tipo=strtoupper($_GET['L3Vie__tipo']);
    $L4Vie__tipo=strtoupper($_GET['L4Vie__tipo']);
    $L5Vie__tipo=strtoupper($_GET['L5Vie__tipo']);
    $L6Vie__tipo=strtoupper($_GET['L6Vie__tipo']);
    
    $ProVie__cocido=strtoupper($_GET['ProVie__cocido']);
    $ProVie__embarque=strtoupper($_GET['ProVie__embarque']);
    
    $L1Vie__proceso=strtoupper($_GET['L1Vie__proceso']);
    $L2Vie__proceso=strtoupper($_GET['L2Vie__proceso']);
    $L3Vie__proceso=strtoupper($_GET['L3Vie__proceso']);
    $L4Vie__proceso=strtoupper($_GET['L4Vie__proceso']);
    $L5Vie__proceso=strtoupper($_GET['L5Vie__proceso']);
    $L6Vie__proceso=strtoupper($_GET['L6Vie__proceso']);
    
    $OpeVie__cocido=strtoupper($_GET['OpeVie__cocido']);
    $OpeVie__embarque=strtoupper($_GET['OpeVie__embarque']);
    
    $L1Vie__granja=strtoupper($_GET['L1Vie__granja']);
    $L2Vie__granja=strtoupper($_GET['L2Vie__granja']);
    $L3Vie__granja=strtoupper($_GET['L3Vie__granja']);
    $L4Vie__granja=strtoupper($_GET['L4Vie__granja']);
    $L5Vie__granja=strtoupper($_GET['L5Vie__granja']);
    $L6Vie__granja=strtoupper($_GET['L6Vie__granja']);
    
    $ExtVie__cocido=strtoupper($_GET['ExtVie__cocido']);
    $ExtVie__embarque=strtoupper($_GET['ExtVie__embarque']);
    
    $L1Vie__cantidad=strtoupper($_GET['L1Vie__cantidad']);
    if ($L1Vie__cantidad == null){
        $L1Vie__cantidad = 0;
    }

    $L2Vie__cantidad=strtoupper($_GET['L2Vie__cantidad']);
    if ($L2Vie__cantidad == null){
        $L2Vie__cantidad = 0;
    }

    $L3Vie__cantidad=strtoupper($_GET['L3Vie__cantidad']);
    if ($L3Vie__cantidad == null){
        $L3Vie__cantidad = 0;
    }

    $L4Vie__cantidad=strtoupper($_GET['L4Vie__cantidad']);
    if ($L4Vie__cantidad == null){
        $L4Vie__cantidad = 0;
    }

    $L5Vie__cantidad=strtoupper($_GET['L5Vie__cantidad']);
    if ($L5Vie__cantidad == null){
        $L5Vie__cantidad = 0;
    }

    $L6Vie__cantidad=strtoupper($_GET['L6Vie__cantidad']);
    if ($L6Vie__cantidad == null){
        $L6Vie__cantidad = 0;
    }

    $ExtVie__cocido2=strtoupper($_GET['ExtVie__cocido2']);
    $ExtVie__embarque2=strtoupper($_GET['ExtVie__embarque2']);

    $L1Sab__tipo=strtoupper($_GET['L1Sab__tipo']);
    $L2Sab__tipo=strtoupper($_GET['L2Sab__tipo']);
    $L3Sab__tipo=strtoupper($_GET['L3Sab__tipo']);
    $L4Sab__tipo=strtoupper($_GET['L4Sab__tipo']);
    $L5Sab__tipo=strtoupper($_GET['L5Sab__tipo']);
    $L6Sab__tipo=strtoupper($_GET['L6Sab__tipo']);
    
    $ProSab__cocido=strtoupper($_GET['ProSab__cocido']);
    $ProSab__embarque=strtoupper($_GET['ProSab__embarque']);
    
    $L1Sab__proceso=strtoupper($_GET['L1Sab__proceso']);
    $L2Sab__proceso=strtoupper($_GET['L2Sab__proceso']);
    $L3Sab__proceso=strtoupper($_GET['L3Sab__proceso']);
    $L4Sab__proceso=strtoupper($_GET['L4Sab__proceso']);
    $L5Sab__proceso=strtoupper($_GET['L5Sab__proceso']);
    $L6Sab__proceso=strtoupper($_GET['L6Sab__proceso']);
    
    $OpeSab__cocido=strtoupper($_GET['OpeSab__cocido']);
    $OpeSab__embarque=strtoupper($_GET['OpeSab__embarque']);
    
    $L1Sab__granja=strtoupper($_GET['L1Sab__granja']);
    $L2Sab__granja=strtoupper($_GET['L2Sab__granja']);
    $L3Sab__granja=strtoupper($_GET['L3Sab__granja']);
    $L4Sab__granja=strtoupper($_GET['L4Sab__granja']);
    $L5Sab__granja=strtoupper($_GET['L5Sab__granja']);
    $L6Sab__granja=strtoupper($_GET['L6Sab__granja']);
    
    $ExtSab__cocido=strtoupper($_GET['ExtSab__cocido']);
    $ExtSab__embarque=strtoupper($_GET['ExtSab__embarque']);
    
    $L1Sab__cantidad=strtoupper($_GET['L1Sab__cantidad']);
    if ($L1Sab__cantidad == null){
        $L1Sab__cantidad = 0;
    }

    $L2Sab__cantidad=strtoupper($_GET['L2Sab__cantidad']);
    if ($L2Sab__cantidad == null){
        $L2Sab__cantidad = 0;
    }

    $L3Sab__cantidad=strtoupper($_GET['L3Sab__cantidad']);
    if ($L3Sab__cantidad == null){
        $L3Sab__cantidad = 0;
    }

    $L4Sab__cantidad=strtoupper($_GET['L4Sab__cantidad']);
    if ($L4Sab__cantidad == null){
        $L4Sab__cantidad = 0;
    }

    $L5Sab__cantidad=strtoupper($_GET['L5Sab__cantidad']);
    if ($L5Sab__cantidad == null){
        $L5Sab__cantidad = 0;
    }

    $L6Sab__cantidad=strtoupper($_GET['L6Sab__cantidad']);
    if ($L6Sab__cantidad == null){
        $L6Sab__cantidad = 0;
    }
    
    $ExtSab__cocido2=strtoupper($_GET['ExtSab__cocido2']);
    $ExtSab__embarque2=strtoupper($_GET['ExtSab__embarque2']);


/* ################################################## LUNES ################################################### */

    $queryFaenaL1Lun="UPDATE faena set tipo='$L1Lun__tipo', proceso='$L1Lun__proceso', granja='$L1Lun__granja', cantidad='$L1Lun__cantidad'
                        WHERE sem='$semana'
                            and dia='lun'
                            and fecha='$lun'
                            and lote='1'";

    $resultadoFaenaL1Lun=$base->prepare($queryFaenaL1Lun);     
    $resultadoFaenaL1Lun->execute(array());
    $resultadoFaenaL1Lun->closeCursor();

    $queryFaenaL2Lun="UPDATE faena set tipo='$L2Lun__tipo', proceso='$L2Lun__proceso', granja='$L2Lun__granja', cantidad='$L2Lun__cantidad'
                        WHERE sem='$semana'
                            and dia='lun'
                            and fecha='$lun'
                            and lote='2'";

    $resultadoFaenaL2Lun=$base->prepare($queryFaenaL2Lun);     
    $resultadoFaenaL2Lun->execute(array());
    $resultadoFaenaL2Lun->closeCursor();

    $queryFaenaL3Lun="UPDATE faena set tipo='$L3Lun__tipo', proceso='$L3Lun__proceso', granja='$L3Lun__granja', cantidad='$L3Lun__cantidad'
                        WHERE sem='$semana'
                            and dia='lun'
                            and fecha='$lun'
                            and lote='3'";

    $resultadoFaenaL3Lun=$base->prepare($queryFaenaL3Lun);     
    $resultadoFaenaL3Lun->execute(array());
    $resultadoFaenaL3Lun->closeCursor();

    $queryFaenaL4Lun="UPDATE faena set tipo='$L4Lun__tipo', proceso='$L4Lun__proceso', granja='$L4Lun__granja', cantidad='$L4Lun__cantidad'
                        WHERE sem='$semana'
                            and dia='lun'
                            and fecha='$lun'
                            and lote='4'";

    $resultadoFaenaL4Lun=$base->prepare($queryFaenaL4Lun);     
    $resultadoFaenaL4Lun->execute(array());
    $resultadoFaenaL4Lun->closeCursor();

    $queryFaenaL5Lun="UPDATE faena set tipo='$L5Lun__tipo', proceso='$L5Lun__proceso', granja='$L5Lun__granja', cantidad='$L5Lun__cantidad'
                        WHERE sem='$semana'
                            and dia='lun'
                            and fecha='$lun'
                            and lote='5'";

    $resultadoFaenaL5Lun=$base->prepare($queryFaenaL5Lun);     
    $resultadoFaenaL5Lun->execute(array());
    $resultadoFaenaL5Lun->closeCursor();

    $queryFaenaL6Lun="UPDATE faena set tipo='$L6Lun__tipo', proceso='$L6Lun__proceso', granja='$L6Lun__granja', cantidad='$L6Lun__cantidad'
                        WHERE sem='$semana'
                            and dia='lun'
                            and fecha='$lun'
                            and lote='6'";

    $resultadoFaenaL6Lun=$base->prepare($queryFaenaL6Lun);     
    $resultadoFaenaL6Lun->execute(array());
    $resultadoFaenaL6Lun->closeCursor();

    $queryCocidoLun="UPDATE cocido set pro_cocido='$ProLun__cocido', ope_cocido='$OpeLun__cocido', ext_cocido='$ExtLun__cocido', ext_cocido2='$ExtLun__cocido2'
                        WHERE sem='$semana'
                            and dia='lun'
                            and fecha='$lun'";

    $resultadoCocidoLun=$base->prepare($queryCocidoLun);     
    $resultadoCocidoLun->execute(array());
    $resultadoCocidoLun->closeCursor();

    $queryEmbarqueLun="UPDATE embarque set pro_embarque='$ProLun__embarque', ope_embarque='$OpeLun__embarque', ext_embarque='$ExtLun__embarque', ext_embarque2='$ExtLun__embarque2'
                        WHERE sem='$semana'
                            and dia='lun'
                            and fecha='$lun'";

    $resultadoEmbarqueLun=$base->prepare($queryEmbarqueLun);
    $resultadoEmbarqueLun->execute(array());
    $resultadoEmbarqueLun->closeCursor();

/* ################################################## MARTES ################################################### */


    $queryFaenaL1Mar="UPDATE faena set tipo='$L1Mar__tipo', proceso='$L1Mar__proceso', granja='$L1Mar__granja', cantidad='$L1Mar__cantidad'
                        WHERE sem='$semana'
                            and dia='mar'
                            and fecha='$mar'
                            and lote='1'";

    $resultadoFaenaL1Mar=$base->prepare($queryFaenaL1Mar);     
    $resultadoFaenaL1Mar->execute(array());
    $resultadoFaenaL1Mar->closeCursor();

    $queryFaenaL2Mar="UPDATE faena set tipo='$L2Mar__tipo', proceso='$L2Mar__proceso', granja='$L2Mar__granja', cantidad='$L2Mar__cantidad'
                        WHERE sem='$semana'
                            and dia='mar'
                            and fecha='$mar'
                            and lote='2'";

    $resultadoFaenaL2Mar=$base->prepare($queryFaenaL2Mar);     
    $resultadoFaenaL2Mar->execute(array());
    $resultadoFaenaL2Mar->closeCursor();

    $queryFaenaL3Mar="UPDATE faena set tipo='$L3Mar__tipo', proceso='$L3Mar__proceso', granja='$L3Mar__granja', cantidad='$L3Mar__cantidad'
                        WHERE sem='$semana'
                            and dia='mar'
                            and fecha='$mar'
                            and lote='3'";

    $resultadoFaenaL3Mar=$base->prepare($queryFaenaL3Mar);     
    $resultadoFaenaL3Mar->execute(array());
    $resultadoFaenaL3Mar->closeCursor();

    $queryFaenaL4Mar="UPDATE faena set tipo='$L4Mar__tipo', proceso='$L4Mar__proceso', granja='$L4Mar__granja', cantidad='$L4Mar__cantidad'
                        WHERE sem='$semana'
                            and dia='mar'
                            and fecha='$mar'
                            and lote='4'";

    $resultadoFaenaL4Mar=$base->prepare($queryFaenaL4Mar);     
    $resultadoFaenaL4Mar->execute(array());
    $resultadoFaenaL4Mar->closeCursor();

    $queryFaenaL5Mar="UPDATE faena set tipo='$L5Mar__tipo', proceso='$L5Mar__proceso', granja='$L5Mar__granja', cantidad='$L5Mar__cantidad'
                        WHERE sem='$semana'
                            and dia='mar'
                            and fecha='$mar'
                            and lote='5'";

    $resultadoFaenaL5Mar=$base->prepare($queryFaenaL5Mar);     
    $resultadoFaenaL5Mar->execute(array());
    $resultadoFaenaL5Mar->closeCursor();

    $queryFaenaL6Mar="UPDATE faena set tipo='$L6Mar__tipo', proceso='$L6Mar__proceso', granja='$L6Mar__granja', cantidad='$L6Mar__cantidad'
                        WHERE sem='$semana'
                            and dia='mar'
                            and fecha='$mar'
                            and lote='6'";

    $resultadoFaenaL6Mar=$base->prepare($queryFaenaL6Mar);     
    $resultadoFaenaL6Mar->execute(array());
    $resultadoFaenaL6Mar->closeCursor();

    $queryCocidoMar="UPDATE cocido set pro_cocido='$ProMar__cocido', ope_cocido='$OpeMar__cocido', ext_cocido='$ExtMar__cocido', ext_cocido2='$ExtMar__cocido2'
                        WHERE sem='$semana'
                            and dia='mar'
                            and fecha='$mar'";

    $resultadoCocidoMar=$base->prepare($queryCocidoMar);     
    $resultadoCocidoMar->execute(array());
    $resultadoCocidoMar->closeCursor();

    $queryEmbarqueMar="UPDATE embarque set pro_embarque='$ProMar__embarque', ope_embarque='$OpeMar__embarque', ext_embarque='$ExtMar__embarque', ext_embarque2='$ExtMar__embarque2'
                        WHERE sem='$semana'
                            and dia='mar'
                            and fecha='$mar'";

    $resultadoEmbarqueMar=$base->prepare($queryEmbarqueMar);     
    $resultadoEmbarqueMar->execute(array());
    $resultadoEmbarqueMar->closeCursor();


/* ################################################## MIERCOLES ################################################### */


    $queryFaenaL1Mie="UPDATE faena set tipo='$L1Mie__tipo', proceso='$L1Mie__proceso', granja='$L1Mie__granja', cantidad='$L1Mie__cantidad'
                        WHERE sem='$semana'
                            and dia='mie'
                            and fecha='$mie'
                            and lote='1'";

    $resultadoFaenaL1Mie=$base->prepare($queryFaenaL1Mie);     
    $resultadoFaenaL1Mie->execute(array());
    $resultadoFaenaL1Mie->closeCursor();

    $queryFaenaL2Mie="UPDATE faena set tipo='$L2Mie__tipo', proceso='$L2Mie__proceso', granja='$L2Mie__granja', cantidad='$L2Mie__cantidad'
                        WHERE sem='$semana'
                            and dia='mie'
                            and fecha='$mie'
                            and lote='2'";

    $resultadoFaenaL2Mie=$base->prepare($queryFaenaL2Mie);     
    $resultadoFaenaL2Mie->execute(array());
    $resultadoFaenaL2Mie->closeCursor();

    $queryFaenaL3Mie="UPDATE faena set tipo='$L3Mie__tipo', proceso='$L3Mie__proceso', granja='$L3Mie__granja', cantidad='$L3Mie__cantidad'
                        WHERE sem='$semana'
                            and dia='mie'
                            and fecha='$mie'
                            and lote='3'";

    $resultadoFaenaL3Mie=$base->prepare($queryFaenaL3Mie);     
    $resultadoFaenaL3Mie->execute(array());
    $resultadoFaenaL3Mie->closeCursor();

    $queryFaenaL4Mie="UPDATE faena set tipo='$L4Mie__tipo', proceso='$L4Mie__proceso', granja='$L4Mie__granja', cantidad='$L4Mie__cantidad'
                        WHERE sem='$semana'
                            and dia='mie'
                            and fecha='$mie'
                            and lote='4'";

    $resultadoFaenaL4Mie=$base->prepare($queryFaenaL4Mie);     
    $resultadoFaenaL4Mie->execute(array());
    $resultadoFaenaL4Mie->closeCursor();

    $queryFaenaL5Mie="UPDATE faena set tipo='$L5Mie__tipo', proceso='$L5Mie__proceso', granja='$L5Mie__granja', cantidad='$L5Mie__cantidad'
                        WHERE sem='$semana'
                            and dia='mie'
                            and fecha='$mie'
                            and lote='5'";

    $resultadoFaenaL5Mie=$base->prepare($queryFaenaL5Mie);     
    $resultadoFaenaL5Mie->execute(array());
    $resultadoFaenaL5Mie->closeCursor();

    $queryFaenaL6Mie="UPDATE faena set tipo='$L6Mie__tipo', proceso='$L6Mie__proceso', granja='$L6Mie__granja', cantidad='$L6Mie__cantidad'
                        WHERE sem='$semana'
                            and dia='mie'
                            and fecha='$mie'
                            and lote='6'";

    $resultadoFaenaL6Mie=$base->prepare($queryFaenaL6Mie);     
    $resultadoFaenaL6Mie->execute(array());
    $resultadoFaenaL6Mie->closeCursor();

    $queryCocidoMie="UPDATE cocido set pro_cocido='$ProMie__cocido', ope_cocido='$OpeMie__cocido', ext_cocido='$ExtMie__cocido', ext_cocido2='$ExtMie__cocido2'
                        WHERE sem='$semana'
                            and dia='mie'
                            and fecha='$mie'";

    $resultadoCocidoMie=$base->prepare($queryCocidoMie);     
    $resultadoCocidoMie->execute(array());
    $resultadoCocidoMie->closeCursor();

    $queryEmbarqueMie="UPDATE embarque set pro_embarque='$ProMie__embarque', ope_embarque='$OpeMie__embarque', ext_embarque='$ExtMie__embarque', ext_embarque2='$ExtMie__embarque2'
                        WHERE sem='$semana'
                            and dia='mie'
                            and fecha='$mie'";

    $resultadoEmbarqueMie=$base->prepare($queryEmbarqueMie);     
    $resultadoEmbarqueMie->execute(array());
    $resultadoEmbarqueMie->closeCursor();


/* ################################################## JUEVES ################################################### */


    $queryFaenaL1Jue="UPDATE faena set tipo='$L1Jue__tipo', proceso='$L1Jue__proceso', granja='$L1Jue__granja', cantidad='$L1Jue__cantidad'
                        WHERE sem='$semana'
                            and dia='jue'
                            and fecha='$jue'
                            and lote='1'";

    $resultadoFaenaL1Jue=$base->prepare($queryFaenaL1Jue);     
    $resultadoFaenaL1Jue->execute(array());
    $resultadoFaenaL1Jue->closeCursor();

    $queryFaenaL2Jue="UPDATE faena set tipo='$L2Jue__tipo', proceso='$L2Jue__proceso', granja='$L2Jue__granja', cantidad='$L2Jue__cantidad'
                        WHERE sem='$semana'
                            and dia='jue'
                            and fecha='$jue'
                            and lote='2'";

    $resultadoFaenaL2Jue=$base->prepare($queryFaenaL2Jue);     
    $resultadoFaenaL2Jue->execute(array());
    $resultadoFaenaL2Jue->closeCursor();

    $queryFaenaL3Jue="UPDATE faena set tipo='$L3Jue__tipo', proceso='$L3Jue__proceso', granja='$L3Jue__granja', cantidad='$L3Jue__cantidad'
                        WHERE sem='$semana'
                            and dia='jue'
                            and fecha='$jue'
                            and lote='3'";

    $resultadoFaenaL3Jue=$base->prepare($queryFaenaL3Jue);     
    $resultadoFaenaL3Jue->execute(array());
    $resultadoFaenaL3Jue->closeCursor();

    $queryFaenaL4Jue="UPDATE faena set tipo='$L4Jue__tipo', proceso='$L4Jue__proceso', granja='$L4Jue__granja', cantidad='$L4Jue__cantidad'
                        WHERE sem='$semana'
                            and dia='jue'
                            and fecha='$jue'
                            and lote='4'";

    $resultadoFaenaL4Jue=$base->prepare($queryFaenaL4Jue);     
    $resultadoFaenaL4Jue->execute(array());
    $resultadoFaenaL4Jue->closeCursor();

    $queryFaenaL5Jue="UPDATE faena set tipo='$L5Jue__tipo', proceso='$L5Jue__proceso', granja='$L5Jue__granja', cantidad='$L5Jue__cantidad'
                        WHERE sem='$semana'
                            and dia='jue'
                            and fecha='$jue'
                            and lote='5'";

    $resultadoFaenaL5Jue=$base->prepare($queryFaenaL5Jue);     
    $resultadoFaenaL5Jue->execute(array());
    $resultadoFaenaL5Jue->closeCursor();

    $queryFaenaL6Jue="UPDATE faena set tipo='$L6Jue__tipo', proceso='$L6Jue__proceso', granja='$L6Jue__granja', cantidad='$L6Jue__cantidad'
                        WHERE sem='$semana'
                            and dia='jue'
                            and fecha='$jue'
                            and lote='6'";

    $resultadoFaenaL6Jue=$base->prepare($queryFaenaL6Jue);     
    $resultadoFaenaL6Jue->execute(array());
    $resultadoFaenaL6Jue->closeCursor();

    $queryCocidoJue="UPDATE cocido set pro_cocido='$ProJue__cocido', ope_cocido='$OpeJue__cocido', ext_cocido='$ExtJue__cocido', ext_cocido2='$ExtJue__cocido2'
                        WHERE sem='$semana'
                            and dia='jue'
                            and fecha='$jue'";

    $resultadoCocidoJue=$base->prepare($queryCocidoJue);     
    $resultadoCocidoJue->execute(array());
    $resultadoCocidoJue->closeCursor();

    $queryEmbarqueJue="UPDATE embarque set pro_embarque='$ProJue__embarque', ope_embarque='$OpeJue__embarque', ext_embarque='$ExtJue__embarque', ext_embarque2='$ExtJue__embarque2'
                        WHERE sem='$semana'
                            and dia='jue'
                            and fecha='$jue'";

    $resultadoEmbarqueJue=$base->prepare($queryEmbarqueJue);     
    $resultadoEmbarqueJue->execute(array());
    $resultadoEmbarqueJue->closeCursor();


/* ################################################## VIERNES ################################################### */


    $queryFaenaL1Vie="UPDATE faena set tipo='$L1Vie__tipo', proceso='$L1Vie__proceso', granja='$L1Vie__granja', cantidad='$L1Vie__cantidad'
                        WHERE sem='$semana'
                            and dia='vie'
                            and fecha='$vie'
                            and lote='1'";

    $resultadoFaenaL1Vie=$base->prepare($queryFaenaL1Vie);     
    $resultadoFaenaL1Vie->execute(array());
    $resultadoFaenaL1Vie->closeCursor();

    $queryFaenaL2Vie="UPDATE faena set tipo='$L2Vie__tipo', proceso='$L2Vie__proceso', granja='$L2Vie__granja', cantidad='$L2Vie__cantidad'
                        WHERE sem='$semana'
                            and dia='vie'
                            and fecha='$vie'
                            and lote='2'";

    $resultadoFaenaL2Vie=$base->prepare($queryFaenaL2Vie);     
    $resultadoFaenaL2Vie->execute(array());
    $resultadoFaenaL2Vie->closeCursor();

    $queryFaenaL3Vie="UPDATE faena set tipo='$L3Vie__tipo', proceso='$L3Vie__proceso', granja='$L3Vie__granja', cantidad='$L3Vie__cantidad'
                        WHERE sem='$semana'
                            and dia='vie'
                            and fecha='$vie'
                            and lote='3'";

    $resultadoFaenaL3Vie=$base->prepare($queryFaenaL3Vie);     
    $resultadoFaenaL3Vie->execute(array());
    $resultadoFaenaL3Vie->closeCursor();

    $queryFaenaL4Vie="UPDATE faena set tipo='$L4Vie__tipo', proceso='$L4Vie__proceso', granja='$L4Vie__granja', cantidad='$L4Vie__cantidad'
                        WHERE sem='$semana'
                            and dia='vie'
                            and fecha='$vie'
                            and lote='4'";

    $resultadoFaenaL4Vie=$base->prepare($queryFaenaL4Vie);     
    $resultadoFaenaL4Vie->execute(array());
    $resultadoFaenaL4Vie->closeCursor();

    $queryFaenaL5Vie="UPDATE faena set tipo='$L5Vie__tipo', proceso='$L5Vie__proceso', granja='$L5Vie__granja', cantidad='$L5Vie__cantidad'
                        WHERE sem='$semana'
                            and dia='vie'
                            and fecha='$vie'
                            and lote='5'";

    $resultadoFaenaL5Vie=$base->prepare($queryFaenaL5Vie);     
    $resultadoFaenaL5Vie->execute(array());
    $resultadoFaenaL5Vie->closeCursor();

    $queryFaenaL6Vie="UPDATE faena set tipo='$L6Vie__tipo', proceso='$L6Vie__proceso', granja='$L6Vie__granja', cantidad='$L6Vie__cantidad'
                        WHERE sem='$semana'
                            and dia='vie'
                            and fecha='$vie'
                            and lote='6'";

    $resultadoFaenaL6Vie=$base->prepare($queryFaenaL6Vie);     
    $resultadoFaenaL6Vie->execute(array());
    $resultadoFaenaL6Vie->closeCursor();

    $queryCocidoVie="UPDATE cocido set pro_cocido='$ProVie__cocido', ope_cocido='$OpeVie__cocido', ext_cocido='$ExtVie__cocido', ext_cocido2='$ExtVie__cocido2'
                        WHERE sem='$semana'
                            and dia='vie'
                            and fecha='$vie'";

    $resultadoCocidoVie=$base->prepare($queryCocidoVie);
    $resultadoCocidoVie->execute(array());
    $resultadoCocidoVie->closeCursor();

    $queryEmbarqueVie="UPDATE embarque set pro_embarque='$ProVie__embarque', ope_embarque='$OpeVie__embarque', ext_embarque='$ExtVie__embarque', ext_embarque2='$ExtVie__embarque2'
                        WHERE sem='$semana'
                            and dia='vie'
                            and fecha='$vie'";

    $resultadoEmbarqueVie=$base->prepare($queryEmbarqueVie);
    $resultadoEmbarqueVie->execute(array());
    $resultadoEmbarqueVie->closeCursor();


/* ################################################## SABADO ################################################### */


    $queryFaenaL1Sab="UPDATE faena set tipo='$L1Sab__tipo', proceso='$L1Sab__proceso', granja='$L1Sab__granja', cantidad='$L1Sab__cantidad'
                        WHERE sem='$semana'
                            and dia='sab'
                            and fecha='$sab'
                            and lote='1'";

    $resultadoFaenaL1Sab=$base->prepare($queryFaenaL1Sab);
    $resultadoFaenaL1Sab->execute(array());
    $resultadoFaenaL1Sab->closeCursor();

    $queryFaenaL2Sab="UPDATE faena set tipo='$L2Sab__tipo', proceso='$L2Sab__proceso', granja='$L2Sab__granja', cantidad='$L2Sab__cantidad'
                        WHERE sem='$semana'
                            and dia='sab'
                            and fecha='$sab'
                            and lote='2'";

    $resultadoFaenaL2Sab=$base->prepare($queryFaenaL2Sab);
    $resultadoFaenaL2Sab->execute(array());
    $resultadoFaenaL2Sab->closeCursor();

    $queryFaenaL3Sab="UPDATE faena set tipo='$L3Sab__tipo', proceso='$L3Sab__proceso', granja='$L3Sab__granja', cantidad='$L3Sab__cantidad'
                        WHERE sem='$semana'
                            and dia='sab'
                            and fecha='$sab'
                            and lote='3'";

    $resultadoFaenaL3Sab=$base->prepare($queryFaenaL3Sab);
    $resultadoFaenaL3Sab->execute(array());
    $resultadoFaenaL3Sab->closeCursor();

    $queryFaenaL4Sab="UPDATE faena set tipo='$L4Sab__tipo', proceso='$L4Sab__proceso', granja='$L4Sab__granja', cantidad='$L4Sab__cantidad'
                        WHERE sem='$semana'
                            and dia='sab'
                            and fecha='$sab'
                            and lote='4'";

    $resultadoFaenaL4Sab=$base->prepare($queryFaenaL4Sab);
    $resultadoFaenaL4Sab->execute(array());
    $resultadoFaenaL4Sab->closeCursor();

    $queryFaenaL5Sab="UPDATE faena set tipo='$L5Sab__tipo', proceso='$L5Sab__proceso', granja='$L5Sab__granja', cantidad='$L5Sab__cantidad'
                        WHERE sem='$semana'
                            and dia='sab'
                            and fecha='$sab'
                            and lote='5'";

    $resultadoFaenaL5Sab=$base->prepare($queryFaenaL5Sab);
    $resultadoFaenaL5Sab->execute(array());
    $resultadoFaenaL5Sab->closeCursor();

    $queryFaenaL6Sab="UPDATE faena set tipo='$L6Sab__tipo', proceso='$L6Sab__proceso', granja='$L6Sab__granja', cantidad='$L6Sab__cantidad'
                        WHERE sem='$semana'
                            and dia='sab'
                            and fecha='$sab'
                            and lote='6'";

    $resultadoFaenaL6Sab=$base->prepare($queryFaenaL6Sab);
    $resultadoFaenaL6Sab->execute(array());
    $resultadoFaenaL6Sab->closeCursor();

    $queryCocidoSab="UPDATE cocido set pro_cocido='$ProSab__cocido', ope_cocido='$OpeSab__cocido', ext_cocido='$ExtSab__cocido', ext_cocido2='$ExtSab__cocido2'
                        WHERE sem='$semana'
                            and dia='sab'
                            and fecha='$sab'";

    $resultadoCocidoSab=$base->prepare($queryCocidoSab);
    $resultadoCocidoSab->execute(array());
    $resultadoCocidoSab->closeCursor();

    $queryEmbarqueSab="UPDATE embarque set pro_embarque='$ProSab__embarque', ope_embarque='$OpeSab__embarque', ext_embarque='$ExtSab__embarque', ext_embarque2='$ExtSab__embarque2'
                        WHERE sem='$semana'
                            and dia='sab'
                            and fecha='$sab'";

    $resultadoEmbarqueSab=$base->prepare($queryEmbarqueSab);     
    $resultadoEmbarqueSab->execute(array());
    $resultadoEmbarqueSab->closeCursor();

    
/*     $queryF="INSERT INTO faena
                (sem, dia, fecha, lote, tipo, proceso, granja) 
            VALUES
                ('$sem','lun','$lun','1','$L1Lun__tipo','$L1Lun__proceso','$L1Lun__granja'),
                ('$sem','lun','$lun','2','$L2Lun__tipo','$L2Lun__proceso','$L2Lun__granja'),
                ('$sem','lun','$lun','3','$L3Lun__tipo','$L3Lun__proceso','$L3Lun__granja'),
                ('$sem','lun','$lun','4','$L4Lun__tipo','$L4Lun__proceso','$L4Lun__granja'),
                ('$sem','lun',5$lun','4','$L4Lun__tipo','$L4Lun__proceso','$L4Lun__granja'),
                            ('6sem','lun','$lun','4','$L4Lun__tipo','$L4Lun__proceso','$L4Lun__granja'),
                ('$sem','mar
                ','$mar','1','$L1Mar__tipo','$L1Mar__proceso','$L1Mar__granja'),
                ('$sem','mar','$mar','2','$L2Mar__tipo','$L2Mar__proceso','$L2Mar__granja'),
                ('$sem','mar','$mar','3','$L3Mar__tipo','$L3Mar__proceso','$L3Mar__granja'),
                ('$sem','mar','$mar','4','$L4Mar__tipo','$L4Mar__proceso','$L4Mar__granja'),

                ('$sem','mie','$mie','1','$L1Mie__tipo','$L1Mie__proceso','$L1Mie__granja'),
                ('$sem','mie','$mie','2','$L2Mie__tipo','$L2Mie__proceso','$L2Mie__granja'),
                ('$sem','mie','$mie','3','$L3Mie__tipo','$L3Mie__proceso','$L3Mie__granja'),
                ('$sem','mie','$mie','4','$L4Mie__tipo','$L4Mie__proceso','$L4Mie__granja'),

                ('$sem','jue','$jue','1','$L1Jue__tipo','$L1Jue__proceso','$L1Jue__granja'),
                ('$sem','jue','$jue','2','$L2Jue__tipo','$L2Jue__proceso','$L2Jue__granja'),
                ('$sem','jue','$jue','3','$L3Jue__tipo','$L3Jue__proceso','$L3Jue__granja'),
                ('$sem','jue','$jue','4','$L4Jue__tipo','$L4Jue__proceso','$L4Jue__granja'),

                ('$sem','vie','$vie','1','$L1Vie__tipo','$L1Vie__proceso','$L1Vie__granja'),
                ('$sem','vie','$vie','2','$L2Vie__tipo','$L2Vie__proceso','$L2Vie__granja'),
                ('$sem','vie','$vie','3','$L3Vie__tipo','$L3Vie__proceso','$L3Vie__granja'),
                ('$sem','vie','$vie','4','$L4Vie__tipo','$L4Vie__proceso','$L4Vie__granja'),

                ('$sem','sab','$sab','1','$L1Sab__tipo','$L1Sab__proceso','$L1Sab__granja'),
                ('$sem','sab','$sab','2','$L2Sab__tipo','$L2Sab__proceso','$L2Sab__granja'),
                ('$sem','sab','$sab','3','$L3Sab__tipo','$L3Sab__proceso','$L3Sab__granja'),
                ('$sem','sab','$sab','4','$L4Sab__tipo','$L4Sab__proceso','$L4Sab__granja')";

    $resultadoF=$base->prepare($queryF);     
    $resultadoF->execute(array());
    $resultadoF->closeCursor();


    $queryC="INSERT INTO cocido
                (sem, dia, fecha, pro_cocido, ope_cocido, ext_cocido)
            VALUES
                ('$sem','lun','$lun','$ProLun__cocido','$OpeLun__cocido','$ExtLun__cocido'),
                ('$sem','mar','$mar','$ProMar__cocido','$OpeMar__cocido','$ExtMar__cocido'),
                ('$sem','mie','$mie','$ProMie__cocido','$OpeMie__cocido','$ExtMie__cocido'),
                ('$sem','jue','$jue','$ProJue__cocido','$OpeJue__cocido','$ExtJue__cocido'),
                ('$sem','vie','$vie','$ProVie__cocido','$OpeVie__cocido','$ExtVie__cocido'),
                ('$sem','sab','$sab','$ProSab__cocido','$OpeSab__cocido','$ExtSab__cocido')";

    $resultadoC=$base->prepare($queryC);     
    $resultadoC->execute(array());
    $resultadoC->closeCursor();

    $queryE="INSERT INTO embarque
                (sem, dia, fecha, pro_embarque, ope_embarque, ext_embarque) 
            VALUES
                ('$sem','lun','$lun','$ProLun__embarque','$OpeLun__embarque','$ExtLun__embarque'),
                ('$sem','mar','$mar','$ProMar__embarque','$OpeMar__embarque','$ExtMar__embarque'),
                ('$sem','mie','$mie','$ProMie__embarque','$OpeMie__embarque','$ExtMie__embarque'),
                ('$sem','jue','$jue','$ProJue__embarque','$OpeJue__embarque','$ExtJue__embarque'),
                ('$sem','vie','$vie','$ProVie__embarque','$OpeVie__embarque','$ExtVie__embarque'),
                ('$sem','sab','$sab','$ProSab__embarque','$OpeSab__embarque','$ExtSab__embarque')";

    $resultadoE=$base->prepare($queryE);     
    $resultadoE->execute(array());
    $resultadoE->closeCursor(); */

    header("Location: mostrar2.php?semana=$semana");

    ?>