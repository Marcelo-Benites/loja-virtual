<?php
	namespace controller;
 use \views\mainView;
	class galeriaController
	{
		
		public function index(){
			mainView::render('galeria.php');
		}
	}
?>