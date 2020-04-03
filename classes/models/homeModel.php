<?php
	namespace models;

	class homeModel{


		public static function getpegaFoto(){
			$selectImoveis = \MySql::conectar()->prepare("SELECT * FROM `tb_text.moto`");
			$selectImoveis->execute();
			return $selectImoveis->fetchAll();
		}


	}
?>