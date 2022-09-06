<?php

    include("conexion.php");

    $semana=substr(($_POST['semana']),-2);

    $lun=($_POST['lun']);
    $mar=($_POST['mar']);
    $mie=($_POST['mie']);
    $jue=($_POST['jue']);
    $vie=($_POST['vie']);
    $sab=($_POST['sab']);

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

    $OpeMie__cocido=strtoupper($_POST['OpeMie__cocido']);
    $OpeMie__embarque=strtoupper($_POST['OpeMie__embarque']);

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


     $queryFaenaL1Lun="UPDATE faena set tipo='$L1Lun__tipo', proceso='$L1Lun__proceso', granja='$L1Lun__granja'
                    WHERE sem='$semana'
                        and dia='lun'
                        and fecha='$lun'
                        and lote='1'";

    $resultadoFaenaL1Lun=$base->prepare($queryFaenaL1Lun);     
    $resultadoFaenaL1Lun->execute(array());
    $resultadoFaenaL1Lun->closeCursor();

    $queryFaenaL2Lun="UPDATE faena set tipo='$L2Lun__tipo', proceso='$L2Lun__proceso', granja='$L2Lun__granja'
                    WHERE sem='$semana'
                        and dia='lun'
                        and fecha='$lun'
                        and lote='2'";

    $resultadoFaenaL2Lun=$base->prepare($queryFaenaL2Lun);     
    $resultadoFaenaL2Lun->execute(array());
    $resultadoFaenaL2Lun->closeCursor();

    $queryFaenaL3Lun="UPDATE faena set tipo='$L3Lun__tipo', proceso='$L3Lun__proceso', granja='$L3Lun__granja'
                    WHERE sem='$semana'
                        and dia='lun'
                        and fecha='$lun'
                        and lote='3'";

    $resultadoFaenaL3Lun=$base->prepare($queryFaenaL3Lun);     
    $resultadoFaenaL3Lun->execute(array());
    $resultadoFaenaL3Lun->closeCursor();

    $queryFaenaL4Lun="UPDATE faena set tipo='$L4Lun__tipo', proceso='$L4Lun__proceso', granja='$L4Lun__granja'
                    WHERE sem='$semana'
                        and dia='lun'
                        and fecha='$lun'
                        and lote='4'";

    $resultadoFaenaL4Lun=$base->prepare($queryFaenaL4Lun);     
    $resultadoFaenaL4Lun->execute(array());
    $resultadoFaenaL4Lun->closeCursor();

    $queryFaenaL1Mar="UPDATE faena set tipo='$L1Mar__tipo', proceso='$L1Mar__proceso', granja='$L1Mar__granja'
                    WHERE sem='$semana'
                        and dia='mar'
                        and fecha='$mar'
                        and lote='1'";

    $resultadoFaenaL1Mar=$base->prepare($queryFaenaL1Mar);     
    $resultadoFaenaL1Mar->execute(array());
    $resultadoFaenaL1Mar->closeCursor();

    $queryFaenaL2Mar="UPDATE faena set tipo='$L2Mar__tipo', proceso='$L2Mar__proceso', granja='$L2Mar__granja'
                    WHERE sem='$semana'
                        and dia='mar'
                        and fecha='$mar'
                        and lote='2'";

    $resultadoFaenaL2Mar=$base->prepare($queryFaenaL2Mar);     
    $resultadoFaenaL2Mar->execute(array());
    $resultadoFaenaL2Mar->closeCursor();

    $queryFaenaL3Mar="UPDATE faena set tipo='$L3Mar__tipo', proceso='$L3Mar__proceso', granja='$L3Mar__granja'
                    WHERE sem='$semana'
                        and dia='mar'
                        and fecha='$mar'
                        and lote='3'";

    $resultadoFaenaL3Mar=$base->prepare($queryFaenaL3Mar);     
    $resultadoFaenaL3Mar->execute(array());
    $resultadoFaenaL3Mar->closeCursor();

    $queryFaenaL4Mar="UPDATE faena set tipo='$L4Mar__tipo', proceso='$L4Mar__proceso', granja='$L4Mar__granja'
                    WHERE sem='$semana'
                        and dia='mar'
                        and fecha='$mar'
                        and lote='4'";

    $resultadoFaenaL4Mar=$base->prepare($queryFaenaL4Mar);     
    $resultadoFaenaL4Mar->execute(array());
    $resultadoFaenaL4Mar->closeCursor();

    $queryFaenaL1Mie="UPDATE faena set tipo='$L1Mie__tipo', proceso='$L1Mie__proceso', granja='$L1Mie__granja'
                    WHERE sem='$semana'
                        and dia='mie'
                        and fecha='$mie'
                        and lote='1'";

    $resultadoFaenaL1Mie=$base->prepare($queryFaenaL1Lun);     
    $resultadoFaenaL1Mie->execute(array());
    $resultadoFaenaL1Mie->closeCursor();

    $queryFaenaL2Mie="UPDATE faena set tipo='$L2Mie__tipo', proceso='$L2Mie__proceso', granja='$L2Mie__granja'
                    WHERE sem='$semana'
                        and dia='mie'
                        and fecha='$mie'
                        and lote='2'";

    $resultadoFaenaL2Mie=$base->prepare($queryFaenaL2Mie);     
    $resultadoFaenaL2Mie->execute(array());
    $resultadoFaenaL2Mie->closeCursor();

    $queryFaenaL3Mie="UPDATE faena set tipo='$L3Mie__tipo', proceso='$L3Mie__proceso', granja='$L3Mie__granja'
                    WHERE sem='$semana'
                        and dia='mie'
                        and fecha='$mie'
                        and lote='3'";

    $resultadoFaenaL3Mie=$base->prepare($queryFaenaL3Mie);     
    $resultadoFaenaL3Mie->execute(array());
    $resultadoFaenaL3Mie->closeCursor();

    $queryFaenaL4Mie="UPDATE faena set tipo='$L4Mie__tipo', proceso='$L4Mie__proceso', granja='$L4Mie__granja'
                    WHERE sem='$semana'
                        and dia='mie'
                        and fecha='$mie'
                        and lote='4'";

    $resultadoFaenaL4Mie=$base->prepare($queryFaenaL4Mie);     
    $resultadoFaenaL4Mie->execute(array());
    $resultadoFaenaL4Mie->closeCursor();

    $queryFaenaL1Jue="UPDATE faena set tipo='$L1Jue__tipo', proceso='$L1Jue__proceso', granja='$L1Jue__granja'
                    WHERE sem='$semana'
                        and dia='jue'
                        and fecha='$jue'
                        and lote='1'";

    $resultadoFaenaL1Jue=$base->prepare($queryFaenaL1Jue);     
    $resultadoFaenaL1Jue->execute(array());
    $resultadoFaenaL1Jue->closeCursor();

    $queryFaenaL2Jue="UPDATE faena set tipo='$L2Jue__tipo', proceso='$L2Jue__proceso', granja='$L2Jue__granja'
                    WHERE sem='$semana'
                        and dia='jue'
                        and fecha='$jue'
                        and lote='2'";

    $resultadoFaenaL2Jue=$base->prepare($queryFaenaL2Jue);     
    $resultadoFaenaL2Jue->execute(array());
    $resultadoFaenaL2Jue->closeCursor();

    $queryFaenaL3Jue="UPDATE faena set tipo='$L3Jue__tipo', proceso='$L3Jue__proceso', granja='$L3Jue__granja'
                    WHERE sem='$semana'
                        and dia='jue'
                        and fecha='$jue'
                        and lote='3'";

    $resultadoFaenaL3Jue=$base->prepare($queryFaenaL3Jue);     
    $resultadoFaenaL3Jue->execute(array());
    $resultadoFaenaL3Jue->closeCursor();

    $queryFaenaL4Jue="UPDATE faena set tipo='$L4Jue__tipo', proceso='$L4Jue__proceso', granja='$L4Jue__granja'
                    WHERE sem='$semana'
                        and dia='jue'
                        and fecha='$jue'
                        and lote='4'";

    $resultadoFaenaL4Jue=$base->prepare($queryFaenaL4Jue);     
    $resultadoFaenaL4Jue->execute(array());
    $resultadoFaenaL4Jue->closeCursor();

        $queryFaenaL1Vie="UPDATE faena set tipo='$L1Vie__tipo', proceso='$L1Vie__proceso', granja='$L1Vie__granja'
                    WHERE sem='$semana'
                        and dia='vie'
                        and fecha='$vie'
                        and lote='1'";

    $resultadoFaenaL1Vie=$base->prepare($queryFaenaL1Vie);     
    $resultadoFaenaL1Vie->execute(array());
    $resultadoFaenaL1Vie->closeCursor();

    $queryFaenaL2Vie="UPDATE faena set tipo='$L2Vie__tipo', proceso='$L2Vie__proceso', granja='$L2Vie__granja'
                    WHERE sem='$semana'
                        and dia='vie'
                        and fecha='$vie'
                        and lote='2'";

    $resultadoFaenaL2Vie=$base->prepare($queryFaenaL2Vie);     
    $resultadoFaenaL2Vie->execute(array());
    $resultadoFaenaL2Vie->closeCursor();

    $queryFaenaL3Vie="UPDATE faena set tipo='$L3Vie__tipo', proceso='$L3Vie__proceso', granja='$L3Vie__granja'
                    WHERE sem='$semana'
                        and dia='vie'
                        and fecha='$vie'
                        and lote='3'";

    $resultadoFaenaL3Vie=$base->prepare($queryFaenaL3Vie);     
    $resultadoFaenaL3Vie->execute(array());
    $resultadoFaenaL3Vie->closeCursor();

    $queryFaenaL4Vie="UPDATE faena set tipo='$L4Vie__tipo', proceso='$L4Vie__proceso', granja='$L4Vie__granja'
                    WHERE sem='$semana'
                        and dia='vie'
                        and fecha='$vie'
                        and lote='4'";

    $resultadoFaenaL4Vie=$base->prepare($queryFaenaL4Vie);     
    $resultadoFaenaL4Vie->execute(array());
    $resultadoFaenaL4Vie->closeCursor();

    $queryFaenaL1Sab="UPDATE faena set tipo='$L1Sab__tipo', proceso='$L1Sab__proceso', granja='$L1Sab__granja'
                    WHERE sem='$semana'
                        and dia='sab'
                        and fecha='$sab'
                        and lote='1'";

    $resultadoFaenaL1Sab=$base->prepare($queryFaenaL1Sab);     
    $resultadoFaenaL1Sab->execute(array());
    $resultadoFaenaL1Sab->closeCursor();

    $queryFaenaL2Sab="UPDATE faena set tipo='$L2Sab__tipo', proceso='$L2Sab__proceso', granja='$L2Sab__granja'
                    WHERE sem='$semana'
                        and dia='sab'
                        and fecha='$sab'
                        and lote='2'";

    $resultadoFaenaL2Sab=$base->prepare($queryFaenaL2Sab);     
    $resultadoFaenaL2Sab->execute(array());
    $resultadoFaenaL2Sab->closeCursor();

    $queryFaenaL3Sab="UPDATE faena set tipo='$L3Sab__tipo', proceso='$L3Sab__proceso', granja='$L3Sab__granja'
                    WHERE sem='$semana'
                        and dia='sab'
                        and fecha='$sab'
                        and lote='3'";

    $resultadoFaenaL3Sab=$base->prepare($queryFaenaL3Sab);     
    $resultadoFaenaL3Sab->execute(array());
    $resultadoFaenaL3Sab->closeCursor();

    $queryFaenaL4Sab="UPDATE faena set tipo='$L4Sab__tipo', proceso='$L4Sab__proceso', granja='$L4Sab__granja'
                    WHERE sem='$semana'
                        and dia='sab'
                        and fecha='$sab'
                        and lote='4'";

    $resultadoFaenaL4Sab=$base->prepare($queryFaenaL4Sab);     
    $resultadoFaenaL4Sab->execute(array());
    $resultadoFaenaL4Sab->closeCursor();

    
/*     $queryF="INSERT INTO faena
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
    $resultadoE->closeCursor(); */

    header("Location: mostrar.php?semana=$semana");

    ?>