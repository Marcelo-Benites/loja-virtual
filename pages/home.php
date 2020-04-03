<section class="banner">
	<div class="container">
		<video autoplay muted loop id="video-destaque">
	  <source src="images/Lamborghini.mp4" type="video/mp4" style="min-height: 80px;">
	  Your browser does not support HTML5 video.
	</video>
	<div class="overlay"></div><!--overlay-->
	  <div class="center">
      <form  method="post" class="ajax-form">
         <h2>Digite seu Email</h2>
         <input type="email" name="email" placeholder="E-mail" required />
         <input type="hidden" name ="identificador" value="form_home"/>
         <input style="margin-top:3%;" type="submit" name="acao" value="Cadastrar!">
      </form>
   </div>
	</div><!--container-->
</section><!--banner-->

</div>
<section class="veiculos-destaque">
	<div class="line-titulo">
		<div class="ln1"></div>
		<h2>Veículos em destaque</h2>
	</div><!--line-titulo-->
	<div class="container">
	<div  class="vitrine-destaque">
		<div style="background-image:url('images/carro1.jpg');" class="carro-img"></div><!--carro-img-->
		<div class="info-carro">
			<h2>Volkswagen Karmann-ghia</h2>
			<p>1.6 8v, Gasolina, 2P, Manual1969</p>
			<a class="btn1" href="<?php echo INCLUDE_PATH?>carroopala">Mais Detalhes</a>
		</div><!--info-carro-->
	</div><!--vitrine-destaque-->

	<div class="vitrine-destaque">
		<div style="background-image:url('images/carro2.jpg');" class="carro-img"></div><!--carro-img-->
		<div class="info-carro">
			<h2>Volkswagen Karmann-ghia</h2>
			<p>1.6 8v, Gasolina, 2P, Manual1969</p>
			<a class="btn1" href="">Mais Detalhes</a>
		</div><!--info-carro-->
	</div><!--vitrine-destaque-->

	<div class="vitrine-destaque">
		<div style="background-image:url('images/carro3.jpg');" class="carro-img"></div><!--carro-img-->
		<div class="info-carro">
			<h2>Volkswagen Karmann-ghia</h2>
			<p>1.6 8v, Gasolina, 2P, Manual1969</p>
			<a class="btn1" href="">Mais Detalhes</a>
		</div><!--info-carro-->
	</div><!--vitrine-destaque-->
	</div><!--container-->
	<div class="clear"></div>
</section><!--veiculos-destaque-->

   <section class="Extras" id="Depoimento">
      <div class="center">
         <div class="w50 left novidades-container">
         <h2 class="title" style="color: white;font-style: normal;">Depoimentos nossos clientes</h2>
        <?php
               $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3");
               $sql->execute();
               $depoimentos = $sql->fetchAll();
               foreach ($depoimentos as $key => $value) 
               {
        ?>
		         <div class="novidade-single">
		            <p class="descriçao"><?php echo $value['depoimento']?></p>
		            <p class="autor"><?php echo $value['nome']?> - <?php echo $value['data']?></p>
		         </div>
        <?php }?>
      </div>
      <div class="w50 left container-servico" >
         <h2 class="title" style="color: white;font-style: normal;">Serviços</h2>
         <div class="servico">
         <ul>
         <?php
               $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 3");
               $sql->execute();
               $servicos = $sql->fetchAll();
               foreach ($servicos as $key => $value) 
               {

         ?>
	               <li><?php echo $value['servico']; ?></li>
	               <?php 
               } ?>
         </ul>
      </div>
      </div>
      <div class="clear"></div>
   </section>
<section id="#contato" class="contato">
	<div class="line-titulo">
		<div class="ln1"></div>
		<h2>Contato</h2>
	</div><!--line-titulo-->
	<form  method="post" action="">
		<div class="input-wraper w100">
   	 		<input required type="text" placeholder="Nome" name="nome" >
   	 	</div><!--input-wraper-->
   	 		<div class="input-wraper w50">
   	 		<input required style="background-color: white;border-radius: 0;border:1px solid #ccc;top:-10px;font-size: 20px;" type="email" placeholder="E-mail" name="email" >
   	 	</div><!--input-wraper-->
   	 	<div class="input-wraper w50">
   	 		<input required type="text" placeholder="Telefone" name="telefone" >
   	 	</div><!--input-wraper-->
   	 	<div class="input-wraper w100">
   	 		<textarea required placeholder="Mensagem" name="mensagem"></textarea>
   	 	</div><!--input-wraper-->
       <div class="input-wraper w100">
       	<input type="hidden" name="identificador" value="form_contato">
   	 	 <input  class="btn1" type="submit" name="acao" value="Enviar">
   	 	</div><!--input-wraper-->
   	 	

	</form>
<div class="clear"></div>
</section><!--contato-->
