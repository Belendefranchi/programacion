<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include("conexion.php");


echo $lun . "<br>";
echo $mar . "<br>";
echo $mie . "<br>";
echo $jue . "<br>";
echo $vie . "<br>";
echo $sab . "<br>";


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

$OpLun__cocido=strtoupper($_POST['OpLun__cocido']);
$OpLun__embarque=strtoupper($_POST['OpLun__embarque']);

$L1Lun__granja=strtoupper($_POST['L1Lun__granja']);
$L2Lun__granja=strtoupper($_POST['L2Lun__granja']);
$L3Lun__granja=strtoupper($_POST['L3Lun__granja']);
$L4Lun__granja=strtoupper($_POST['L4Lun__granja']);

$ExtraLun__cocido=strtoupper($_POST['ExtraLun__cocido']);
$ExtraLun__embarque=strtoupper($_POST['ExtraLun__embarque']);

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

$OpMar__cocido=strtoupper($_POST['OpMar__cocido']);
$OpMar__embarque=strtoupper($_POST['OpMar__embarque']);

$L1Mar__granja=strtoupper($_POST['L1Mar__granja']);
$L2Mar__granja=strtoupper($_POST['L2Mar__granja']);
$L3Mar__granja=strtoupper($_POST['L3Mar__granja']);
$L4Mar__granja=strtoupper($_POST['L4Mar__granja']);

$ExtraMar__cocido=strtoupper($_POST['ExtraMar__cocido']);
$ExtraMar__embarque=strtoupper($_POST['ExtraMar__embarque']);

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

$OpMie__cocido=strtoupper($_POST['OpMie__cocido']);
$OpMie__embarque=strtoupper($_POST['OpMie__embarque']);

$L1Mie__granja=strtoupper($_POST['L1Mie__granja']);
$L2Mie__granja=strtoupper($_POST['L2Mie__granja']);
$L3Mie__granja=strtoupper($_POST['L3Mie__granja']);
$L4Mie__granja=strtoupper($_POST['L4Mie__granja']);

$ExtraMie__cocido=strtoupper($_POST['ExtraMie__cocido']);
$ExtraMie__embarque=strtoupper($_POST['ExtraMie__embarque']);

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

$OpJue__cocido=strtoupper($_POST['OpJue__cocido']);
$OpJue__embarque=strtoupper($_POST['OpJue__embarque']);

$L1Jue__granja=strtoupper($_POST['L1Jue__granja']);
$L2Jue__granja=strtoupper($_POST['L2Jue__granja']);
$L3Jue__granja=strtoupper($_POST['L3Jue__granja']);
$L4Jue__granja=strtoupper($_POST['L4Jue__granja']);

$ExtraJue__cocido=strtoupper($_POST['ExtraJue__cocido']);
$ExtraJue__embarque=strtoupper($_POST['ExtraJue__embarque']);

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

$OpVie__cocido=strtoupper($_POST['OpVie__cocido']);
$OpVie__embarque=strtoupper($_POST['OpVie__embarque']);

$L1Vie__granja=strtoupper($_POST['L1Vie__granja']);
$L2Vie__granja=strtoupper($_POST['L2Vie__granja']);
$L3Vie__granja=strtoupper($_POST['L3Vie__granja']);
$L4Vie__granja=strtoupper($_POST['L4Vie__granja']);

$ExtraVie__cocido=strtoupper($_POST['ExtraVie__cocido']);
$ExtraVie__embarque=strtoupper($_POST['ExtraVie__embarque']);

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

$OpSab__cocido=strtoupper($_POST['OpSab__cocido']);
$OpSab__embarque=strtoupper($_POST['OpSab__embarque']);

$L1Sab__granja=strtoupper($_POST['L1Sab__granja']);
$L2Sab__granja=strtoupper($_POST['L2Sab__granja']);
$L3Sab__granja=strtoupper($_POST['L3Sab__granja']);
$L4Sab__granja=strtoupper($_POST['L4Sab__granja']);

$ExtraSab__cocido=strtoupper($_POST['ExtraSab__cocido']);
$ExtraSab__embarque=strtoupper($_POST['ExtraSab__embarque']);


$queryf="INSERT INTO faena
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
            ('$sem','sab','$sab','4','$L4Sab__tipo','$L4Sab__proceso','$L4Sab__granja')
        ";

$resultadof=$base->prepare($queryf);     
$resultadof->execute(array());
$resultadof->closeCursor();


$queryc="INSERT INTO cocido
            (sem, dia, fecha, pro_cocido, op_cocido, ext_cocido)
        VALUES
            ('$sem','lun','$lun','$ProLun__cocido','$OpLun__cocido','$ExtraLun__cocido'),
            ('$sem','mar','$mar','$ProMar__cocido','$OpMar__cocido','$ExtraMar__cocido'),
            ('$sem','mie','$mie','$ProMie__cocido','$OpMie__cocido','$ExtraMie__cocido'),
            ('$sem','jue','$jue','$ProJue__cocido','$OpJue__cocido','$ExtraJue__cocido'),
            ('$sem','vie','$vie','$ProVie__cocido','$OpVie__cocido','$ExtraVie__cocido'),
            ('$sem','sab','$sab','$ProSab__cocido','$OpSab__cocido','$ExtraSab__cocido')
        ";

$resultadoc=$base->prepare($queryc);     
$resultadoc->execute(array());
$resultadoc->closeCursor();

$querye="INSERT INTO embarque
            (sem, dia, fecha, pro_embarque, op_embarque, ext_embarque) 
        VALUES
            ('30','jueves','2022-07-28','$ProLun__embarque','$OpLun__embarque','$ExtraLun__embarque'),
            ('30','jueves','2022-07-28','$ProMar__embarque','$OpMar__embarque','$ExtraMar__embarque'),
            ('30','jueves','2022-07-28','$ProMie__embarque','$OpMie__embarque','$ExtraMie__embarque'),
            ('30','jueves','2022-07-28','$ProJue__embarque','$OpJue__embarque','$ExtraJue__embarque'),
            ('30','jueves','2022-07-28','$ProVie__embarque','$OpVie__embarque','$ExtraVie__embarque'),
            ('30','jueves','2022-07-28','$ProSab__embarque','$OpSab__embarque','$ExtraSab__embarque')
            ";

$resultadoe=$base->prepare($querye);     
$resultadoe->execute(array());
$resultadoe->closeCursor();

$query="SELECT * FROM faena";

$resultado=$base->prepare($query);     
$resultado->execute(array());
$registros=$resultado->fetchAll(PDO::FETCH_OBJ);
$resultado->closeCursor();


?>

</body>
</html>