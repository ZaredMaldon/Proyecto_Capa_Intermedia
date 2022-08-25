const btnAbrirModal=document.querySelector("#Login-btn");
const btnCerrarModal=document.querySelector("#CerrarModal-btn");
const modal=document.querySelector("#modal");

btnAbrirModal.addEventListener("click",()=>{
    modal.showModal();
});

btnCerrarModal.addEventListener("click",()=>{
    modal.close();
});