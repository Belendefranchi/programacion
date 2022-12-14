<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="resources/favicon.ico">
    <title>Programación Semanal</title>
</head>
<body class="d-flex flex-column justify-content-center">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://192.168.1.113"> 
                    <img src="/temperatura/3.png" alt="" width="31" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://192.168.1.113/temperatura">Temperaturas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://192.168.1.113/">Contador de aves</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://192.168.1.113/calidad">Calidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://192.168.1.113/programacion">Programación</a>
                        </li>
                    </ul>
                    <span class="navbar-text">Intranet</span>
                </div>
            </div>
        </nav>
    </header><br>


    <?php
/* 
	session_start();
	if (isset($_SESSION["admin_login"]))	//Condicion admin
	{
		header("location: index.php");
	}elseif (isset($_SESSION["personal_login"]))	//Condicion personal
	{
		header("location: index.php");
	}elseif (isset($_SESSION["usuarios_login"]))	//Condicion Usuarios
	{
		header("location: index.php");
	}else{
        header("location: http://192.168.1.113/");
    } */

    ?>


    <main class="d-flex flex-column m-auto w-25">
        <div>
            <a class="a" href="pages/semAnterior.php"><input class="button fs-4 form-control fw-bold flex-grow-2" type='button' value='Semana Anterior'></a>
            <a class="a" href="pages/semActual.php"><input class="button fs-4 form-control fw-bold flex-grow-2" type='button' value='Semana Actual'></a>
            <a class="a" href="pages/semProxima.php"><input class="button fs-4 form-control fw-bold flex-grow-2" type='button' value='Semana Próxima'></a>
        </div><br>
        <div>
            <form action="pages/mostrar2.php" method="GET">
                <input class="button flex-fill fs-4 form-control fw-bold text-center" type="text" value="Otras semanas" readonly>
                <div class="d-flex">
                    <select class="button flex-fill fs-4 form-select fw-bold text-center" id="year" name="year">
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                    <select class="button flex-fill fs-4 form-select fw-bold text-center" id="semana" name="semana">
                        <option value="52">52</option>
                        <option value="51">51</option>
                        <option value="50">50</option>
                        <option value="49">49</option>
                        <option value="48">48</option>
                        <option value="47">47</option>
                        <option value="46">46</option>
                        <option value="45">45</option>
                        <option value="44">44</option>
                        <option value="43">43</option>
                        <option value="42">42</option>
                        <option value="41">41</option>
                        <option value="40">40</option>
                        <option value="39">39</option>
                        <option value="38">38</option>
                        <option value="37">37</option>
                        <option value="36">36</option>
                        <option value="35">35</option>
                        <option value="34">34</option>
                        <option value="33">33</option>
                        <option value="32">32</option>
                        <option value="31">31</option>
                        <option value="30">30</option>
                        <option value="29">29</option>
                        <option value="28">28</option>
                        <option value="27">27</option>
                        <option value="26">26</option>
                        <option value="25">25</option>
                        <option value="24">24</option>
                        <option value="23">23</option>
                        <option value="22">22</option>
                        <option value="21">21</option>
                        <option value="20">20</option>
                        <option value="19">19</option>
                        <option value="18">18</option>
                        <option value="17">17</option>
                        <option value="16">16</option>
                        <option value="15">15</option>
                        <option value="14">14</option>
                        <option value="13">13</option>
                        <option value="12">12</option>
                        <option value="11">11</option>
                        <option value="10">10</option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <input class="button flex-fill fs-4 form-control fw-bold text-center" type="submit" value="Ver">
            </form><br><br><br><br>
        </div>
    </main>
    <footer class='text-center'>
        <span>Programación Semanal v2.6.0</span>
        <img class="img" src="resources/logo (2).png" alt="logo">
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

