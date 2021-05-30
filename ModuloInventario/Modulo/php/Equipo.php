<?php
class Equipo{
    
    //atributos
    public $numeroSerie;
    public $descripcion;
    public $caracteristicas;
    public $marca;
    public $modelo;
    public $tipo;
    public $idMant;

    /******Constructor******/
    function __construct($numeroSerie,$descripcion,$caracteristicas,$marca,$modelo,$tipo,$idMant){
        $this->numeroSerie = $numeroSerie;
        $this->descripcion = $descripcion;
        $this->caracteristicas = $caracteristicas;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        $this->idMant = $idMant
    }//fin del constructor

/************************Metodos get & set**********************/
    
    function getNumeroSerie(){
        return $this->numeroSerie;
    }//fin getNumeroSerie

    function setNumeroSerie($numeroSerie){
        $this->numeroSerie = $numeroSerie;
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
        return $this->idMant;
    }//fin getId_Mant

    function setId_Mant($idMant){
        $this->idMant = $idMant;
    }//fin setId_Mant

}//fin class Equipo
?>