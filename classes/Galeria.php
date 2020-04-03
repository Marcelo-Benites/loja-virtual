<?php

class Galeria{
	private $images = array('carro1.jpg','carro2.jpg','carro3.jpg');

	public  function getCurrentPicture(){
		$atual = isset($_GET['imagem']) ? (int)$_GET['imagem']  : '0';
		if($atual < 0)
             $atual = 0;
         if($atual >= count($this->images))
            $atual = count($this->images) -1;

            return $this->images[$atual];   
		}

		public function getPrevPictureIndex(){
			$atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
			$atual --;
			if($atual < 0){
				$atual = 0;
			}

			return '?imagem='.$atual;
		}
		 public function getNextPictureIndex(){
			$atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
			$atual ++;
			if($atual >= count($this->images)){
				$atual = count($this->images) -1;
			}
         return '?imagem='.$atual;

     }


			
}

?>