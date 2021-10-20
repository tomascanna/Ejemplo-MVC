<?php
/*se encarga de cambiar de controles y acceder a ciertas acciones*/

    if(file_exists("controlador/controlador_".$controlador.".php")){
        include_once("controlador/controlador_".$controlador.".php");

        $objControlador = "Controlador".ucfirst($controlador);
        
        $controlador = new $objControlador();
        if(method_exists($objControlador,$accion)){
            $controlador->$accion();
        }else{
           $controlador->inicio();
        }  
    }else{
        $controlador="paginas";
        $accion = "inicio";
        include_once("controlador/controlador_".$controlador.".php");

        $objControlador = "Controlador".ucfirst($controlador);
        
        $controlador = new $objControlador();

        $controlador->$accion();
    }
?>