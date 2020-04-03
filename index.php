<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>

<?php

$homeController = new   controller\homeController();
$sobreController = new controller\sobreController();
$vendaController = new   controller\vendaController();
$finalizarController = new controller\finalizarController();
$galeriaController = new controller\galeriaController();
$carroController = new controller\carroController();
$motoController = new controller\motoController();
$outrosController = new controller\outrosController();
$carroopalaController = new controller\carroopalaController();
$suporteController = new   controller\suporteController();

Router::get('/',function() use ($homeController){
     $homeController->index();
});

Router::get('/home',function() use ($homeController){
     $homeController->index();
});


Router::get('/sobre',function() use ($sobreController){
     $sobreController->index();
});

Router::get('/venda',function() use ($vendaController){
     $vendaController->index();
});


Router::get('/finalizar',function() use ($finalizarController){
     $finalizarController->index();
});

Router::get('/galeria',function() use ($galeriaController){
     $galeriaController->index();
});

Router::get('/carro',function() use ($carroController){
     $carroController->index();
});

Router::get('/moto',function() use ($motoController){
     $motoController->index();
});

Router::get('/outros',function() use ($outrosController){
     $outrosController->index();
});

Router::get('/carroopala',function() use ($carroopalaController){
     $carroopalaController->index();
});

Router::get('/suporte',function() use ($suporteController){
     $suporteController->index();
});

Router::get('/chamado',function(){
     echo '<h2>Vizualizando chamdo: 00000</h2>';
});


?>

