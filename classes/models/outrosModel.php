<?php
	namespace models;

	class outrosModel{
       
       public static function getFotoOutros(){
       	  $sql = \MySql::conectar()->prepare("SELECT * FROM `tb_text.outros`");
       	  $sql->execute();

       	  return $sql->fetchAll();
       }

	}
?>