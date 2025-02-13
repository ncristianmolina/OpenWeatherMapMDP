$(function() {
    console.log("Página cargada. Aplicando fondo...");
    cambiarFondoSegunHora();
    refrescarEstadoClima();

    $("#refrescar").click(function(event) {
        event.preventDefault();
        refrescarEstadoClima();
    });
});

function cambiarFondoSegunHora() {
    let hora = new Date().getHours();
    let claseFondo = (hora >= 6 && hora < 12) ? "dia" :
                     (hora >= 12 && hora < 18) ? "tarde" :
                     (hora >= 18 && hora < 20) ? "puesta_sol" : "noche";

    console.log(`Hora actual: ${hora}, Clase aplicada: ${claseFondo}`);

    $("body").removeClass("dia tarde puesta_sol noche").addClass(claseFondo);
}

function refrescarEstadoClima() {
    console.log("Refrescando clima...");
    $.get(
        "https://api.openweathermap.org/data/2.5/find?" +
            "lat=-38.0023" +
            "&lon=-57.5575" +
            "&units=metric" +
            "&type=accurate" +
            "&lang=es" +
            "&APPID=d19a068270964c8e18e294daed373b25",
        function(data) {
            if (!data || !data.list || data.list.length === 0) return;

            let clima = data.list[0];

            establecerEstadoClima(
                clima.weather[0].description,
                clima.weather[0].icon,
                clima.main.temp,
                clima.name
            );

            console.log("Clima actualizado. Aplicando fondo...");
            cambiarFondoSegunHora();
        },
        "json"
    );
}

function establecerEstadoClima(estado, numIcono, temperatura, localidad) {
    console.log("Icono del clima:", numIcono); // Verifica el icono
    const hora = new Date().getHours(); // Obtiene la hora actual
    let iconoPath;

    // Si es de noche, cambia el ícono de 'd' a 'n'
    if (hora >= 20 || hora < 6) { // Asumiendo que después de las 20hs es noche
        iconoPath = `img/${numIcono.slice(0, 2)}n.png`; // Cambia 'd' a 'n'
    } else {
        iconoPath = `img/${numIcono}.png`;
    }

    console.log("Path de icono:", iconoPath); // Verifica la ruta del icono

    $("#estado").text(estado);
    $("#icono").attr("src", iconoPath);  // Verifica que solo cargue PNG
    $("#temperatura").text(Number(temperatura).toFixed(0) + "°C");
    $("#localidad").text(localidad);

    cambiarFondoSegunHora();
}

