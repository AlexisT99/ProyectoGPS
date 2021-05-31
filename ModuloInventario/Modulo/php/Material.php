<?php
class Material{
    //atributos
    public $id_material;
    public $nombre;
    public $cantidad;
    public $unidad;
    public $descripcion;
    public $fecha_vencido;

    /******Constructor******/ 
    function __construct($id_material,$nombre,$cantidad,$unidad,$descripcion,$fecha_vencido){
        $this->id_material = $id_material;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->unidad = $unidad;
        $this->descripcion = $descripcion;
        $this->fecha_vencido = $fecha_vencido;
    }// fin Constructor
    
    
/************************Metodos get & set**********************/

    function getIdMaterial(){
        return $this->id_material;
    }//fin egtIdMaterial

    function setIdMaterial($id_material){
        $this->id_material = $id_material;
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
        return $this->fecha_vencido;
    }//fin getFechaVencido

    function setFechaVencido($fecha_vencido){
        $this->fecha_vencido = $fecha_vencido;
    }//fin setFechaVencido

}//fin class Material
?>