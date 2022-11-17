var btncerrar=document.getElementById("btnCerrarP");
var formulario=document.getElementById("ModificarUsuario");

$('#file-input').change(function() { //Cuando el input cambie (se cargue un nuevo archivo) se va a ejecutar de nuevo el cambio de imagen y se verá reflejado.
    readURL(this,'#imagenPopup');
});
function mostrarPopup(){
    document.getElementById("popup-1").classList.toggle("active");
}

function quitarPopup(){
    document.getElementById("popup-1").classList.toggle("active");
}
function cambiarDatosUser(){

        var opc=3;
        formulario.addEventListener("submit",function(e){//debemos eliminar event listener
            e.preventDefault();
            var datos=new FormData(formulario);
            //var array={datos:datos,opc:3};
            console.log(datos.get("foto"));
            
            fetch('../Controller/FuncionesExecute.php',{
                method:'POST',
                body:datos
            })
            .then(res=>res.json())
            .then(data=>{
                alert("Modificado");
                quitarPopup();
                location.reload();
            })
        });
        return false;
}

function valorSelect2(_id){
    var select=document.getElementById(_id);
    var selectedOption = select.options[select.selectedIndex];
    return selectedOption.value;
}

function valorCalendar2(_id){
    var x = document.getElementById(_id);
    //var defaultVal = x.defaultValue;
    var currentVal = x.value;
    return currentVal
}

function readURL2(input) {//Cambia la imagen de una etiquta img
    if (input.files && input.files[0]) { //Revisamos que el input tenga contenido
        console.log("entre");
        var reader = new FileReader(); //Leemos el contenido
        reader.readAsDataURL(input.files[0]);
        console.log(reader);
        console.log(input.files[0]['name']);
        
        return input.files[0]['name'];
    }
}