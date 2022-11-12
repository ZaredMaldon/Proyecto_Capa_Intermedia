
function Cartas(products) {
  for (let i of products) {
    //console.log(i.category);
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
      fecha.innerText = i.fyh.toUpperCase();
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
    price.innerText = i.price;
    container.appendChild(price);
    //Calificación
    let Calificacion = document.createElement("h7");  
    Calificacion.classList.add("product-cali");
    Calificacion.innerText = i.Calificacion;
    container.appendChild(Calificacion);
  
  
    card.appendChild(container);
    document.getElementById("products").appendChild(card);
  }
  }


ajax_get_json();
function DarCategoria(numero){
    console.log(numero);
    if(numero==1){
      return "Alimento";
    }else if(numero==2){
      return "Ejercicio";
    }else if(numero==3){
      return "Bebidas";
    } else{
      return "error"
    }
}
function ajax_get_json(){
    let products=[];
    const xhr=new XMLHttpRequest();
    method='GET',
    //url='http://localhost:82/Proyecto%20Capa%20Intermedia/Proyecto_Capa_Intermedia/DAO/RespuestaApi.php';
    url='http://localhost/Proyecto_Capa_Intermedia/DAO/RespuestaApi.php';
    xhr.open(method,url,true);
    xhr.onload=function(){
      if(this.status===200){
        let datos=[];
        datos=JSON.parse(this.responseText);
        console.log(datos.items);
        var num=0;
        datos.items.forEach(function(item){
          var categoria=DarCategoria(item.Fk_Categoria);
            products.push({fyh:'Ventas '+item.Ventas,category:categoria,productName: item.NombreProducto,price: item.Precio,Calificacion: item.Valoracion}); 
            console.log(products);
        });
        Cartas(products);
        
      }else{
        console.log('hay algun error');
      }
    }
    xhr.send();
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