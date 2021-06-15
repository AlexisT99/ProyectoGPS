class  moduloMateriales   {
    constructor ( codigo ,  cantidad ,  descripcion ,  caracteristicas ,  marca ,  area ,  tipo ,  peso ,  caducidad )  {
            this . _codigo  =  codigo
            this . _cantidad  =  cantidad
            this . _descripcion  =  descripcion
            this . _caracteristicas  =  caracteristicas
            this . _marca  =  marca
            this . _area  =  area
            this. _tipo  =  tipo
            this . _peso  =  peso
            this. _caducidad  =  caducidad
        }
        // Codigo
    set  setCodigo ( c )  {
        this. _codigo  =  c
    }

    get  getCodigo ( )  {
            return this. _codigo
        }
        // Cantidad prueba 
    set  setCantidad ( c )  {
        this._cantidad  =  c
    }

    get  getCantidad ( )  {
            return  this. _cantidad
    }
    // Descripcion
    set  setDescripcion ( c )  {
        this . _descripcion  =  c
    }

    get  getDescripcion ( )  {
        return this. _descripcion
        }
        // Caracteristicas
    set  setCaracteristicas ( c )  {
        this. _caracteristicas  =  c
    }

    get  getCaracteristicas ( )  {
            return this. _caracteristicas
        }
        // marca
    set  setMarca ( c )  {
        this. _marca  =  c
    }

    get  getMarca ( )  {
            return this. _marca
        }
        // area
    set setArea ( c )  {
        this. _area  =  c
    }

    get  getArea ( )  {
            return  this. _area
        }
        // Tipo
    set  setTipo ( c )  {
        this. _tipo  =  c
    }

    get  getTipo ( )  {
            return this. _tipo
        }
        // Capaciad
    set  setPeso ( c )  {
        this. _peso  =  c
    }

    get  getPeso ( )  {
            return  this._peso
        }
        // caducidadi
    set  setCaducidad ( c )  {
        this. _caducidad  =  c
    }


    get  getCaducidad ( )  {
        return  this. _caducidad
    }

    imprimir ()  {
        consola . log ( "Codigo:"  +  this . _codigo  +  "Cantidad:"  +  this . _cantidad  +  "Descripcion:"  +  this . descripcion  +
            "Caracteristicas:"  +  this . _caracteristicas  +  "marca:"  +  this . _descripcion  +  "area:"  +  this . _area  +
            "Tipo:"  +  this . _tipo  +  "peso:"  +  this. _peso  +  "caducidad:"  +  this._caducidad )
    }
}
let  objetoEquipo  =  new  moduloEquipo ( '1111' ,  100 ,  'Mortero' ,  'secado rapido' ,  'Azul' ,  'Enjarres' ,  'sr' ,  50 ,  2 ) ;
objetoEquipo . _caducidad  =  10
objetoEquipo . imprimir ()