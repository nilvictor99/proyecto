// Variables para llevar el seguimiento de la cantidad y el precio total
let cantidadSeleccionada = 0;
let precioTotal = 0;

// Función para seleccionar un producto
function seleccionarProducto(id, precio) {
    // Actualizar la cantidad y el precio total
    cantidadSeleccionada++;
    precioTotal += precio;

    // Mostrar información actualizada automáticamente
    actualizarInfo();

    // Mostrar el nuevo botón si hay productos seleccionados
    mostrarNuevoBoton();
}

// Función para eliminar los productos seleccionados
function eliminarProductos() {
    // Restablecer la cantidad y el precio total a cero
    cantidadSeleccionada = 0;
    precioTotal = 0;

    // Mostrar información actualizada automáticamente después de eliminar
    actualizarInfo();

    // Ocultar el nuevo botón al eliminar productos
    ocultarNuevoBoton();
}

// Función para mostrar el nuevo botón si hay productos seleccionados
function mostrarNuevoBoton() {
    const nuevoBoton = document.getElementById('comprar');
    if (cantidadSeleccionada > 0) {
        nuevoBoton.classList.remove('oculto');
    } else {
        nuevoBoton.classList.add('oculto');
    }
}

// Función para ocultar el nuevo botón
function ocultarNuevoBoton() {
    const nuevoBoton = document.getElementById('comprar');
    nuevoBoton.classList.add('oculto');
}

// Nueva función asociada al nuevo botón
function nuevaFuncion() {
    alert('!producto adquirido¡');
}

// Función actualizar la información en la interfaz de usuario
function actualizarInfo() {
    // Actualizar elementos en el DOM con la nueva información
    document.getElementById('cantidad-seleccionada').textContent = `Cantidad seleccionada: ${cantidadSeleccionada}`;
    document.getElementById('precio-total').textContent = `Precio total: $${precioTotal.toFixed(2)}`;
}
