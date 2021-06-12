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
        $conexion = mysqli_connect("localhost","root","","inventario");
        //insserar a la base de datos un Seguro
        $query = "INSERT INTO Seguro VALUES('$this->id_seguro','$this->codigo_equipo','$this->fecha_vencido','$this->costo_seguro')";
        $resultado = mysqli_query ($conexion,$query );
    }//fin insertar
    function insertarGastoS(){
        $conexion = mysqli_connect("localhost","root","","inventario");
            $query= "INSERT INTO gastos_seguro (ID_SEGURO,MONTO_SEGURO)  VALUES ('$this->id_seguro','$this->costo_seguro')";
            $resultado = mysqli_query($conexion,$query);
    }//fin insertarGasto

    function actualizar(){
        $conexion = mysqli_connect("localhost","root","","inventario");
        $query = "UPDATE Seguro  SET CODIGO_EQUIPO  = '$this->codigo_equipo', FECHA_VENCIDO = '$this->fecha_vencido', COSTO_SEGURO = '$this->costo_seguro'
            WHERE ID_SEGURO = '$this->id_seguro'";
        $resultado = mysqli_query ($conexion,$query );
    }//fin actualizar

    function eliminar(){
        $conexion = mysqli_connect("localhost","root","","inventario");
        $query  = "DELETE FROM  Seguro WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar
}//fin class Seguro
/*
$objeto1 = new Seguro("1","1234A","2021/06/09","13");
$objeto1->insertar();*/
?>