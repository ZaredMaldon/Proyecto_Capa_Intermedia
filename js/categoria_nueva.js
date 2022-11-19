let form = document.getElementById("form");
let textInput = document.getElementById("textInput");
let textarea = document.getElementById("textarea");
let msg = document.getElementById("msg");
let tasks = document.getElementById("tasks");
let add = document.getElementById("add");

/* form.addEventListener("submit", (e) => {
  e.preventDefault();
  formValidation();
}); */

form.addEventListener("submit",function(e){
  e.preventDefault();
  if(formValidation()){ 
  
 var datos=new FormData(form);
  
  //Enviamos al php la info
   fetch('../Controller/categoria/Categoria.php',{
      method:'POST',
      body:datos
  })
  .then(res=>res.json())
  .then(data=>{
    
    console.log(data);
      if(data=="1"){
          console.log(data);
          alert('registrado');
          acceptData();
      }
      else if(data=="0"){
          console.log(data);
      }

  }) 
}
});
 

let formValidation = () => {
  if (textInput.value === "" & textarea.value === "") {
    console.log("failure");
    msg.innerHTML = "Lista en blanco";
    return false;
  } else {
    console.log("success");
    msg.innerHTML = "";
    add.setAttribute("data-bs-dismiss", "modal");
    add.click();
   // acceptData();
    (() => {
      add.setAttribute("data-bs-dismiss", "");
    })();
    return true;
  }
};

let data = [{}];

let acceptData = () => {
  data.push({
    text: textInput.value,
    description: textarea.value,
  });

  localStorage.setItem("data", JSON.stringify(data));

  console.log(data);
  createTasks();
};

let createTasks = () => {
  tasks.innerHTML = "";
  data.map((x, y) => {
    return (tasks.innerHTML += `
    <div id=${y}>
          <span class="fw-bold">${x.text}</span>
          <p>${x.description}</p>
          
          <span class="options">
          
          <a href= "categorias.php?
          id="<?php echo $mostrar['0'] ?> &
          Categoria=<?php echo $mostrar['1'] ?> $
          Descripcion=<?php echo $mostrar['2'] ?>"
          class="fas fa-edit"></a> 
          <i onClick ="deleteTask(this);createTasks()" class="fas fa-trash-alt"></i>
          </span>
        </div>
    `);
  });

/*  <i onClick= "parent.location='categorias.php'" 
          id="<?php echo $mostrar['0'] ?> &
          Categoria=<?php echo $mostrar['1'] ?> $
          Descripcion=<?php echo $mostrar['2'] ?>"
          class="fas fa-edit"></i> 
              
           <a  href= "categorias.php" 
          id= "editTask(this)"
          class="fas fa-edit"></a>
          */

//mostrarPopup()...."editTask(this)" data-bs-toggle="modal"
  resetForm();
};


let deleteTask = (e) => {
  e.parentElement.parentElement.remove();
  data.splice(e.parentElement.parentElement.id, 1);
  localStorage.setItem("data", JSON.stringify(data));
  console.log(data);
  
};

 let editTask = (e) => {


  let selectedTask = e.parentElement.parentElement;
  
  textInput.value = selectedTask.children[0].innerHTML;
  textarea.value = selectedTask.children[1].innerHTML;
}; 

let resetForm = () => {
  textInput.value = "";
  textarea.value = "";
};

(() => {
  data = JSON.parse(localStorage.getItem("data")) || []
  console.log(data);
  createTasks();
})();