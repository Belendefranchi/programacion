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

/*         $query="SELECT * FROM faena";
        $resultado=$base->prepare($query);
        $resultado->execute(array());     
        $registros=$resultado->fetchAll(PDO::FETCH_OBJ);
        $resultado->closeCursor(); */
        
/*         print_r ($registros); */
        
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
                    <td><?php echo($L1Lun__tipo)?></td>
                    <td><?php echo($L2Lun__tipo)?></td>
                    <td><?php echo($L3Lun__tipo)?></td>
                    <td><?php echo($L4Lun__tipo)?></td>
                    <td><?php echo($ProLun__cocido)?></td>
                    <td><?php echo($ProLun__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Lun__proceso)?></td>
                    <td><?php echo($L2Lun__proceso)?></td>
                    <td><?php echo($L3Lun__proceso)?></td>
                    <td><?php echo($L4Lun__proceso)?></td>
                    <td><?php echo($OpLun__cocido)?></td>
                    <td><?php echo($OpLun__embarque)?></td>                
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Lun__granja)?></td>
                    <td><?php echo($L2Lun__granja)?></td>
                    <td><?php echo($L3Lun__granja)?></td>
                    <td><?php echo($L4Lun__granja)?></td>
                    <td><?php echo($ExtraLun__cocido)?></td>
                    <td><?php echo($ExtraLun__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row">MAR</th>
                    <td><?php echo($L1Mar__tipo)?></td>
                    <td><?php echo($L2Mar__tipo)?></td>
                    <td><?php echo($L3Mar__tipo)?></td>
                    <td><?php echo($L4Mar__tipo)?></td>
                    <td><?php echo($ProMar__cocido)?></td>
                    <td><?php echo($ProMar__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Mar__proceso)?></td>
                    <td><?php echo($L2Mar__proceso)?></td>
                    <td><?php echo($L3Mar__proceso)?></td>
                    <td><?php echo($L4Mar__proceso)?></td>
                    <td><?php echo($OpMar__cocido)?></td>
                    <td><?php echo($OpMar__embarque)?></td>                
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Mar__granja)?></td>
                    <td><?php echo($L2Mar__granja)?></td>
                    <td><?php echo($L3Mar__granja)?></td>
                    <td><?php echo($L4Mar__granja)?></td>
                    <td><?php echo($ExtraMar__cocido)?></td>
                    <td><?php echo($ExtraMar__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row">MIE</th>
                    <td><?php echo($L1Mie__tipo)?></td>
                    <td><?php echo($L2Mie__tipo)?></td>
                    <td><?php echo($L3Mie__tipo)?></td>
                    <td><?php echo($L4Mie__tipo)?></td>
                    <td><?php echo($ProMie__cocido)?></td>
                    <td><?php echo($ProMie__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Mie__proceso)?></td>
                    <td><?php echo($L2Mie__proceso)?></td>
                    <td><?php echo($L3Mie__proceso)?></td>
                    <td><?php echo($L4Mie__proceso)?></td>
                    <td><?php echo($OpMie__cocido)?></td>
                    <td><?php echo($OpMie__embarque)?></td>                
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Mie__granja)?></td>
                    <td><?php echo($L2Mie__granja)?></td>
                    <td><?php echo($L3Mie__granja)?></td>
                    <td><?php echo($L4Mie__granja)?></td>
                    <td><?php echo($ExtraMie__cocido)?></td>
                    <td><?php echo($ExtraMie__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row">JUE</th>
                    <td><?php echo($L1Jue__tipo)?></td>
                    <td><?php echo($L2Jue__tipo)?></td>
                    <td><?php echo($L3Jue__tipo)?></td>
                    <td><?php echo($L4Jue__tipo)?></td>
                    <td><?php echo($ProJue__cocido)?></td>
                    <td><?php echo($ProJue__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Jue__proceso)?></td>
                    <td><?php echo($L2Jue__proceso)?></td>
                    <td><?php echo($L3Jue__proceso)?></td>
                    <td><?php echo($L4Jue__proceso)?></td>
                    <td><?php echo($OpJue__cocido)?></td>
                    <td><?php echo($OpJue__embarque)?></td>                
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Jue__granja)?></td>
                    <td><?php echo($L2Jue__granja)?></td>
                    <td><?php echo($L3Jue__granja)?></td>
                    <td><?php echo($L4Jue__granja)?></td>
                    <td><?php echo($ExtraJue__cocido)?></td>
                    <td><?php echo($ExtraJue__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row">VIE</th>
                    <td><?php echo($L1Vie__tipo)?></td>
                    <td><?php echo($L2Vie__tipo)?></td>
                    <td><?php echo($L3Vie__tipo)?></td>
                    <td><?php echo($L4Vie__tipo)?></td>
                    <td><?php echo($ProVie__cocido)?></td>
                    <td><?php echo($ProVie__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Vie__proceso)?></td>
                    <td><?php echo($L2Vie__proceso)?></td>
                    <td><?php echo($L3Vie__proceso)?></td>
                    <td><?php echo($L4Vie__proceso)?></td>
                    <td><?php echo($OpVie__cocido)?></td>
                    <td><?php echo($OpVie__embarque)?></td>                
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Vie__granja)?></td>
                    <td><?php echo($L2Vie__granja)?></td>
                    <td><?php echo($L3Vie__granja)?></td>
                    <td><?php echo($L4Vie__granja)?></td>
                    <td><?php echo($ExtraVie__cocido)?></td>
                    <td><?php echo($ExtraVie__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row">SAB</th>
                    <td><?php echo($L1Sab__tipo)?></td>
                    <td><?php echo($L2Sab__tipo)?></td>
                    <td><?php echo($L3Sab__tipo)?></td>
                    <td><?php echo($L4Sab__tipo)?></td>
                    <td><?php echo($ProSab__cocido)?></td>
                    <td><?php echo($ProSab__embarque)?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Sab__proceso)?></td>
                    <td><?php echo($L2Sab__proceso)?></td>
                    <td><?php echo($L3Sab__proceso)?></td>
                    <td><?php echo($L4Sab__proceso)?></td>
                    <td><?php echo($OpSab__cocido)?></td>
                    <td><?php echo($OpSab__embarque)?></td>                
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Sab__granja)?></td>
                    <td><?php echo($L2Sab__granja)?></td>
                    <td><?php echo($L3Sab__granja)?></td>
                    <td><?php echo($L4Sab__granja)?></td>
                    <td><?php echo($ExtraSab__cocido)?></td>
                    <td><?php echo($ExtraSab__embarque)?></td>
                </tr>
            </tbody>
        </table>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>