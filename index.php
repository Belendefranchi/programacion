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
        $L1Lun__tipo=strtoupper($_POST['L1Lun__tipo']);
        $L2Lun__tipo=strtoupper($_POST['L2Lun__tipo']);
        $L3Lun__tipo=strtoupper($_POST['L3Lun__tipo']);
        $L4Lun__tipo=strtoupper($_POST['L4Lun__tipo']);
        $L1Lun__proceso=strtoupper($_POST['L1Lun__proceso']);
        $L2Lun__proceso=strtoupper($_POST['L2Lun__proceso']);
        $L3Lun__proceso=strtoupper($_POST['L3Lun__proceso']);
        $L4Lun__proceso=strtoupper($_POST['L4Lun__proceso']);
        $L1Lun__granja=strtoupper($_POST['L1Lun__granja']);
        $L2Lun__granja=strtoupper($_POST['L2Lun__granja']);
        $L3Lun__granja=strtoupper($_POST['L3Lun__granja']);
        $L4Lun__granja=strtoupper($_POST['L4Lun__granja']);

        $L1Mar__tipo=strtoupper($_POST['L1Mar__tipo']);
        $L2Mar__tipo=strtoupper($_POST['L2Mar__tipo']);
        $L3Mar__tipo=strtoupper($_POST['L3Mar__tipo']);
        $L4Mar__tipo=strtoupper($_POST['L4Mar__tipo']);
        $L1Mar__proceso=strtoupper($_POST['L1Mar__proceso']);
        $L2Mar__proceso=strtoupper($_POST['L2Mar__proceso']);
        $L3Mar__proceso=strtoupper($_POST['L3Mar__proceso']);
        $L4Mar__proceso=strtoupper($_POST['L4Mar__proceso']);
        $L1Mar__granja=strtoupper($_POST['L1Mar__granja']);
        $L2Mar__granja=strtoupper($_POST['L2Mar__granja']);
        $L3Mar__granja=strtoupper($_POST['L3Mar__granja']);
        $L4Mar__granja=strtoupper($_POST['L4Mar__granja']);

        $L1Mie__tipo=strtoupper($_POST['L1Mie__tipo']);
        $L2Mie__tipo=strtoupper($_POST['L2Mie__tipo']);
        $L3Mie__tipo=strtoupper($_POST['L3Mie__tipo']);
        $L4Mie__tipo=strtoupper($_POST['L4Mie__tipo']);
        $L1Mie__proceso=strtoupper($_POST['L1Mie__proceso']);
        $L2Mie__proceso=strtoupper($_POST['L2Mie__proceso']);
        $L3Mie__proceso=strtoupper($_POST['L3Mie__proceso']);
        $L4Mie__proceso=strtoupper($_POST['L4Mie__proceso']);
        $L1Mie__granja=strtoupper($_POST['L1Mie__granja']);
        $L2Mie__granja=strtoupper($_POST['L2Mie__granja']);
        $L3Mie__granja=strtoupper($_POST['L3Mie__granja']);
        $L4Mie__granja=strtoupper($_POST['L4Mie__granja']);

        $L1Jue__tipo=strtoupper($_POST['L1Jue__tipo']);
        $L2Jue__tipo=strtoupper($_POST['L2Jue__tipo']);
        $L3Jue__tipo=strtoupper($_POST['L3Jue__tipo']);
        $L4Jue__tipo=strtoupper($_POST['L4Jue__tipo']);
        $L1Jue__proceso=strtoupper($_POST['L1Jue__proceso']);
        $L2Jue__proceso=strtoupper($_POST['L2Jue__proceso']);
        $L3Jue__proceso=strtoupper($_POST['L3Jue__proceso']);
        $L4Jue__proceso=strtoupper($_POST['L4Jue__proceso']);
        $L1Jue__granja=strtoupper($_POST['L1Jue__granja']);
        $L2Jue__granja=strtoupper($_POST['L2Jue__granja']);
        $L3Jue__granja=strtoupper($_POST['L3Jue__granja']);
        $L4Jue__granja=strtoupper($_POST['L4Jue__granja']);

        $L1Vie__tipo=strtoupper($_POST['L1Vie__tipo']);
        $L2Vie__tipo=strtoupper($_POST['L2Vie__tipo']);
        $L3Vie__tipo=strtoupper($_POST['L3Vie__tipo']);
        $L4Vie__tipo=strtoupper($_POST['L4Vie__tipo']);
        $L1Vie__proceso=strtoupper($_POST['L1Vie__proceso']);
        $L2Vie__proceso=strtoupper($_POST['L2Vie__proceso']);
        $L3Vie__proceso=strtoupper($_POST['L3Vie__proceso']);
        $L4Vie__proceso=strtoupper($_POST['L4Vie__proceso']);
        $L1Vie__granja=strtoupper($_POST['L1Vie__granja']);
        $L2Vie__granja=strtoupper($_POST['L2Vie__granja']);
        $L3Vie__granja=strtoupper($_POST['L3Vie__granja']);
        $L4Vie__granja=strtoupper($_POST['L4Vie__granja']);

        $L1Sab__tipo=strtoupper($_POST['L1Sab__tipo']);
        $L2Sab__tipo=strtoupper($_POST['L2Sab__tipo']);
        $L3Sab__tipo=strtoupper($_POST['L3Sab__tipo']);
        $L4Sab__tipo=strtoupper($_POST['L4Sab__tipo']);
        $L1Sab__proceso=strtoupper($_POST['L1Sab__proceso']);
        $L2Sab__proceso=strtoupper($_POST['L2Sab__proceso']);
        $L3Sab__proceso=strtoupper($_POST['L3Sab__proceso']);
        $L4Sab__proceso=strtoupper($_POST['L4Sab__proceso']);
        $L1Sab__granja=strtoupper($_POST['L1Sab__granja']);
        $L2Sab__granja=strtoupper($_POST['L2Sab__granja']);
        $L3Sab__granja=strtoupper($_POST['L3Sab__granja']);
        $L4Sab__granja=strtoupper($_POST['L4Sab__granja']);

        ?>
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
                    <td>sdf</td>
                    <td>vbn</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Lun__proceso)?></td>
                    <td><?php echo($L2Lun__proceso)?></td>
                    <td><?php echo($L3Lun__proceso)?></td>
                    <td><?php echo($L4Lun__proceso)?></td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo($L1Lun__granja)?></td>
                    <td><?php echo($L2Lun__granja)?></td>
                    <td><?php echo($L3Lun__granja)?></td>
                    <td><?php echo($L4Lun__granja)?></td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                </tr>
                <tr>
                    <th scope="row">MAR</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                </tr>
            </tbody>
        </table>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>