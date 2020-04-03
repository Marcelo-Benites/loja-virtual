
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $infoSite['titulo']?></title>
	<meta charset="viewport" content="width=device-width;initial-scale=1,0;maximum-scale1.0">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="<?php INCLUDE_PATH ?> estilo/stilo2.css">
	<link rel="stylesheet" type="text/css" href="<?php INCLUDE_PATH ?> estilo/style1.css">

</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>"/>
<div class="sucesso">Formúlario enviado com sucesso!</div>
<div class="overlay-loading">
	<img src="<?php echo INCLUDE_PATH?>images/ajax-loader.gif">
	</div>
<header>
   <div class="container">	
	<div class="logo"><a href="<?php echo INCLUDE_PATH ?>"><b>Veículo de Automovel</b></a></div>
	  <nav class="desktop">
	  	<ul>
	  		<li><a href="<?php echo INCLUDE_PATH?>home">Home</a></li>
	  		<li><a href="<?php echo INCLUDE_PATH?>sobre">Sobre</a></li>
	  		<li><a id="contato" href="">Contato</a></li>
	  		<li><a href="<?php echo INCLUDE_PATH?>galeria">Galeria</a></li>
	  		<li><a href="<?php echo INCLUDE_PATH?>venda">Venda</a></li>
	  		<div class="btn4">
	  	<a style="color: white;top: 8px; text-align: center;" href="<?php echo INCLUDE_PATH?>suporte"><i style="display: inline-block; margin:10px;" class="fa fa-comments-o"></i><span style="display: inline-block;">chat</span></a>
	  	</div>
	  	</ul>
	  </nav>
	  <nav class="mobile">
		<ul>
			<li><a href="<?php echo INCLUDE_PATH?>home">Home</a></li>
	  		<li><a href="<?php echo INCLUDE_PATH?>sobre">Sobre</a></li>
	  		<li><a goto="contato" href="">Contato</a></li>
	  		<li><a href="<?php echo INCLUDE_PATH?>galeria">Galeria</a></li>
	  		<li><a href="<?php echo INCLUDE_PATH?>venda">Venda</a></li>
	  		<div class="btn4">
	  	<a style="color: white;top: 8px; text-align: center;" href="<?php echo INCLUDE_PATH?>suporte"><i style="display: inline-block; margin:10px;" class="fa fa-comments-o"></i><span style="display: inline-block;">chat</span></a>
	  	</div>
		</ul>
	</nav><!--mobile-->
	 <div class="clear"></div>
</div>
</header>
	
		
