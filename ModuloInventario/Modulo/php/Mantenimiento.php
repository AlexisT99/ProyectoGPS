<?php
class Mantenimiento{
    
    //atributos
    public $proveedor;
    public $fecha_prox_m;
    public $estado;
    public $observaciones;
    public $tipo_servicio;
    public $precio;
    public $codigo_equipo;

    /******Constructor******/
    function __construct($proveedor,$fecha_prox_m,$estado,$observaciones,$tipo_servicio,$precio,$codigo_equipo){
        $this->proveedor = $proveedor;
        $this->fecha_prox_m = $fecha_prox_m;
        $this->estado = $estado;
        $this->observaciones = $observaciones;
        $this->tipo_servicio = $tipo_servicio;
        $this->precio=$precio;
        $this->codigo_equipo = $codigo_equipo;
    }//fin del constructor

/************************Metodos get & set**********************/
    function getProveedor(){  
        return $this->proveedor;
    }//fin getProveedor
    
    function setProveedor($proveedor){
        $this->proveedor = $proveedor;
    }//fin setProveedor

    function getFechaProximaM(){    
        return $this->fecha_prox_m;
    }//fin getFechaProximaM

    function setFechaProximaM($fecha_prox_m){
        $this->fecha_prox_m = $fecha_prox_m;
    }//fin setFechaProximaM

    function getEstado(){    
        return $this->estado;
    }//fin getEstado

    function setEstado($estado){
        $this->estado = $estado;
    }//fin setEstado

    function getObservaciones(){    
        return $this->observaciones;
    }//fin getObservaciones

    function setObservaciones($observaciones){
        $this->observaciones = $observaciones;
    }//fin setObservaciones

    function getTipoServicio(){    
        return $this->tipo_servicio;
    }//fin getTipoServicio

    function setTipoServicio($tipo_servicio){
        $this->tipo_servicio = $tipo_servicio;
    }//fin setTipoServicio

    function getPrecio(){
        return $this->precio;
    }//fin getPrecio

    function setPrecio($precio){
        $this->precio = $precio;
    }//fin setPrecio

    function getCodigoEquipo(){    
        return $this->codigo_equipo;
    }//fin getCodigoEquipo

    function setCodigoEquipo($codigo_equipo){
        $this->codigo_equipo = $codigo_equipo;
    }//fin setCodigoEquipo
/*********************************METODOS MYSQL************************************************************/
    function insertar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        //inserar a la base de datos un Mantenimiento
        $query = "INSERT INTO Mantenimiento(Proveedor,Fecha_Prox_M,Estado,Observaciones,Tipo_Servicio,Codigo_Equipo) 
            VALUES('$this->proveedor','$this->fecha_prox_m','$this->estado','$this->observaciones','$this->tipo_servicio','$this->codigo_equipo')";
        $resultado = mysqli_query ($conexion,$query );
    }//fin insertar

    function insertarGastoM(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
            $query= "INSERT INTO costomantener (ID_MANTENIMIENTO,CODIGO_EQUIPO,MONTO_MANTENER)  VALUES ((SELECT ID_MANTENIMIENTO FROM Mantenimiento WHERE CODIGO_EQUIPO ='$this->codigo_equipo' ),'$this->codigo_equipo','$this->precio')";
            $resultado = mysqli_query($conexion,$query);
    }//fin insertarGastoM

    function actualizar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "UPDATE Mantenimiento SET PROVEEDOR = '$this->proveedor', FECHA_PROX_M = '$this->fecha_prox_m', ESTADO = '$this->estado', OBSERVACIONES = '$this->observaciones', TIPO_SERVICIO = '$this->tipo_servicio'
            WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        $resultado = mysqli_query ($conexion,$query);
    }//fin actualizar

    function eliminar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query  = "DELETE FROM Mantenimiento WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar

    function eliminarCM(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query  = "DELETE FROM COSTOMANTENER WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar

}//fin class Mantenimiento

//$objeto1 = new Mantenimiento("12AB","Pepe","2021-06-08","Soltero","Ninguna","A","1234A");

//$objeto1->insertar();

?>