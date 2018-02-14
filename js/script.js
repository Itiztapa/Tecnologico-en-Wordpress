$(document).ready(principal);

var contador = 1;

function principal(){
	$('.menu_bar').click(function (){
		if(contador==1){
			$('nav').animate({
				right: '0%'
			});
			contador=0;
		}
		else{
			contador=1;
			$('nav').animate({
				right: '-200%'
			});	
		}
	});
}

$('.sub-menu').click(function(){
	$this.children('.menu-item').slideToggle();
});