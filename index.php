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
                <div class="d-flex">
                    <form class="d-flex justify-content-end" action="mostrar.php" method="post">
                        <section>
                            <input class="fs-4 form-control fw-bold text-center" type="text" value="Semana:" disabled>
                        </section>
                        <section>
                            <select class="fs-4 form-select form-control fw-bold text-center" name="sem" aria-label="Default select example">
                                <?php
                                    $sem = 52;
                                    for ($i=0; $i<$sem; $i++){
                                        $week[]=$sem - $i;
                                ?>
                                <option value="<?php echo $week[$i]?>"><?php echo $sem-$i?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </section>
                        <section>
                            <input class="fs-4 form-control fw-bold text-center" type="submit" value="Ver">
                        </section>
                    </form>
                    <form action="editar.php" method="get">
                        <a class="a" href="editar.php?semana=52">
                            <input class="fs-4 form-control fw-bold text-center" type="submit" value="Editar">
                            <?php echo $sem?>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <script src="script.js"></script>
        <?php
        include("conexion.php");