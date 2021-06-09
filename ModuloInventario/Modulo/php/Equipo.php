<?php

class Equipo{
    
    //atributos
    public $codigo_equipo;
    public $descripcion;
    public $caracteristicas;
    public $marca;
    public $modelo;
    public $tipo;

    //varibles globales
    $conexion;
    /******Constructor******/
    function __construct($codigo_equipo,$descripcion,$caracteristicas,$marca,$modelo,$tipo){
        $this->codigo_equipo = $codigo_equipo;
        $this->descripcion = $descripcion;
        $this->caracteristicas = $caracteristicas;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
    }//fin del constructor

/************************Metodos get & set**********************/
    
    function getNumeroSerie(){
        return $this->codigo_equipo;
    }//fin getNumeroSerie

    function setNumeroSerie($codigo_equipo){
        $this->codigo_equipo = $codigo_equipo;
    }//fin setNumeroSerie

   
    function getDescripcion(){  
        return $this->descripcion;
    }//fin getDescripcion
    
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }//fin setDescripcion


    function getCaracteristicas(){    
        return $this->caracteristicas;
    }//fin getCaracteristicas

    function setCaracteristicas($caracteristicas){
        $this->caracteristicas = $caracteristicas;
    }//fin setCaracteristicas


    function getMarca(){    
        return $this->marca;
    }//fin getMarca

    function setMarca($marca){
        $this->marca = $marca;
    }//fin setMarca


    function getModelo(){
        return $this->modelo;
    }//fin getModelo

    function setModelo($modelo){
        $this->modelo = $modelo;
    }//fin setModelo


    function getTipo(){
        return $this->tipo;
    }//fin getTipo

    function setTpo($tipo){
        $this->tipo = $tipo;
    }//fin setTipo
/*********************************METODOS MYSQL************************************************************/
    function insertar(){
        //insserar a la base de datos un equipo
        $query = "INSERT INTO Equipo VALUES('$this->codigo_equipo','$this->descripcion','$this->caracteristicas','$this->marca','$this->modelo','$this->tipo')";
        $resultado = mysqli_query ($conexión,$query );
    }//fin insertar

    function actualizar(){
        $query = "UPDATE Equipo  SET Caracteristicas  = '$this->caracteristicas', Marca = '$this->marca', Modelo = '$this->modelo', Tipo = '$this->tipo'
           ,Descripcion = '$this->descripcion' WHERE Codigo_Equipo = '$this->codigo_Equipo'";
           $resultado = mysqli_query ($conexión,$query );
    }//fin actualizar

    function eliminar(){
        $query  = "DELETE FROM  Equipo WHERE Codigo_Equipo = '$this->codigo_equipo'";
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar
    
}//fin class Equipo
?>