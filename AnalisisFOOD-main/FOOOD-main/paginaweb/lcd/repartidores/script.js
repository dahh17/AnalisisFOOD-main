// Obtenemos las referencias de los elementos HTML
const profileImage = document.getElementById('profile-image');
const profileInfo = document.getElementById('profile-info');

// Definimos la información de la persona
const nombre = 'Juan Manuel Zapata';
const telefono = '3142536782';
const direccion = 'Calle Principal, Ciudad';
const tiempoDomiciliario = '3 años';

// Asignamos los valores a los elementos HTML
document.getElementById('name').textContent = `Nombre: ${nombre}`;
document.getElementById('phone').textContent = `Teléfono: ${telefono}`;
document.getElementById('address').textContent = `Dirección: ${direccion}`;
document.getElementById('years').textContent = `Tiempo de domiciliario: ${tiempoDomiciliario}`;

function receiveOrders() {
    const pedidosRecibidos = document.getElementById("pedidos-recibidos");
    pedidosRecibidos.innerHTML = "";
  
    const pedidos = ["Pedido 1", "Pedido 2", "Pedido 3"];
  
    pedidos.forEach((pedido, index) => {
      const pedidoElement = document.createElement("p");
      pedidoElement.textContent = pedido;
      pedidoElement.addEventListener("click", () => {
        mostrarInformacionPedido(index + 1); // Agrega la función para mostrar la información del pedido
      });
      pedidosRecibidos.appendChild(pedidoElement);
    });
  }
  
  function mostrarInformacionPedido(pedidoId) {
    const informacionPedido = obtenerInformacionPedido(pedidoId);
  
    if (informacionPedido) {
      const informacionPedidoContainer = document.getElementById("informacion-pedido-container");
      informacionPedidoContainer.innerHTML = `
        <div class="pedido-info">
          <h3>Información del Pedido ${pedidoId}</h3>
          <p>${informacionPedido}</p>
          <div class="pedido-options">
            <button onclick="aceptarPedido(${pedidoId})">Aceptar</button>
            <button onclick="rechazarPedido(${pedidoId})">Rechazar</button>
          </div>
        </div>
      `;
    } else {
      window.alert("No se encontró información del pedido.");
    }
  }
  
  function aceptarPedido(pedidoId) {
    // Lógica para aceptar el pedido
    window.alert(`Pedido ${pedidoId} aceptado.`);
  }
  
  function rechazarPedido(pedidoId) {
    // Lógica para rechazar el pedido
    window.alert(`Pedido ${pedidoId} rechazado.`);
  }
  
  
  function obtenerInformacionPedido(pedidoId) {
    // Aquí puedes implementar la lógica para obtener la información del pedido desde una fuente de datos externa, como una API o una base de datos
    // Retorna la información del pedido correspondiente al pedidoId
    // Por ejemplo:
    const informacionPedidos = {
      1: "Salchipapa Sin salsa de ajo. El vallado",
      2: "Hamburguesa doble carne sin cebolla. la floresta",
      3: "Empanadas y gaseosa. Marroquin"
    };
    
    return informacionPedidos[pedidoId];
  }
  
  
  
  
