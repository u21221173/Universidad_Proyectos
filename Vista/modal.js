// Obtén una referencia al enlace de "abrirPopup" y al popup
var abrirPopup = document.getElementById("abrirPopup");
var miPopup = document.getElementById("miPopup");

// Agrega un manejador de clic al enlace para abrir el popup
abrirPopup.addEventListener("click", function() {
    miPopup.style.display = "block";
});

// Función que se llama cuando se hace clic en "SI" o "NO" en el primer popup
function clienteRegistrado(registrado) {
    if (registrado) {
        // Si el usuario es cliente registrado, abre el segundo popup
        document.getElementById("popupDNI").style.display = "block";
    } else {
        // Si el usuario no es cliente registrado, realiza la acción correspondiente
        alert("No es cliente registrado");
    }
    // Cierra el primer popup
    miPopup.style.display = "none";
}

// Obtén una referencia al botón de "cerrarPopup"
var cerrarPopup = document.getElementById("cerrarPopup");

// Agrega un manejador de clic al botón de "cerrarPopup" para cerrar el popup
cerrarPopup.addEventListener("click", function() {
    miPopup.style.display = "none";
});

// Obtén una referencia al botón de "cerrarPopupDNI"
var cerrarPopupDNI = document.getElementById("cerrarPopupDNI");

// Agrega un manejador de clic al botón de "cerrarPopupDNI" para cerrar el segundo popup
cerrarPopupDNI.addEventListener("click", function() {
    document.getElementById("popupDNI").style.display = "none";
});

// Función para redirigir a las páginas
function redirigir(pagina) {
    window.location.href = pagina;
}


var cerrarClientePopup = document.getElementById("cerrarClientePopup");
cerrarClientePopup.addEventListener("click", function() {
    document.getElementById("clientePopup").style.display = "none";
});







