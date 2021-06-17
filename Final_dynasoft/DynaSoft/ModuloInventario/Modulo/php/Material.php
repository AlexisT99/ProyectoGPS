<?php
class Material{
    //atributos
    public $id_material;
    public $nombre;
    public $cantidad;
    public $unidad;
    public $precio;
    public $descripcion;
    public $fecha_vencido;
    public $txtBuscar;
    public $id_obra;
    public $id_trabajo;
    

    /******Constructor******/ 
    function __construct($id_material,$nombre,$cantidad,$unidad,$precio,$descripcion,$fecha_vencido,$id_obra,$id_trabajo){
        $this->id_material = $id_material;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->unidad = $unidad;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->fecha_vencido = $fecha_vencido;
        $this->id_obra = $id_obra;
        $this->id_trabajo = $id_trabajo;
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

    function getPrecio(){
        return $this->precio;
    }//fin getPrecio

    function setPrecio($precio){
        $this->precio = $precio;
    }//fin setPrecio


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

    function getObra(){
        return $this->id_obra;
    }//fin getFechaVencido

    function setObra($id_obra){
        $this->id_obra = $id_obra;
    }//fin setFechaVencido

    function getTrabajo(){
        return $this->id_trabajo;
    }//fin getFechaVencido

    function setTrabajo($id_trabajo){
        $this->id_trabajo = $id_trabajo;
    }//fin setFechaVencido

/*************************** METODOS MYSQL *********************************************************************/
    function insertar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
            $query= "INSERT INTO Material (Id_Material,NOMBRE_MATERIAL,UNIDAD_MEDIDA,CANTIDAD_MATERIAL,DESCRIPCION,Fecha_Vencido)
            VALUES ('$this->id_material','$this->nombre','$this->unidad','$this->cantidad','$this->descripcion','$this->fecha_vencido')";
            $resultado = mysqli_query($conexion,$query);

        mysqli_close($conexion);
    }//fin insertar

    function insertarGasto(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
            //Se busca el total del gasto
            $query = "SELECT MONTO FROM gastos WHERE IDGASTO = '2'";
            $datos = mysqli_query($conexion,$query);
            $fila=$datos->fetch_assoc();
                    $total = $fila['MONTO'];
            //Se actualiza el total de gasto
            $total = $total + ($this->cantidad * $this->precio);
            $query = "UPDATE FROM gastos SET MONTO = $total WHERE IDGASTO = '2'";
            $datos = mysqli_query($conexion,$query);
            //Se inserta el gastoMaterial
            $query= "INSERT INTO gastos_material(IDGASTO,ID_MATERIAL,CANTIDAD_GM,PRECIO_UNITARIO_GM)  VALUES ('2','$this->id_material','$this->cantidad','$this->precio')";
            $resultado = mysqli_query($conexion,$query);

        mysqli_close($conexion);
    }//fin insertarGasto

    function actualizar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "UPDATE  Material SET ID_MATERIAL = '$this->id_material', NOMBRE_MATERIAL = '$this->nombre', UNIDAD_MEDIDA ='$this->unidad',
                  CANTIDAD_MATERIAL = '$this->cantidad',DESCRIPCION = '$this->descripcion',FECHA_VENCIDO = '$this->fecha_vencido'  WHERE ID_MATERIAL = '$this->id_material'";
        //Realizar Actualizacion 
        $resultado = mysqli_query ($conexion,$query);
        if (!$resultado){ echo 'Error al modificar';} 
        else {echo 'Equipo actualizado';}
        mysqli_close($conexion);
    }//fin actualizar
    function eliminar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "DELETE FROM Material WHERE ID_MATERIAL = '$this->id_material'";
        $resultado = mysqli_query($conexion,$query);
    }//fin disminuir
    function eliminarGM(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "DELETE FROM GASTOS_MATERIAL WHERE ID_MATERIAL = '$this->id_material'";
        $resultado = mysqli_query($conexion,$query);
    }//fin disminuir
    function eliminarMO(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "DELETE FROM material_obra WHERE ID_MATERIAL = '$this->id_material'";
        $resultado = mysqli_query($conexion,$query);
    }//fin disminuir
    function disminuir(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "UPDATE Material SET CANTIDAD_MATERIAL = CANTIDAD_MATERIAL-1 WHERE ID_MATERIAL = '$this->id_material'";
        $resultado = mysqli_query($conexion,$query);
    }//fin disminuir
    function aumentar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "UPDATE  material SET CANTIDAD_MATERIAL=(SELECT CANTIDAD_MATERIAL FROM material WHERE ID_MATERIAL = '$this->id_material')+ '$this->cantidad' ,
                  NOMBRE_MATERIAL=(SELECT NOMBRE_MATERIAL FROM material WHERE ID_MATERIAL='$this->id_material') , 
                  UNIDAD_MEDIDA=(SELECT UNIDAD_MEDIDA FROM material WHERE ID_MATERIAL='$this->id_material'),
                  DESCRIPCION=(SELECT DESCRIPCION FROM material WHERE ID_MATERIAL='$this->id_material'), 
                  FECHA_VENCIDO=( SELECT FECHA_VENCIDO FROM material WHERE ID_MATERIAL='$this->id_material') 
                  WHERE ID_MATERIAL= '$this->id_material'" ;
        
        $resultado = mysqli_query($conexion,$query);
    }//fin disminuir


/*
    function buscar(){
        $conexion = mysqli_connect("localhost","root","","inventario");
        
    }//fin buscar
*/
    function buscar($id_material){

        $conexion=mysqli_connect('localhost','root','','dynasoft');

        $txtBuscar = $_POST['txtBuscar'];
        $query="SELECT * FROM materiales WHERE ID_MATERIAL = '$txtBuscar'";
        $result=mysqli_query($conexion,$query);
    }

    function InsertarObra(){ 
    $conexion = mysqli_connect("localhost","root","",'dynasoft');
    $query= "INSERT INTO material_obra(ID_MATERIAL,ID_OBRA,IDTRABAJADOR,CANTIDAD)
    VALUES ('$this->id_material','$this->id_obra','$this->id_trabajo','$this->cantidad')";
    $resultado = mysqli_query($conexion,$query);
    
    mysqli_close($conexion);
    }
    function disminuirObra(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "UPDATE Material SET CANTIDAD_MATERIAL = CANTIDAD_MATERIAL- '$this->cantidad' WHERE ID_MATERIAL = '$this->id_material'";
        $resultado = mysqli_query($conexion,$query);
    }//fin disminuir
}//fin class Material

//$objeto1 = new Material("1234aB","Material1","3","LT","Juan bananas","2021-06-08");
//$objeto1->disminuir();
?>