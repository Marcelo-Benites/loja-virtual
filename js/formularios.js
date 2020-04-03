$(function(){
	$('form').submit(function(){
		var form = $(this);
        $.ajax({
        	beforeSend:function(){
        		$('.overlay-loading').fadeIn();
        	},
        	url:include_path+'ajax/formulario.php',
        	method:'post',
        	dataType:'json',
        	data:form.serialize()
        }).done(function(data){
        	if(data.sucesso){
        		$('.overlay-loading').fadeOut();
        		$('.sucesso').fadeIn();
        		setTimeout(function(){
                   $('.sucesso').fadeOut();
        		},3000)
           }else{
           	$('.overlay-loading').fadeOut();
           }
        });
        return false;
	})
})