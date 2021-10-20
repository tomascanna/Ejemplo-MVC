<?php

class Empleado{

    public $id;
    public $nombre;
    public $correo;

    public function __construct($id,$nombre,$correo){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public static function consultar(){
        $listaEmpleados = [];
        $conexion=BD::crearInstancia();
        $sql = $conexion->query("SELECT * FROM empleados");

        foreach($sql->fetchAll() as $empleados){ 
            $listaEmpleados [] =  new Empleado($empleados['id'],$empleados['nombre'],$empleados['correo']);
        }
        return $listaEmpleados;
    }

    public static function consultarId($id){
        $conexion=BD::crearInstancia();
        $sql = $conexion->prepare(" SELECT * FROM empleados WHERE id=?");
        $sql->execute(array($id));
        $empleado = $sql->fetch();
        
        return new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);;
    }

    public static function crear($nombre,$correo){

        $conexion=BD::crearInstancia();

        $sql = $conexion->prepare("INSERT INTO empleados(nombre,correo) VALUES(?,?)");
        $sql->execute(array($nombre,$correo));

    }

    public static function eliminar($id){
        $conexion=BD::crearInstancia();
        $sql = $conexion->prepare("DELETE FROM empleados WHERE id = ?");
        $sql->execute(array($id));

    }

    public static function editar($id,$nombre,$correo){
        $conexion=BD::crearInstancia();
        $sql = $conexion->prepare("UPDATE empleados SET nombre=?,correo=? WHERE id = ?");
        $sql->execute(array($nombre,$correo,$id));
    }

}

?>