<?php
	namespace models;

	class carroModel{
       
       public static function getFotoCarros(){
       	  $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_text.carro`");
       	  $sql->execute();

       	  return $sql->fetchAll();
       }

	}
?>