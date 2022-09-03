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
                    <section>
                        <input class="fs-4 form-control fw-bold text-center" type="text" value="Semana:" disabled>
                    </section>
                        <section>
                        <select class="fs-4 form-select form-control fw-bold text-center" id="sem" name="sem" onchange="ShowSelected();" aria-label="Default select example">
                            <?php
                                $sem = 52;
                                for ($i=0; $i<$sem; $i++){
                                    $week[]=$sem - $i;
                            ?>
                            <option value="<?php echo $week[$i]?>"><?php echo $week[$i]?></option>
                            <?php
                            $semana=$week[$i];
                            }
                            ?>
                        </select>
                    </section>
<!--                     <form class="d-flex justify-content-end" action="mostrar.php" method="post">
                        <input class="fs-4 form-control fw-bold text-center" name="sem" type="text" value="<?php echo $semana?>">
                        <input class="fs-4 form-control fw-bold text-center" type="submit" value="Ver">
                    </form>
                    <form class="d-flex justify-content-end" action="editar.php" method="post">
                        <input class="fs-4 form-control fw-bold text-center" name="sem" type="text" value="<?php echo $i?>">
                        <input class="fs-4 form-control fw-bold text-center" type="submit" value="Editar">
                    </form> -->
                    <a class="a" href="mostrar.php?semana=<?php echo $i?>"><input class="fs-4 form-control fw-bold text-center" type='button' value='Ver'></a>
                    <a class="a" href="editar.php?semana=<?php echo $semana?>"><input class="fs-4 form-control fw-bold text-center" type='button' value='Editar'></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="d-flex">
            <a class="a" href="semAnterior.php"><input class="fs-4 form-control fw-bold text-center" type='button' value='Semana Anterior'></a>
            <a class="a" href="semActual.php"><input class="fs-4 form-control fw-bold text-center" type='button' value='Semana Actual'></a>
            <a class="a" href="semProxima.php"><input class="fs-4 form-control fw-bold text-center" type='button' value='Semana Proxima'></a>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

