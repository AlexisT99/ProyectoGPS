//Función que manda el texto del combobox al input invisible
    var cajaTexto = document.getElementById('tipo');
    var cmbbox = document.getElementById('dropdownB');
    let texto;

//Bloquea por default las opciones 
    document.getElementById('nombre').disabled = false;
    document.getElementById('descripcion').disabled = true;  
    document.getElementById('marca').disabled = true;
    document.getElementById('modelo').disabled = true;  
    document.getElementById('almacen').disabled = true;
    document.getElementById('cantidad').disabled = true;  
    document.getElementById('capacidad').disabled = true; 
    document.getElementById("btnGuardar").disabled = true;
//Al cambiar la selección del comboBox pasa el texto al input
//y bloquea los campos
    cmbbox.onchange = function(){
        if(this.value=="text1"){
            texto="Equipo";
            document.getElementById('nombre').disabled = false;
            document.getElementById('descripcion').disabled = false;  
            document.getElementById('marca').disabled = false;
            document.getElementById('modelo').disabled = false;  
            document.getElementById('almacen').disabled = false;
            document.getElementById('cantidad').disabled = true;
            document.getElementById('capacidad').disabled = true;
            document.getElementById("btnGuardar").disabled = false;
            
        }
        else if (this.value=="text2"){
            texto="Consumible";
            document.getElementById('nombre').disabled = false;
            document.getElementById('descripcion').disabled = false;  
            document.getElementById('marca').disabled = false;
            document.getElementById('modelo').disabled = false;  
            document.getElementById('almacen').disabled = false;
            document.getElementById('cantidad').disabled = false;
            document.getElementById('capacidad').disabled = false; 
            document.getElementById("btnGuardar").disabled = false;
                       
        }
        else if (this.value=="text3"){
            texto="Refaccion";
            document.getElementById('nombre').disabled = false;
            document.getElementById('descripcion').disabled = false;  
            document.getElementById('marca').disabled = false;
            document.getElementById('modelo').disabled = false;  
            document.getElementById('almacen').disabled = false;
            document.getElementById('cantidad').disabled = false;
            document.getElementById('capacidad').disabled = true;
            document.getElementById("btnGuardar").disabled = false;
            
               
        }
        else if (this.value=="text4"){
            texto="Herramienta";
            document.getElementById('nombre').disabled = false;
            document.getElementById('descripcion').disabled = false;  
            document.getElementById('marca').disabled = false;
            document.getElementById('modelo').disabled = false;  
            document.getElementById('almacen').disabled = false;
            document.getElementById('cantidad').disabled = false;
            document.getElementById('capacidad').disabled = true;
            document.getElementById("btnGuardar").disabled = false;


        }
        else if (this.value=="text0"){
            texto="";
            document.getElementById('nombre').disabled = false;
            document.getElementById('descripcion').disabled = true;  
            document.getElementById('marca').disabled = true;
            document.getElementById('modelo').disabled = true;  
            document.getElementById('almacen').disabled = true;
            document.getElementById('cantidad').disabled = true;  
            document.getElementById('capacidad').disabled = true; 
            document.getElementById("btnGuardar").disabled = true;

        } 
        cajaTexto.value="";
        cajaTexto.value = cajaTexto.value  + texto; 
    }//Función  validar combo

//Función para restringir el llenado de campos si se elige una opción específica
