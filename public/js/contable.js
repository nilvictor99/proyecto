function registrarArqueo() {
    // Obtener los valores de los campos
    var fechaArqueo = document.getElementById('fecha-arqueo').value;
    var montoInicial = document.getElementById('monto-inicial').value;

    // Validar que se ingresen datos
    if (fechaArqueo === "" || montoInicial === "") {
        alert("Por favor, complete todos los campos.");
        return;
    }

    // Construir el mensaje de registro
    var mensajeRegistro = `Arqueo registrado:<br>Fecha: ${fechaArqueo}<br>Monto Inicial: $${montoInicial}`;

    // Mostrar el mensaje en el contenedor
    var mensajeContainer = document.getElementById('mensaje-registro');
    mensajeContainer.innerHTML = mensajeRegistro;
    mensajeContainer.style.display = 'block';

    // Puedes agregar lógica adicional para almacenar o procesar el arqueo según sea necesario
}

// Función para calcular el total automáticamente
function calcularTotal() {
    // Obtener los valores de cantidad y precio unitario
    var cantidad = parseFloat(document.getElementById("cantidad").value) || 0;
    var precioUnitario = parseFloat(document.getElementById("precio-unitario").value) || 0;

    // Calcular el total
    var total = cantidad * precioUnitario;

    // Mostrar el total en el campo correspondiente
    document.getElementById("total").value = total.toFixed(2);
}

 // Función para calcular el total automáticamente
 function calcular() {
    // Obtener los valores de cantidad y precio unitario
    var cantidad = parseFloat(document.getElementById("canti").value) || 0;
    var precioUnitario = parseFloat(document.getElementById("unitario").value) || 0;

    // Calcular el total
    var total = cantidad * precioUnitario;

    // Mostrar el total en el campo correspondiente
    document.getElementById("tota").value = total.toFixed(2);
}
