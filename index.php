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
                    <img src="logo.png" alt="" width="60vw">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item">
                            <a class="nav-link disabled">Programación Semanal</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-end">
                    <form action="mostrar.php" method="post">
                        <input class="fs-4 form-control fw-bold text-center" type="text" value="Semana:" disabled>
                        <select class="fs-4 form-select form-control fw-bold text-center" name="sem" aria-label="Default select example">
                            <?php
                                $sem = 52;
                                for ($i=0; $i<$sem; $i++){
                                    $week[]=$sem - $i;
                            ?>
                            <option value="<?php echo $week[$sem-$i-1]?>"><?php echo $sem-$i?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <a class="a" href="mostrar.php">
                            <input class="fs-4 form-control fw-bold text-center" type="button" value="Ver">
                        </a>
                        <a class="a" href="editar.php">
                            <input class="fs-4 form-control fw-bold text-center" type="button" value="Editar">
                        </a>
                        <input class="fs-4 form-control fw-bold text-center" type="button" value="Volver" onClick="history.go(-1);">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <script src="script.js"></script>
        <?php
        include("conexion.php");