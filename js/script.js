
// Funcion que valida si el nombre esta en un formato valido

window.onload = function () {

    document.form_contact.nombre.focus();
    
    document.form_contact.addEventListener('submit', validarFormulario);
    
    }

function funcion1(){

const input = document.forms['nombre'];

const patron = new RegExp('^[A-Z]+$', 'i');

    if(!patron.test(nombre.value)){

        alert("El nombre debe contener solo letras");
        nombre.style.borderColor = 'salmon';

    } 

    else{

        
     validar_email(document.getElementById('correo').value);
       

    }if(patron.test(nombre.value)){
      
        tipo_documento(); 

    }else{
     
    

    }

}

// funcion que valida el formato del del email

function validar_email(correo){

    const input = document.getElementById('correo');
    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    
    var esValido = expReg.test(correo);
    if(esValido == true){

    }else{

    alert("El correo electronico no es valido");
    input.style.borderColor = 'salmon';
    }

}

// funcion que valida que el select no este vacio

function tipo_documento(){
    var op = document.getElementById('tipodocumento');
    if(op.value==0 || op.value == "")
      {
       alert("Selecciona Una opción");
       op.style.borderColor = 'salmon';
     
      }
    }



function validarFormulario(evObject) {

        evObject.preventDefault();
        
        var todoCorrecto = true;
        
        var formulario = document.form_contact;
        
        for (var i=0; i<formulario.length; i++) {
        
                        if(formulario[i].type =='text') {
        
                                       if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
        
                                       alert (formulario[i].name+ 'Ningún campo puede estar vacío o contener sólo espacios en blanco');
        
                                       todoCorrecto=false;
        
                                       }
        
                        }
        
                    } if (todoCorrecto ==true) {formulario.submit();}

}

    /* Creado por Nicolas Gomez Z todos los derechos reservados */


