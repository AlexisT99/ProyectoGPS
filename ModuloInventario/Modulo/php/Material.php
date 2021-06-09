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

/*************************** METODOS MYSQL *********************************************************************/
    function insertar(){
        $conexion = mysqli_connect("localhost","root","","inventario");
        $query = "SELECT * FROM Material WHERE ID_MATERIAL = '$this->id_material'";
        $HOLA = mysqli_query($conexion,$query);
        
        if(!$HOLA){
            //consulta para insertar 
            $query= "INSERT INTO Material (Id_Material,NOMBRE_MATERIAL,UNIDAD_MEDIDA,CANTIDAD_MATERIAL,DESCRIPCION,Fecha_Vencido)
            VALUES ('$this->id_material','$this->nombre','$this->unidad','$this->cantidad','$this->descripcion','$this->fecha_vencido')";
            //Realizar Insert
            $resultado = mysqli_query($conexion,$query);
        }else{
            $query = "UPDATE Material SET CANTIDAD_MATERIAL = CANTIDAD_MATERIAL + 1 WHERE Id_Material = '$this->id_material and CANTIDAD_MATERIAL > 0'";
            $resultado = mysqli_query($conexion,$query);
        }//fin else
        mysqli_close($conexion);
    }//fin insertar

    function actualizar(){
        $conexion = mysqli_connect("localhost","root","","inventario");
        $query = "UPDATE  Material SET ID_MATERIAL = '$this->id_material', NOMBRE_MATERIAL = '$this->nombre', UNIDAD_MEDIDA ='$this->unidad',
                  CANTIDAD_MATERIAL = '$this->cantidad',DESCRIPCION = '$this->descripcion' WHERE ID_MATERIAL = '$this->id_material'";
        //Realizar Actualizacion 
        $resultado = mysqli_query ($conexion,$query);
        if (!$resultado){ echo 'Error al modificar';} 
        else {echo 'Equipo actualizado';}
        mysqli_close($conexion);
    }//fin actualizar

    function disminuir(){
        $conexion = mysqli_connect("localhost","root","","inventario");
        $query = "UPDATE Material SET CANTIDAD_MATERIAL = CANTIDAD_MATERIAL-1 WHERE ID_MATERIAL = '$this->id_material'";
        $resultado = mysqli_query($conexion,$query);
    }//fin disminuir
/*
    function buscar(){
        $conexion = mysqli_connect("localhost","root","","inventario");
        
    }//fin buscar
*/
}//fin class Material

$objeto1 = new Material("1234aB","Material1","3","LT","Juan bananas","2021-06-08");
$objeto1->disminuir();
?>