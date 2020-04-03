<?php
	namespace models;

	class motoModel{
       
       public static function getFotoMotos(){
       	  $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_text.moto`");
       	  $sql->execute();

       	  return $sql->fetchAll();
       }

	}
?>