<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El clima ahora</title>
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="48x48">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="noche"> <!-- Se cambiará dinámicamente según la hora -->

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">El Clima Ahora</a>
        </div>
    </nav>
    <div class="container text-center">
        <div class="d-flex flex-column align-items-center justify-content-between p-5 vh-100">
            <p><span id="estado">Despejado</span></p>
            <img id="icono" src="img/01d.png" alt="Clima actual"> <!-- Aquí se actualiza con la API -->
            <p><span id="temperatura">20°C</span></p>
            <p><span id="localidad">Mar del Plata</span></p>
            <a id="refrescar" href="#" class="btn btn-info w-100">Refrescar</a>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2025 - El Clima Ahora</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
