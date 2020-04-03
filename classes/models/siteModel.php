<?php
	namespace models;

	class siteModel{


		public static function getpegaFoto(){
			$selectImoveis = \MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
			$selectImoveis->execute();
			return $selectImoveis->fetchAll();
		}


	}
?>