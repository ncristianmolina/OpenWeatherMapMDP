<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>El clima ahora</title>
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="48x48">  <!-- Icono de la página -->
    <link rel="stylesheet" href="css/bootstrap.min.css">  <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="css/styles.css">  <!-- Estilos personalizados -->
</head>
<body class="noche"> <!-- Aquí se aplicará la clase de fondo según el momento del día -->

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">El Clima Ahora</a>  <!-- Título de la aplicación -->
        </div>
    </nav>
    
    <div class="container text-center">
        <div class="d-flex flex-column align-items-center justify-content-between p-5 vh-100">
            <!-- Información del clima -->
            <p><span id="estado">Despejado</span></p>  <!-- Estado actual del clima -->
            <img id="icono" src="img/01d.png" alt="Clima actual">  <!-- Icono del clima, se actualizará -->
            <p><span id="temperatura">20°C</span></p>  <!-- Temperatura actual -->
            <p><span id="localidad">Mar del Plata</span></p>  <!-- Localidad -->
            <a id="refrescar" href="#" class="btn btn-info w-100">Refrescar</a>  <!-- Botón para refrescar el clima -->
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2025 - El Clima Ahora</p>  <!-- Pie de página -->
    </footer>

    <!-- Scripts JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>  <!-- jQuery -->
    <script src="js/bootstrap.min.js"></script>  <!-- Bootstrap JS -->
    <script src="js/app.js"></script>  <!-- Lógica de la aplicación -->
</body>
</html>
