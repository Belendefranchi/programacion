<?php

    include("conexion.php");

    $semana=($_POST['sem']);
    $sem=substr($semana,-2);

    $lun=($_POST['lun']);
    $mar=($_POST['mar']);
    $mie=($_POST['mie']);
    $jue=($_POST['jue']);
    $vie=($_POST['vie']);
    $sab=($_POST['sab']);

   /*  echo $lun; */

    $L1Lun__tipo=strtoupper($_POST['L1Lun__tipo']);
    $L2Lun__tipo=strtoupper($_POST['L2Lun__tipo']);
    $L3Lun__tipo=strtoupper($_POST['L3Lun__tipo']);
    $L4Lun__tipo=strtoupper($_POST['L4Lun__tipo']);

    $ProLun__cocido=strtoupper($_POST['ProLun__cocido']);
    $ProLun__embarque=strtoupper($_POST['ProLun__embarque']);

    $L1Lun__proceso=strtoupper($_POST['L1Lun__proceso']);
    $L2Lun__proceso=strtoupper($_POST['L2Lun__proceso']);
    $L3Lun__proceso=strtoupper($_POST['L3Lun__proceso']);
    $L4Lun__proceso=strtoupper($_POST['L4Lun__proceso']);

    $OpeLun__cocido=strtoupper($_POST['OpeLun__cocido']);
    $OpeLun__embarque=strtoupper($_POST['OpeLun__embarque']);

    $L1Lun__granja=strtoupper($_POST['L1Lun__granja']);
    $L2Lun__granja=strtoupper($_POST['L2Lun__granja']);
    $L3Lun__granja=strtoupper($_POST['L3Lun__granja']);
    $L4Lun__granja=strtoupper($_POST['L4Lun__granja']);

    $ExtLun__cocido=strtoupper($_POST['ExtLun__cocido']);
    $ExtLun__embarque=strtoupper($_POST['ExtLun__embarque']);

    $L1Mar__tipo=strtoupper($_POST['L1Mar__tipo']);
    $L2Mar__tipo=strtoupper($_POST['L2Mar__tipo']);
    $L3Mar__tipo=strtoupper($_POST['L3Mar__tipo']);
    $L4Mar__tipo=strtoupper($_POST['L4Mar__tipo']);

    $ProMar__cocido=strtoupper($_POST['ProMar__cocido']);
    $ProMar__embarque=strtoupper($_POST['ProMar__embarque']);

    $L1Mar__proceso=strtoupper($_POST['L1Mar__proceso']);
    $L2Mar__proceso=strtoupper($_POST['L2Mar__proceso']);
    $L3Mar__proceso=strtoupper($_POST['L3Mar__proceso']);
    $L4Mar__proceso=strtoupper($_POST['L4Mar__proceso']);

    $OpeMar__cocido=strtoupper($_POST['OpeMar__cocido']);
    $OpeMar__embarque=strtoupper($_POST['OpeMar__embarque']);

    $L1Mar__granja=strtoupper($_POST['L1Mar__granja']);
    $L2Mar__granja=strtoupper($_POST['L2Mar__granja']);
    $L3Mar__granja=strtoupper($_POST['L3Mar__granja']);
    $L4Mar__granja=strtoupper($_POST['L4Mar__granja']);

    $ExtMar__cocido=strtoupper($_POST['ExtMar__cocido']);
    $ExtMar__embarque=strtoupper($_POST['ExtMar__embarque']);

    $L1Mie__tipo=strtoupper($_POST['L1Mie__tipo']);
    $L2Mie__tipo=strtoupper($_POST['L2Mie__tipo']);
    $L3Mie__tipo=strtoupper($_POST['L3Mie__tipo']);
    $L4Mie__tipo=strtoupper($_POST['L4Mie__tipo']);

    $ProMie__cocido=strtoupper($_POST['ProMie__cocido']);
    $ProMie__embarque=strtoupper($_POST['ProMie__embarque']);

    $L1Mie__proceso=strtoupper($_POST['L1Mie__proceso']);
    $L2Mie__proceso=strtoupper($_POST['L2Mie__proceso']);
    $L3Mie__proceso=strtoupper($_POST['L3Mie__proceso']);
    $L4Mie__proceso=strtoupper($_POST['L4Mie__proceso']);

    $OpeMie__cocido=strtoupper($_POST['OpMie__cocido']);
    $OpeMie__embarque=strtoupper($_POST['OpMie__embarque']);

    $L1Mie__granja=strtoupper($_POST['L1Mie__granja']);
    $L2Mie__granja=strtoupper($_POST['L2Mie__granja']);
    $L3Mie__granja=strtoupper($_POST['L3Mie__granja']);
    $L4Mie__granja=strtoupper($_POST['L4Mie__granja']);

    $ExtMie__cocido=strtoupper($_POST['ExtMie__cocido']);
    $ExtMie__embarque=strtoupper($_POST['ExtMie__embarque']);

    $L1Jue__tipo=strtoupper($_POST['L1Jue__tipo']);
    $L2Jue__tipo=strtoupper($_POST['L2Jue__tipo']);
    $L3Jue__tipo=strtoupper($_POST['L3Jue__tipo']);
    $L4Jue__tipo=strtoupper($_POST['L4Jue__tipo']);

    $ProJue__cocido=strtoupper($_POST['ProJue__cocido']);
    $ProJue__embarque=strtoupper($_POST['ProJue__embarque']);

    $L1Jue__proceso=strtoupper($_POST['L1Jue__proceso']);
    $L2Jue__proceso=strtoupper($_POST['L2Jue__proceso']);
    $L3Jue__proceso=strtoupper($_POST['L3Jue__proceso']);
    $L4Jue__proceso=strtoupper($_POST['L4Jue__proceso']);

    $OpeJue__cocido=strtoupper($_POST['OpeJue__cocido']);
    $OpeJue__embarque=strtoupper($_POST['OpeJue__embarque']);

    $L1Jue__granja=strtoupper($_POST['L1Jue__granja']);
    $L2Jue__granja=strtoupper($_POST['L2Jue__granja']);
    $L3Jue__granja=strtoupper($_POST['L3Jue__granja']);
    $L4Jue__granja=strtoupper($_POST['L4Jue__granja']);

    $ExtJue__cocido=strtoupper($_POST['ExtJue__cocido']);
    $ExtJue__embarque=strtoupper($_POST['ExtJue__embarque']);

    $L1Vie__tipo=strtoupper($_POST['L1Vie__tipo']);
    $L2Vie__tipo=strtoupper($_POST['L2Vie__tipo']);
    $L3Vie__tipo=strtoupper($_POST['L3Vie__tipo']);
    $L4Vie__tipo=strtoupper($_POST['L4Vie__tipo']);

    $ProVie__cocido=strtoupper($_POST['ProVie__cocido']);
    $ProVie__embarque=strtoupper($_POST['ProVie__embarque']);

    $L1Vie__proceso=strtoupper($_POST['L1Vie__proceso']);
    $L2Vie__proceso=strtoupper($_POST['L2Vie__proceso']);
    $L3Vie__proceso=strtoupper($_POST['L3Vie__proceso']);
    $L4Vie__proceso=strtoupper($_POST['L4Vie__proceso']);

    $OpeVie__cocido=strtoupper($_POST['OpeVie__cocido']);
    $OpeVie__embarque=strtoupper($_POST['OpeVie__embarque']);

    $L1Vie__granja=strtoupper($_POST['L1Vie__granja']);
    $L2Vie__granja=strtoupper($_POST['L2Vie__granja']);
    $L3Vie__granja=strtoupper($_POST['L3Vie__granja']);
    $L4Vie__granja=strtoupper($_POST['L4Vie__granja']);

    $ExtVie__cocido=strtoupper($_POST['ExtVie__cocido']);
    $ExtVie__embarque=strtoupper($_POST['ExtVie__embarque']);

    $L1Sab__tipo=strtoupper($_POST['L1Sab__tipo']);
    $L2Sab__tipo=strtoupper($_POST['L2Sab__tipo']);
    $L3Sab__tipo=strtoupper($_POST['L3Sab__tipo']);
    $L4Sab__tipo=strtoupper($_POST['L4Sab__tipo']);

    $ProSab__cocido=strtoupper($_POST['ProSab__cocido']);
    $ProSab__embarque=strtoupper($_POST['ProSab__embarque']);

    $L1Sab__proceso=strtoupper($_POST['L1Sab__proceso']);
    $L2Sab__proceso=strtoupper($_POST['L2Sab__proceso']);
    $L3Sab__proceso=strtoupper($_POST['L3Sab__proceso']);
    $L4Sab__proceso=strtoupper($_POST['L4Sab__proceso']);

    $OpeSab__cocido=strtoupper($_POST['OpeSab__cocido']);
    $OpeSab__embarque=strtoupper($_POST['OpeSab__embarque']);

    $L1Sab__granja=strtoupper($_POST['L1Sab__granja']);
    $L2Sab__granja=strtoupper($_POST['L2Sab__granja']);
    $L3Sab__granja=strtoupper($_POST['L3Sab__granja']);
    $L4Sab__granja=strtoupper($_POST['L4Sab__granja']);

    $ExtSab__cocido=strtoupper($_POST['ExtSab__cocido']);
    $ExtSab__embarque=strtoupper($_POST['ExtSab__embarque']);


    $queryF="INSERT INTO faena
                (sem, dia, fecha, lote, tipo, proceso, granja) 
            VALUES
                ('$sem','lun','$lun','1','$L1Lun__tipo','$L1Lun__proceso','$L1Lun__granja'),
                ('$sem','lun','$lun','2','$L2Lun__tipo','$L2Lun__proceso','$L2Lun__granja'),
                ('$sem','lun','$lun','3','$L3Lun__tipo','$L3Lun__proceso','$L3Lun__granja'),
                ('$sem','lun','$lun','4','$L4Lun__tipo','$L4Lun__proceso','$L4Lun__granja'),

                ('$sem','mar','$mar','1','$L1Mar__tipo','$L1Mar__proceso','$L1Mar__granja'),
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
    $resultadoE->closeCursor();

    header("Location: index.php");
?>