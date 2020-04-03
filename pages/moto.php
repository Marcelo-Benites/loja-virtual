     <div class="container-1" >
     	<div class="baner" style="background-image: url('images/motoback.jpg');background-size:cover;background-repeat: no-repeat;width: 100%;min-height: 150%;display: inline-block;">
      <h2>Galeria de Fotos</h2>
		   <p>Albuns</p>
		  <h1 style="text-align: center; color: red; font-style: italic;">Motos</h1> 
	</div>
         <div class="baner" style="background-image: url('images/motoback.jpg');background-size:cover;background-repeat: no-repeat;width: 100%;height: 100%;display: inline-block;">
		<div class="lista-items" >
			<div class="container" >
				<?php
				  $items =\models\motoModel:: getFotoMotos();
				  foreach ($items as $key => $value) {
				  	$imagem = \MySql::conectar()->prepare("SELECT * FROM `tb_site.moto` WHERE moto_id = $value[id]");
				  	$imagem->execute();
				  	$imagem = $imagem->fetch()['imagem'];
				?>
				<div class="produto-single-box" id="img1" >
				<div  class="box_img" style="border:1px solid #ccc;padding:3px 10px; border-radius:10px; background-color: rgba(255,255,255,0.7); ">
				<img  class="img-square"  src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $imagem;?>"/>
                <div class="desc" style="display: none;">
			  <p><h4>Nome</h4><?php echo $value['nome']; ?></p>
				<h4 style="text-align: center;">Descriçao</h4>
				<p><?php echo $value['descricao']; ?></p>
				</div>
			</div>
			</div><!--produto-single-box-->	
		<?php }?>
			</div><!--container-->
		</div><!--lista-items-->
	</div>
	</div>
		<div class="clear"></div>	