document.querySelector("form").addEventListener("submit", function(event) {
    let nombre = document.getElementById("nombre").value.trim();
    let email = document.getElementById("email").value.trim();
    let edad = document.getElementById("edad").value.trim();

    let errores = [];

    if (nombre === "" || !/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/.test(nombre)) {
        errores.push("El nombre debe contener solo letras y espacios.");
    }

    if (email === "" || !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) {
        errores.push("El correo no tiene un formato válido.");
    }

    if (edad === "" || isNaN(edad) || edad <= 18) {
        errores.push("La edad debe ser un número positivo y mayor 18 años");
    }

    if (errores.length > 0) {
        event.preventDefault(); // Evita que se envíe el formulario
        alert(errores.join("\n"));
    }
});
