	$(function(){

		var imgShow = 3;
        var maxIndex = Math.ceil($('.mini-img-wraper1').length/3) - 1;
        var curIndex = 0;

        navigateSlider1();
        initSlider1();
        function initSlider1(){
           var amt = $('.mini-img-wraper1').length * 33.3;
           var elScroll = $('.nav-galeria-wraper2');
           var elSingle = $('.mini-img-wraper1');
           elScroll.css('width',amt+'%');
           elSingle.css('width',33.3*(100/amt)+'%');
        }

        function navigateSlider1(){
             $('.arrow-right-nav1').click(function(){
                  if(curIndex < maxIndex){
                      curIndex++;
                      var elOff = $('.mini-img-wraper1').eq(curIndex*3).offset().left - $('.nav-galeria-wraper2').offset().left;
                      $('.nav-galeria1').animate({'scrollLeft':elOff+'px'});
                  }else{
                     //console.log("Chegamos até o final!");
                  }
              });

             $('.arrow-left-nav1').click(function(){
                 if(curIndex > 0){
                      curIndex--;
                      var elOff = $('.mini-img-wraper1').eq(curIndex*3).offset().left - $('.nav-galeria-wraper2').offset().left;
                      $('.nav-galeria1').animate({'scrollLeft':elOff+'px'});
                  }else{
                      //console.log("Chegamos até o final!");
                  }
             })
        }

	});