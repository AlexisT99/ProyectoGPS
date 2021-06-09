<?php
class Mantenimiento{
    
    //atributos
    public $id_mantenimiento;
    public $proveedor;
    public $fecha_prox_m;
    public $estado;
    public $observaciones;
    public $tipo_servicio;
    public $codigo_equipo;

    /******Constructor******/
    function __construct($id_mantenimiento,$proveedor,$fecha_prox_m,$estado,$observaciones,$tipo_servicio,$codigo_equipo){
        $this->id_mantenimiento = $id_mantenimiento;
        $this->proveedor = $proveedor;
        $this->fecha_prox_m = $fecha_prox_m;
        $this->estado = $estado;
        $this->observaciones = $observaciones;
        $this->tipo_servicio = $tipo_servicio;
        $this->codigo_equipo = $codigo_equipo;
    }//fin del constructor

/************************Metodos get & set**********************/
    
    function getIdMantenimiento(){
        return $this->id_mantenimiento;
    }//fin getIdMantenimiento

    function setIdMantenimiento($id_mantenimiento){
        $this->id_mantenimiento = $id_mantenimiento;
    }//fin setIdMantenimiento
   
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

    function getCodigoEquipo(){    
        return $this->codigo_equipo;
    }//fin getCodigoEquipo

    function setCodigoEquipo($codigo_equipo){
        $this->codigo_equipo = $codigo_equipo;
    }//fin setCodigoEquipo
/*********************************METODOS MYSQL************************************************************/
    function insertar(){
        //inserar a la base de datos un Mantenimiento
        $query = "INSERT INTO Mantenimiento(Proveedor,Fecha_Prox_M,Estado,Observaciones,Tipo_Servicio,Codigo_Equipo) 
            VALUES('$this->proveedor','$this->fecha_prox_m','$this->estado','$this->observaciones','$this->tipo_servicio','$this->codigo_equipo')";
        $resultado = mysqli_query ($conexión,$query );
    }//fin insertar

    function actualizar(){
        $query = "UPDATE Mantenimiento 
            SET Proveedor  = '$this->proveedor', Fecha_Prox_M = '$this->fecha_prox_m', Estado = '$this->estado', Observaciones = '$this->observaciones', Tipo_Servicio = '$this->tipo_servicio', Codigo_Equipo = '$this->codigo_equipo'
            WHERE Id_Mant = '$this->id_mantenimiento'";
        $resultado = mysqli_query ($conexión,$query );
    }//fin actualizar

    function eliminar(){
        $query  = "DELETE FROM Mantenimiento WHERE Id_Mant = '$this->id_mantenimiento'";
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar
}//fin class Mantenimiento
?>