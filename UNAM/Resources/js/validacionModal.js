function registrar(){

        
        validacionNombres();
      
        
        
        var Nombres = validacionNombres();
      
    
     if( Nombres == 1 ){
    
        var dataNombre = document.getElementById('validationCustom01').value;
      
          

         
        }else{
           swal({
            type: 'error',
            title: 'Oops...',
            text: 'Verifique sus campos',
            })
        }

}

//Funciones unitarias


function validacionNombres(){
   var contenido = document.getElementById('validationCustom01');

    if(contenido.value == "" ){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Seleccione un Nombre!',
            })
         contenido.style.borderColor =  "#ff0000";
        return 0;
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1;

    }
}
