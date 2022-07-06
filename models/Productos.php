<?php
    class Producto extends conectar{
        public function get_producto(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql = " SELECT * FROM tm_producto";
            $sql = $conectar();
            return $resultado = $sql->fetchAll();
        }

        public function delete_producto($prod_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql = " UPDATE tm_producto
                SET
                    est==,
                    fech
            ";

            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, prod_id);
            return $resultado = $sql->fetchAll();
        }

    }
?>