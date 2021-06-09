<?php
class Seguro{
    
    //atributos
    public $id_seguro;
    public $codigo_equipo;
    public $fecha_vencido;
    public $costo_seguro;

    /******Constructor******/
    function __construct($id_seguro,$codigo_equipo,$fecha_vencido,$costo_seguro){
        $this->id_seguro = $id_seguro;
        $this->codigo_equipo = $codigo_equipo;
        $this->fecha_vencido = $fecha_vencido;
        $this->costo_seguro = $costo_seguro;
    }//fin del constructor

/************************Metodos get & set**********************/
    
    function getIdSeguro(){
        return $this->id_seguro;
    }//fin getIdSeguro

    function setIdSeguro($id_seguro){
        $this->id_seguro = $id_seguro;
    }//fin setIdSeguro

   
    function getCodigoEquipo(){  
        return $this->codigo_equipo;
    }//fin getCodigoEquipo
    
    function setCodigoEquipo($codigo_equipo){
        $this->codigo_equipo = $codigo_equipo;
    }//fin setCodigoEquipo


    function getFechaVencido(){    
        return $this->fecha_vencido;
    }//fin getFechaVencido

    function setFechaVencido($fecha_vencido){
        $this->fecha_vencido = $fecha_vencido;
    }//fin setFechaVencido

    function getCostoSeguro(){    
        return $this->costo_seguro;
    }//fin getCostoSeguro

    function setCostoSeguro($costo_seguro){
        $this->costo_seguro = $costo_seguro;
    }//fin setCostoSeguro
/*********************************METODOS MYSQL************************************************************/
    function insertar(){
        //insserar a la base de datos un Seguro
        $query = "INSERT INTO Seguro(Codigo_Equipo,Fecha_Vencido,Costo_Seguro) VALUES('$this->codigo_equipo','$this->fecha_vencido','$this->costo_seguro')";
        $resultado = mysqli_query ($conexion,$query );
    }//fin insertar

    function actualizar(){
        $query = "UPDATE Seguro  SET Codigo_Equipo  = '$this->codigo_equipo', Fecha_Vencido = '$this->fecha_vencido', Costo_Seguro = '$this->costo_seguro'
            WHERE Id_Seguro = '$this->id_seguro'";
        $resultado = mysqli_query ($conexion,$query );
    }//fin actualizar

    function eliminar(){
        $query  = "DELETE FROM  Seguro WHERE Id_Seguro = '$this->id_seguro'";
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar
}//fin class Seguro
?>