<?php

class Equipo{
    
    //atributos
    public $codigo_equipo;
    public $descripcion;
    public $caracteristicas;
    public $marca;
    public $modelo;
    public $precio;
    public $tipo;

    //varibles globales
    
    /******Constructor******/
    function __construct($codigo_equipo,$descripcion,$caracteristicas,$marca,$modelo,$precio,$tipo){
        $this->codigo_equipo = $codigo_equipo;
        $this->descripcion = $descripcion;
        $this->caracteristicas = $caracteristicas;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->tipo = $tipo;
    }//fin del constructor

/************************Metodos get & set**********************/
    
    function getCodigoEquipo(){
        return $this->codigo_equipo;
    }//fin getNumeroSerie

    function setCodigoEquipo($codigo_equipo){
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

    function getPrecio(){
        return $this->precio;
    }//fin getPrecio

    function setPrecio($precio){
        $this->precio = $precio;
    }//fin setPrecio

    function getTipo(){
        return $this->tipo;
    }//fin getTipo

    function setTpo($tipo){
        $this->tipo = $tipo;
    }//fin setTipo

/*********************************METODOS MYSQL************************************************************/
    function insertar(){
        $conexion = mysqli_connect('localhost','root','','dynasoft');
        //insserar a la base de datos un equipo
        $query = "INSERT INTO EQUIPO VALUES('$this->codigo_equipo','$this->descripcion','$this->caracteristicas','$this->marca','$this->modelo','$this->tipo','D')";
        $resultado = mysqli_query ($conexion,$query );
    }//fin insertar
    function insertarGasto(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
            $query= "INSERT INTO GASTOS_EQUIPO (CODIGO_EQUIPO,CANTIDAD_GE,PRECIO_UNITARIO_GE)  VALUES ('$this->codigo_equipo', 1 ,'$this->precio')";
            $resultado = mysqli_query($conexion,$query);
    }//fin insertarGasto

    function actualizar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "UPDATE Equipo  SET CARACTERISTICAS  = '$this->caracteristicas', MARCA_EQUIPO = '$this->marca', MODELO_EQUIPO = '$this->modelo', TIPO_EQUIPO = '$this->tipo',
            DESCRIPCION_EQUIPO = '$this->descripcion' WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
           $resultado = mysqli_query ($conexion,$query );
    }//fin actualizar

    function eliminar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query  = "DELETE FROM  Equipo WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar
    
    function eliminarGE(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query  = "DELETE FROM GASTOS_EQUIPO WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar

}//fin class Equipo


//$objeto1 = new Equipo("1234A","Equipo de pepito","Alto y moreno","Nissan","2014","No");
//$objeto1->insertar();
?>