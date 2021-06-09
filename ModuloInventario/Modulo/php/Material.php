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
        if(buscar()){
            //consulta para insertar 
            $query= "INSERT INTO Material (Id_Material,Nombre,Unidad,Cantidad,Descripcion,Fecha_Vencido)
            VALUES ('$this->id_material','$this->nombre','$this->unidad','$this->cantidad','$this->descripcion','$this->fecha_vencido')";
            //Realizar Insert
            $resultado = mysqli_query($conexion,$query);
        }else{
            $query = "UPDATE Material SET Cantidad = Cantidad + 1 WHERE Id_Material = '$this->id_material and Cantidad > 0'"
            $resultado = mysqli($conexion,$query);
        }//fin else
        mysqli_close($conexion);
    }//fin insertar

    function actualizar(){
        $query = "UPDATE  Material SET Id_Material = '$this->id_material, Nombre = '$this->nombre', Unidad ='$this->unidad',
                  Cantidad = '$this->cantidad',Descripcion = '$this->fecha_vencido' WHERE Id_Material = '$this->id_material'";
        //Realizar Actualizacion 
        $resultado = mysqli_query ($conexion,$query);
        if (!$resultado){ echo 'Error al momdificar';} 
        else {echo 'Equipo actualizado';}
        mysqli_close($conexion);
    }//fin actualizar

    function disminuir(){
        $query = "UPDATE Material SET Cantidad = Cantidad-1 WHERE Id_Material = '$this->id_material and Cantidad > 0'"
        $resultado = mysqli($conexion,$query);
    }//fin disminuir

    function boolean buscar(){
        $query = "SELECT * FROM Material WHERE Id_Material = '$this->id_material'"
        return mysqli($conexion,$query);
    }//fin buscar
}//fin class Material
?>