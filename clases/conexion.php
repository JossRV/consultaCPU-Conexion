<?php 
    class Conexion{
        public function conectar(){
            $servidor="localhost";
            $usuario="root";
            $password="";
            $bd="suits1";

            $conexion= new mysqli($servidor,$usuario,$password,$bd);
            return $conexion;
        }
    }

    $objeto=new Conexion();

    // if ($objeto->conectar()) {
    //     echo "conectado";
    // }else{
    //     echo "fallo";
    // }
?>