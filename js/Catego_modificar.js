let form = document.getElementById("form-2");
let textInput = document.getElementById("textInput");
let textarea = document.getElementById("textarea");
let add = document.getElementById("modificar");

function cambiarDatosUser(){
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      if (formValidation()) {
        var datos = new FormData(form);
    
        //Enviamos al php la info
       
      fetch('../Controller/categoria_modificar.php',{
        method:'POST',
        body:datos
       })
        .then((res) => res.json())
        .then((data) => {
          console.log(data);
          if (data == "1") {
            console.log(data);
            alert("Modificado");
            acceptData();
          } else if (data == "0") {
            console.log(data);
          }
          });
      }
    });
    return false;
  }
    let data = [{}];

    let acceptData = () => {
      data.push({
        text: textInput.value,
        description: textarea.value,
      });
    
      localStorage.setItem("data", JSON.stringify(data));
    
      console.log(data);
      location.reload("../View/categorias_nuevas.php");
    };

    let formValidation = () => {
      if ((textInput.value === "") & (textarea.value === "")) {
        console.log("failure");
        msg.innerHTML = "Lista en blanco";
        return false;
      } else {
        console.log("success"); 
        add.setAttribute("data-bs-dismiss", "modal");
        add.click();
        // acceptData();
        (() => {
          add.setAttribute("data-bs-dismiss", "");
        })();
        return true;
      }
    };

    (() => {
      data = JSON.parse(localStorage.getItem("data")) || [];
      console.log(data);
    })();
    