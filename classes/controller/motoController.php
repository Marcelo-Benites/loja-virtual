<?php
	namespace controller;
 use \views\mainView;
	class motoController
	{
		
		public function index(){
			mainView::render('moto.php');
		}
	}
?>