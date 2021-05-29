class moduloEquipo {
    constructor(codigo, cantidad, descripcion, caracteristicas, marca, modelo, tipo, capacidad, vUtil) {
            this._codigo = codigo
            this._cantidad = cantidad
            this._descripcion = descripcion
            this._caracteristicas = caracteristicas
            this._marca = marca
            this._modelo = modelo
            this._tipo = tipo
            this._capacidad = capacidad
            this._vUtil = vUtil
        }
        //Codigo
    set setCodigo(c) {
        this._codigo = c
    }

    get getCodigo() {
            return this._codigo
        }
        //Cantidad
    set setCantidad(c) {
        this._cantidad = c
    }

    get getCantidad() {
            return this._cantidad
        }
        //Descripcion
    set setDescripcion(c) {
        this._descripcion = c
    }

    get getDescripcion() {
            return this._descripcion
        }
        //Caracteristicas
    set setCaracteristicas(c) {
        this._caracteristicas = c
    }

    get getCaracteristicas() {
            return this._caracteristicas
        }
        //Marca
    set setMarca(c) {
        this._marca = c
    }

    get getMarca() {
            return this._marca
        }
        //Modelo
    set setModelo(c) {
        this._modelo = c
    }

    get getModelo() {
            return this._modelo
        }
        //Tipo
    set setTipo(c) {
        this._tipo = c
    }

    get getTipo() {
            return this._tipo
        }
        //Capaciad
    set setCapacidad(c) {
        this._capacidad = c
    }

    get getCapacidad() {
            return this._capacidad
        }
        //vUtili
    set setVidaUtil(c) {
        this._vUtil = c
    }

    get getVidaUtil() {
        return this._vUtil
    }

    imprimir() {
        console.log("Codigo: " + this._codigo + " Cantidad: " + this._cantidad + " Descripcion: " + this.descripcion +
            " Caracteristicas: " + this._caracteristicas + " Marca: " + this._descripcion + " Modelo: " + this._modelo +
            " Tipo: " + this._tipo + " Capacidad: " + this._capacidad + " V.Util: " + this._vUtil)
    }
}
let objetoEquipo = new moduloEquipo('123453', 3, 'Revolvedora', 'Roja', 'Tupper', 'RSS', 'TodoTerreno', 123, 2);
objetoEquipo._vUtil = 35
objetoEquipo.imprimir()