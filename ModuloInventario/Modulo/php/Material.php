<?php
class Material{
    //atributos
    public $idMaterial;
    public $nombre;
    public $cantidad;
    public $unidad;
    public $descripcion;
    public $fechaVencido;

    /******Constructor******/ 
    function __construct($idMaterial,$nombre,$cantidad,$unidad,$descripcion,$fechaVencido){
        $this->idMaterial = $idMaterial;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->unidad = $unidad;
        $this->descripcion = $descripcion;
        $this->fechaVencido = $fechaVencido;
    }// fin Constructor


/************************Metodos get & set**********************/

    function getIdMaterial(){
        return $this->idMaterial;
    }//fin egtIdMaterial

    function setIdMaterial($idMaterial){
        $this->IdMaterial = $idMaterial;
    }//fin setIdMaterial


    function getNombre(){
        return $this->nombre;
    }//fin getNombre

    function setNombre($nombre){
        $this->nombre = $nombre;
    }//fin setNombre


    function getCantidad(){
        return $this->cantidad;
    }//fin getCantidad

    function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }//fin setCantidad


    function getUnidad(){
        return $this->unidad;
    }//fin getUnidad

    function setUnidad($unidad){
        $this->unidad = $unidad;
    }//fin setUnidad


    function getDescripcion(){
        return $this->descripcion;
    }//fin getDescripcion

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }//fin setDescripcion


    function getFechaVencido(){
        return $this->fechaVencido;
    }//fin getFechaVencido

    function setFechaVencido($fechaVencido){
        $this->fechaVencido = $fechaVencido;
    }//fin setFechaVencido

}//fin class Material
?>