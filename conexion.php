<?php
    class conexion{
        private $servidor="localhost"; //127.0.0.1
        private $usuario="root";
        private $contrasenia="";

        public function __construct(){

            try{

                $this->conexion=new PDO("mysql:host=$this->servidor;dbname=portafoliods5", $this->usuario, $this->contrasenia);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


            }catch (PDOException $error){
                echo"Falla de conexion".$error;
            }
        }

        public function ejecutar($sql){ //metodo para insertar infomacion

            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();
        }

        public function consultar($sql){ 

            $sentecia=$this->conexion->prepare($sql);
            $sentecia->execute();
            return $sentecia->fetchAll();
        }

    }

?>