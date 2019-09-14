function registrar(){

        
        validacionClave();
        validacionProducto();
        validacionYuanes();
        validacionPesos();
        validacionCanal();
        validacionCliente();
        validacionUnidades();
        validacionComisiones();
        validacionPago();
        validacionVenta();
        validacionCostot();
        validacionUtilidad();
        validacionFolio()
        
        
        var Clave = validacionClave();
        var Producto = validacionProducto();
        var Yuanes = validacionYuanes();
        var Pesos = validacionPesos();
        var Canal = validacionCanal();
        var Cliente = validacionCliente();
        
        var Unidades = validacionUnidades();
        var Comisiones = validacionComisiones();
        var Pago = validacionPago();
        var Venta = validacionVenta();
        var Costot =  validacionCostot();
        var Utilidad = validacionUtilidad();
        var folio = validacionFolio()
    
     if( Clave == 1 && Producto == 1  && Yuanes == 1 && Pesos == 1 && Canal == 1 && Cliente == 1  && Unidades == 1 && Comisiones == 1 && Pago == 1 && Venta == 1 && Costot == 1 && Utilidad == 1 && folio == 1){
    
        var dataClave = document.getElementById('validationCustom01').value;
        var dataProducto = document.getElementById('validationCustom02').value;
        var dataYuanes = document.getElementById('validationCustom03').value;
        var dataPesos = document.getElementById('validationCustom04').value;
        var dataCanal = document.getElementById('validationCustom05').value;
        var dataCliente = document.getElementById('validationCustom06').value;
        
        var dataUnidades = document.getElementById('validationCustom07').value;
        var dataComisiones = document.getElementById('validationCustom08').value;
        var dataPago = document.getElementById('validationCustom09').value;
        var dataVenta = document.getElementById('validationCustom10').value;
        var dataCostot = document.getElementById('validationCustom11').value;
        var dataUtilidad = document.getElementById('validationCustom12').value;
        var dataFolio = document.getElementById('validationCustom13').value;

          

         
        }else{
           swal({
            type: 'error',
            title: 'Oops...',
            text: 'Verifique sus campos',
            })
        }

}

//Funciones unitarias


function validacionClave(){
   var contenido = document.getElementById('validationCustom02');

    if(contenido.value == "" ){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Seleccione una Clave!',
            })
         contenido.style.borderColor =  "#ff0000";
        return 0;
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1;

    }
}

function validacionProducto(){
   var contenido = document.getElementById('validationCustom03');

    if(contenido.value == "" ){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Seleccione un producto por favor!',
            })
         contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}
function validacionYuanes(){
   var contenido = document.getElementById('validationCustom03');

    if(contenido.value == "" ){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Los campos no estar vacios!',
            })
         contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}

function validacionPesos(){
   var contenido = document.getElementById('validationCustom04');

    if(contenido.value == "" ){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Los campos no estar vacios!',
            })
         contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}


function validacionCanal(){
   var contenido = document.getElementById('validationCustom05');

    if(contenido.value == "" ){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Seleccione un Canal de Venta!',
            })
         contenido.style.borderColor =  "#ff0000";
        return 0;
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1;

    }
}

function validacionCliente(){
   var contenido = document.getElementById('validationCustom06');

    if(contenido.value == ""){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Ingrese nombre del cliente',
            })
        contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}


function validacionUnidades(){
   var contenido = document.getElementById('validationCustom07');

    if(contenido.value < 0 || contenido.value == "" || isNaN(contenido.value)){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'No es posible ingresar números negativos, campos vacios vacios o letras!',
            })
        contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}

function validacionComisiones(){
   var contenido = document.getElementById('validationCustom08');

    if(contenido.value < 0 || contenido.value == "" || isNaN(contenido.value)){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Los campos no estar vacios!',
            })

         contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}

function validacionPago(){
   var contenido = document.getElementById('validationCustom09');

    if(contenido.value < 0 || contenido.value == "" || isNaN(contenido.value)){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Los campos no estar vacios!',
            })
        contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}

function validacionVenta(){
   var contenido = document.getElementById('validationCustom10');

    if(contenido.value < 0 || contenido.value == "" || isNaN(contenido.value)){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Los campos no estar vacios!',
            })

        contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}

function validacionCostot(){
   var contenido = document.getElementById('validationCustom11');

     if(contenido.value < 0 || contenido.value == "" || isNaN(contenido.value)){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Los campos no estar vacios!',
            })

        contenido.style.borderColor =  "#ff0000";
         return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}

function validacionUtilidad(){
   var contenido = document.getElementById('validationCustom12');

     if(contenido.value < 0 || contenido.value == "" || isNaN(contenido.value)){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Los campos no estar vacios!',
            })

         contenido.style.borderColor =  "#ff0000";
         return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}

function validacionFolio(){
   var contenido = document.getElementById('validationCustom13');

    if(contenido.value == ""){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Ingrese Folio',
            })
        contenido.style.borderColor =  "#ff0000";
        return 0
    }else{
         contenido.style.borderColor =  "#04ff82";
        return 1
    }
}



