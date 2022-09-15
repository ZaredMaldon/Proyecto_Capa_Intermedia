let products = {
  data: [
    {
      fyh: "05-09-2022  12:00 pm",
      category: "Ropa",
      productName: "Blusa oversize color rosa",
      price: "230",
      Calificacion: "4.4",
    },
    {
      fyh: "07-09-2022  14:25 pm",
      category: "Hogar",
      productName: "Sofá cama color rosa pastel",
      price: "8650",
      Calificacion: "4.6",
    },
    {
      fyh: "08-09-2022  16:30 pm",
      category: "Videojuegos",
      productName: "Call of Duty BLack ops",
      price: "850",
      Calificacion: "5.0",
    },
    {
      fyh: "10-09-2022  13:30 pm",
      category: "Mascotas",
      productName: "Collar rosa para gato",
      price: "99",
      Calificacion: "4.3",
    },
    {
      fyh: "09-09-2022  15:27 pm",
      category: "Belleza",
      productName: "Crema Regeneradora",
      price: "260",
      Calificacion: "4.8",
    },
    {
      fyh: "11-09-2022  18:06 pm",
      category: "Electronicos",
      productName: "Television '50'",
      price: "20,300",
      Calificacion: "4.4",
    },
    {
      fyh: "12-09-2022  13:50 pm",
      category: "Videojuegos",
      productName: "Dead By Daylight",
      price: "450",
      Calificacion: "5.0",
    },
    {
      fyh: "13-09-2022  19:35 pm",
      category: "Electronicos",
      productName: "Cargador Iphone 20W",
      price: "500",
      Calificacion: "4.8",
    },
    {
      fyh: "14-09-2021  16:24 pm",
      category: "Hogar",
      productName: "Alfombra de peluche cafe",
      price: "1250",
      Calificacion: "3.8",
    },
  ],
};

for (let i of products.data) {
  //Creamos la tarjeta
  let card = document.createElement("div");
  //Card should have category and should stay hidden initially
  card.classList.add("card", i.category, "hide");
  //image div
  /*let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");
  //img tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer); */
  //container
  let container = document.createElement("div");
  container.classList.add("container");
    //fecha
    let fecha = document.createElement("h3");
    fecha.classList.add("product-fecha");
    fecha.innerText = i.fyh.toUpperCase();;
    container.appendChild(fecha);
  //Categoria
  let Categoria = document.createElement("h4");
  Categoria.classList.add("product-categoria");
  Categoria.innerText = i.category.toUpperCase();
  container.appendChild(Categoria);
  //nombre del prodcuto
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);
  //precio
  let price = document.createElement("h6");
  price.innerText = "$" + i.price;
  container.appendChild(price);
  //Calificación
  let Calificacion = document.createElement("h7");  
  Calificacion.classList.add("product-cali");
  Calificacion.innerText = i.Calificacion.toUpperCase();
  container.appendChild(Calificacion);


  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}

//parámetro pasado desde el botón (parámetro igual que categoría)
function filterProduct(value) {
//Código de clase de botón
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
 // comprobar si el valor es igual a texto interior
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  //seleccion de todas las tarjetas
  let elements = document.querySelectorAll(".card");
// recorrer todas las tarjetas
  elements.forEach((element) => {
 // mostrar todas las cartas al hacer clic en el botón 'todos'
    if (value == "Todos") {
      element.classList.remove("hide");
    } else {
      //Comprueba si el elemento contiene una clase de categoría
      if (element.classList.contains(value)) {
        //mostrar elemento basado en categoría
        element.classList.remove("hide");
      } else {
        //ocultar otros elementos
        element.classList.add("hide");
      }
    }
  });
}

//Clic en el botón de búsqueda
document.getElementById("search").addEventListener("click", () => {
  //inicializaciones
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  // Recorrer todos los elementos
  elements.forEach((element, index) => {
  //comprueba si el texto incluye el valor de búsqueda
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //Mostrar tarjeta coincidente
      cards[index].classList.remove("hide");
    } else {
      //Esconder otros
      cards[index].classList.add("hide");
    }
  });
});

//Inicialmente mostrar TODOS los productos
window.onload = () => {
  filterProduct("Todos");
};