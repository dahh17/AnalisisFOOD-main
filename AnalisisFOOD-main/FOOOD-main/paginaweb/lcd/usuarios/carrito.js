export function procesarPedido() {
  carrito.forEach((prod) => {
    const contenedorCompra = document.querySelector('#contenedorCompra')
    const { id, nombre, precio, descripcion, img, existencias } = prod;
    const div = document.createElement("div");
    div.innerHTML += `
          <div class="modal-contenedor">
            <div>
            <img class="img-fluid img-carrito" src="${img}"/>
            </div>
            <div>
            <p>Producto: ${nombre}</p>
          <p>Precio: ${precio}</p>
          <p>Cantidad :${existencias}</p>
          <button class="btn btn-danger"  onclick="eliminarProducto(${id})">Eliminar producto</button>
            </div>
          </div>
          
      
          `;
    contenedorCompra.appendChild(div);
    console.log(contenedorCompra);
  });
}
