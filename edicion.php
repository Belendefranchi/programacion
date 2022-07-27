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
        <form action="index.php" method="post">
            <div>
                <input type="submit" value="Enviar">
            </div>

<!-- ###########################################   ENCABEZADO   ############################################### -->

            <div class="container text-center">
                <div class="row seven-cols align-items-center">
                    <input type="text" class="col-md-1 fs-4 fw-bold form-control" value="SEM:">
                    <div class="col-md-1 fs-4 fw-bold">LOTE 1</div>
                    <div class="col-md-1 fs-4 fw-bold">LOTE 2</div>
                    <div class="col-md-1 fs-4 fw-bold">LOTE 3</div>
                    <div class="col-md-1 fs-4 fw-bold">LOTE 4</div>
                    <div class="col-md-1 fs-4 fw-bold">COCIDO</div>
                    <div class="col-md-1 fs-4 fw-bold">EMBARQUES</div>
                </div>
            </div>
            <br>

<!-- ################################################   LUNES   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols align-items-center">
                    <input type="text" class="col-md-1 fw-bold form-control" value="LUN" readonly>
                    <select class="col-md-1 form-select" name="L1Lun__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Lun__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Lun__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Lun__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProLun__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ProLun__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <select class="col-md-1 form-select" name="L1Lun__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Lun__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Lun__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Lun__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpLun__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="OpLun__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <input type="text" class="col-md-1 form-control" name="L1Lun__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L2Lun__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L3Lun__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L4Lun__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraLun__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraLun__embarque" value="">
                </div>
            </div>
            <br>

<!-- ###############################################   MARTES   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="MAR" readonly>
                    <select class="col-md-1 form-select" name="L1Mar__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mar__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mar__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mar__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProMar__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ProMar__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->

                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <select class="col-md-1 form-select" name="L1Mar__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mar__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mar__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mar__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    </select>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpMar__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="OpMar__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <input type="text" class="col-md-1 form-control" name="L1Mar__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L2Mar__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L3Mar__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L4Mar__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraMar__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraMar__embarque" value="">
                </div>
            </div>
            <br>

<!-- ##############################################   MIERCOLES   ############################################# -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="MIE" readonly>
                    <select class="col-md-1 form-select" name="L1Mie__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mie__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mie__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mie__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProMie__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ProMie__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <select class="col-md-1 form-select" name="L1Mie__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Mie__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Mie__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Mie__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpMie__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="OpMie__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <input type="text" class="col-md-1 form-control" name="L1Mie__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L2Mie__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L3Mie__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L4Mie__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraMie__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraMie__embarque" value="">
                </div>
            </div>
            <br>

<!-- ###############################################   JUEVES   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="JUE" readonly>
                    <select class="col-md-1 form-select" name="L1Jue__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Jue__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Jue__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Jue__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProJue__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ProJue__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <select class="col-md-1 form-select" name="L1Jue__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Jue__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Jue__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Jue__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpJue__cocido" value="">                  
                    <input type="text" class="col-md-1 form-control" name="OpJue__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <input type="text" class="col-md-1 form-control" name="L1Jue__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L2Jue__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L3Jue__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L4Jue__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraJue__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraJue__embarque" value="">
                </div>
            </div>
            <br>

<!-- ###############################################   VIERNES   ############################################## -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="VIE" readonly>
                    <select class="col-md-1 form-select" name="L1Vie__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Vie__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Vie__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Vie__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProVie__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ProVie__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <select class="col-md-1 form-select" name="L1Vie__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Vie__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Vie__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Vie__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpVie__cocido" value="">                    
                    <input type="text" class="col-md-1 form-control" name="OpVie__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <input type="text" class="col-md-1 form-control" name="L1Vie__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L2Vie__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L3Vie__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L4Vie__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraVie__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraVie__embarque" value="">
                </div>
            </div>
            <br>

<!-- ###############################################   SABADO   ############################################### -->

<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------TIPO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
            <div class="container text-center">
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 fw-bold form-control" value="SAB" readonly>
                    <select class="col-md-1 form-select" name="L1Sab__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Sab__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Sab__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Sab__tipo" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="PESADA">PESADA</option>
                        <option value="LIVIANA">LIVIANA</option>
                        <option value="GALLO">GALLO</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="ProSab__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ProSab__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- ------------------------------------------------PROCESO--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <select class="col-md-1 form-select" name="L1Sab__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L2Sab__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L3Sab__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <select class="col-md-1 form-select" name="L4Sab__proceso" aria-label="Default select example">
                        <option selected>Elegir</option>
                        <option value="ENTERA">ENTERA</option>
                        <option value="TROZADA">TROZADA</option>
                        <option value="ENTERO">ENTERO</option>
                        <option value="TROZADO">TROZADO</option>
                        <option value="FASON">FASON</option>
                    </select>
                    <input type="text" class="col-md-1 form-control" name="OpSab__cocido" value="">                
                    <input type="text" class="col-md-1 form-control" name="OpSab__embarque" value="">
                </div>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------GRANJA--------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
                <div class="row seven-cols">
                    <input type="text" class="col-md-1 form-control" value="">
                    <input type="text" class="col-md-1 form-control" name="L1Sab__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L2Sab__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L3Sab__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="L4Sab__granja" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraSab__cocido" value="">
                    <input type="text" class="col-md-1 form-control" name="ExtraSab__embarque" value="">
                </div>
            </div>

<!-- ########################################################################################################## -->

            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>