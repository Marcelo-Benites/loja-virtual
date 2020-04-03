<?php
	namespace controller;
 use \views\mainView;

	class vendaController
	{
		
		public function index(){
			if(isset($_GET['addCart'])){

				$idProduto = (int)$_GET['addCart'];

				if(isset($_SESSION['carrinho']) == false){
					$_SESSION['carrinho'] = array();
				}

				if(isset($_SESSION['carrinho'][$idProduto]) == false){
					$_SESSION['carrinho'][$idProduto] = 1;
				}else{
					$_SESSION['carrinho'][$idProduto]++;
				}

				\Painel::redirect(INCLUDE_PATH.'venda');

				//na area da venda??? sim estas a utilizar "\". 


				
			}
			mainView::render('venda.php');
		}
	}
?>