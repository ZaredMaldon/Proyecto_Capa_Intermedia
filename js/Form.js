var formularioRegistro=document.getElementById('form_Registro');

formularioRegistro.addEventListener("submit",function(){
    //e.preventDefault();
    var sexo=valorSelect('Sexo');
    var rol=valorSelect('Rol');
    var FNac=valorCalendar('FNac');
    console.log(FNac);
    console.log(sexo);
    console.log(rol);

    var datos=new FormData(formularioRegistro);
    //console.log(valorCalendar('FNac'));
    //Enviamos al php la info
    fetch('../DAO/Registro.php',{
        method:'POST',
        body:datos
    })
    .then(res=>res.json())
    .then(data=>{
        console.log(data);
    })
    
});

//regresa el valor de un Select(comboBox) por medio de su id
function valorSelect(_id){
    var select=document.getElementById(_id);
    var selectedOption = select.options[select.selectedIndex];
    return selectedOption.value;
}

//regresa el valor de un input date (una fecha del calendario)
function valorCalendar(_id){
    var x = document.getElementById(_id);
    //var defaultVal = x.defaultValue;
    var currentVal = x.value;
    return currentVal
}