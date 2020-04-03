<section class="header-1">
	<div class="container">
	<nav class="desktop-1">
	  	<ul>
	  			<li><a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrinho(<?php echo \models\vendaModel::getTotalItemsCarrinho(); ?>)</a></li>
	  		<li><a href="<?php echo INCLUDE_PATH?>finalizar">Finalizar Pedido</a></li>
	  	</ul>
	  </nav>
	 <div class="clear"></div> 
	</div>
</section>	
<div class="chamada-escolher">
	<div class="container">
		<h2>Escolha seus produtos e compre agora</h2>
	</div><!--Container-->
</div><!--chamada-->
<div class="lista-items">
	<div class="container">
		<?php
			$items = \models\vendaModel::getLojaItems();
			foreach ($items as $key => $value) {
			$imagem = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque_imagens` WHERE produto_id = $value[id]");
			$imagem->execute();
			$imagem = $imagem->fetch()['imagem'];
			
		?>
	   <div class="produto-single-box">
	   	<div style="border:1px solid #ccc;padding:8px 15px;">
	   	 <img class="img-square"  style="width: 100%"src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $imagem; ?>"/>
	   	 <p><i class="fa fa-info"></i> Nome do Produto: <?php echo $value['nome']; ?></p>
	   	   <p>Preço: R$ <?php echo Painel::converterMoney($value['preco'])?></p>
	   	   <a href="<?php echo INCLUDE_PATH ?>venda?addCart=<?php echo $value['id']; ?>">Adicionar ao carrinho</a>
	   	</div>
	   </div><!--single-box-->	
	<?php } ?>
	</div><!--container-->
</div><!--items-->	
<div class="clear"></div>
