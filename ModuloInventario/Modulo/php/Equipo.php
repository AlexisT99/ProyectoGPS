<?php
class Equipo{
    
    //atributos
    public $numero_serie;
    public $descripcion;
    public $caracteristicas;
    public $marca;
    public $modelo;
    public $tipo;
    public $id_mant;

    /******Constructor******/
    function __construct($numero_serie,$descripcion,$caracteristicas,$marca,$modelo,$tipo,$id_mant){
        $this->numero_serie = $numero_serie;
        $this->descripcion = $descripcion;
        $this->caracteristicas = $caracteristicas;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->id_mant = $id_mant
    }//fin del constructor

/************************Metodos get & set**********************/
    
    function getNumeroSerie(){
        return $this->numero_serie;
    }//fin getNumeroSerie

    function setNumeroSerie($numero_serie){
        $this->numero_serie = $numero_serie;
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


    function getIdMant(){
        return $this->id_mant;
    }//fin getId_Mant

    function setIdMant($id_mant){
        $this->id_mant = $id_mant;
    }//fin setId_Mant

}//fin class Equipo
?>