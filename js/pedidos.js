
ajax_get_json();
function DarCategoria(numero){
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
    url='https://apiproductos.zambiaa.com/api/productos';
    xhr.open(method,url,true);
    xhr.onload=function(){
      if(this.status===200){
        let datos=[];
        datos=JSON.parse(this.responseText);
        console.log(datos);
        var num=0;
        datos.forEach(function(item){
          var categoria=DarCategoria(item.Fk_Categoria);
            products.push({fyh:'Ventas '+item.Ventas,category:categoria,Nombre: item.Nombre,price: '$'+item.Precio,Calificacion: item.Valoracion + '*️',id:item.id}); 
        });
        Cartas(products);//para mostrar los productos
        
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