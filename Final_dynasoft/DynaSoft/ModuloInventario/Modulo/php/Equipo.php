<?php
include 'ChromePhp.php';
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
        $query = "INSERT INTO EQUIPO VALUES('$this->codigo_equipo','1','$this->descripcion','$this->caracteristicas','$this->marca','$this->modelo','$this->tipo','D')";
        ChromePhp::log($query);
        $resultado = mysqli_query ($conexion,$query );
        $query= "INSERT INTO gastos (IDGASTO, IDTRABAJADOR, FECHAGASTO, MONTO, DESCRIPCION) 
            VALUES ('2', '1', '2021-06-18', '70', 'Gasto de compra')";
            $resultado = mysqli_query($conexion,$query);
    }//fin insertar
    function insertarGasto(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
            //Se busca el total del gasto
            $query = "SELECT MONTO FROM gastos WHERE IDGASTO = '2'";
            $datos = mysqli_query($conexion,$query);
            $fila=$datos->fetch_assoc();
                    $total = $fila['MONTO'];
            //Se actualiza el total de gasto
            $preciofloat = floatval($this->precio);
            $totalfloat = (floatval($total) + floatval($this->precio));
            $query = "UPDATE gastos SET MONTO = $totalfloat WHERE IDGASTO = '2'";
            $datos = mysqli_query($conexion,$query);
            //Se inserta el gastoEquipo
            $query= "INSERT INTO solicitudes_gastos (IDTRABAJADOR, IDGASTO, ESTADOSOLICITUD) VALUES ('1', '2', 'E')";
            $resultado = mysqli_query($conexion,$query);
            $query= "INSERT INTO GASTOS_EQUIPO (IDGASTO,CODIGO_EQUIPO,CANTIDAD_GE,PRECIO_UNITARIO_GE) 
             VALUES ('2','$this->codigo_equipo', '1' ,'$this->precio')";
            ChromePhp::log($query);
            $resultado = mysqli_query($conexion,$query);

    }//fin insertarGasto
    function insertarGastoC(){
        
    }
    

    function actualizar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query = "UPDATE Equipo  SET CARACTERISTICAS  = '$this->caracteristicas', MARCA_EQUIPO = '$this->marca', MODELO_EQUIPO = '$this->modelo', TIPO_EQUIPO = '$this->tipo',
            DESCRIPCION_EQUIPO = '$this->descripcion' WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
            ChromePhp::log($query);
           $resultado = mysqli_query ($conexion,$query );
    }//fin actualizar

    function eliminar(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query  = "DELETE FROM  Equipo WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        ChromePhp::log($query);
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar
    
    function eliminarGE(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query  = "DELETE FROM GASTOS_EQUIPO WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        ChromePhp::log($query);
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar

    function eliminarEO(){
        $conexion = mysqli_connect("localhost","root","",'dynasoft');
        $query  = "DELETE FROM equipo_obra WHERE CODIGO_EQUIPO = '$this->codigo_equipo'";
        ChromePhp::log($query);
        $resultado = mysqli_query($conexion,$query);
    }//fin elimininar

}//fin class Equipo


//$objeto1 = new Equipo("1234A","Equipo de pepito","Alto y moreno","Nissan","2014","No");
//$objeto1->insertar();
?>