<?php
include_once("conexion.php");
include_once("modelos/empleado.php");
BD::crearInstancia();

    class ControladorEmpleados{
        public function inicio(){
            $empleados=Empleado::consultar();
            include_once("vistas/empleados/inicio.php");
        }

        public function crear(){
            if($_POST){
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                Empleado::crear($nombre,$correo);
            }
            include_once("vistas/empleados/crear.php");
        }

        public function editar(){

            if($_POST){
                Empleado::editar($_POST['id'],$_POST['nombre'],$_POST['correo']);
                header("Location: ?controlador=empleados&accion=inicio");
            }
            $id=$_GET['id'];
            $empleado=Empleado::consultarId($id);
            include_once("vistas/empleados/editar.php");
        }

        public function borrar(){
            Empleado::eliminar($_GET['id']);
            header("Location: ?controlador=empleados&accion=inicio");
        }
    }
?>