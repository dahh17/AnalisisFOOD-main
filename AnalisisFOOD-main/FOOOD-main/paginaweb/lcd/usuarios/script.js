function getTasks() {
  let tasksView = document.getElementById('tasks');
  tasksView.innerHTML = '';

  // Obtener todos los productos guardados en el almacenamiento local
  for (let i = 0; i < localStorage.length; i++) {
    let key = localStorage.key(i);
    let producto = localStorage.getItem(key);

    let [nombre, precio, existencias, descripcion] = producto.split(',');

    let taskHTML = `
      
    `;
    tasksView.insertAdjacentHTML('beforeend', taskHTML);
  }
}

getTasks();



const cards = document.querySelectorAll('.card');
cards.forEach(card => {
  card.addEventListener('mouseover', () => {
    card.classList.add('animate__animated', 'animate__pulse');
  });
  card.addEventListener('mouseout', () => {
    card.classList.remove('animate__animated', 'animate__pulse');
  });

  // Creamos un objeto producto con el nombre y precio
  const product = { name: productName, price: productPrice };

  // Creamos un elemento HTML para mostrar el producto en el catálogo
  const productElement = document.createElement("div");
  productElement.classList.add("col-12", "mb-3");
  productElement.innerHTML = `
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">${product.name}</h5>
        <p class="card-text">$${product.price}</p>
      </div>
    </div>
  `;

  // Agregamos el producto al catálogo
  productList.appendChild(productElement);

  // Limpiamos el formulario
  productForm.reset();
});

// Seleccionar los botones de vendedores y domiciliarios
var vendorBtn = document.getElementById("vendor-btn");
var driverBtn = document.getElementById("driver-btn");

// Agregar un evento de clic al botón de vendedores
vendorBtn.addEventListener("click", function() {
  // Agregar la clase "active" al botón de vendedores
  vendorBtn.classList.add("active");
  // Remover la clase "active" del botón de domiciliarios
  driverBtn.classList.remove("active");
});

// Agregar un evento de clic al botón de domiciliarios
driverBtn.addEventListener("click", function() {
  // Agregar la clase "active" al botón de domiciliarios
  driverBtn.classList.add("active");
  // Remover la clase "active" del botón de vendedores
  vendorBtn.classList.remove("active");
});
//---------------------------------------------------------------------------------------//



