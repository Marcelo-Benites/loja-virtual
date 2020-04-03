<?php
	namespace controller;
 use \views\mainView;
	class carroController
	{
		
		public function index(){
			mainView::render('carro.php');
		}
	}
?>