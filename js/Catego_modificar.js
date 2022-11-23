let form = document.getElementById("form");
let textInput = document.getElementById("textInput");
let textarea = document.getElementById("textarea");
let msg = document.getElementById("msg");
let tasks = document.getElementById("tasks");
let add = document.getElementById("add");



form.addEventListener("submit", function (e) {
  e.preventDefault();
  if (formValidation()) {
    var datos = new FormData(form);

    //Enviamos al php la info
    fetch("../Controller/categoria/Categoria.php", {
      method: "POST",
      body: datos,
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data);
        if (data == "1") {
          console.log(data);
          alert("registrado");
          acceptData();
        } else if (data == "0") {
          console.log(data);
        }
      });
  }
});