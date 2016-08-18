$(document).ready(function() {
	 $('.carousel.carousel-slider').carousel({full_width: true});
	var cont = 0;

	$('#rbtn-upsa').click(function() {
		$('#uni').val('1')
		$('#university').val('UPSA')
	})

	$('#rbtn-uagrm').click(function() {
		$('#uni').val('2')
		$('#university').val('UAGRM')	
	})

	$('#next').click(function() {

		if($('#rbtn-upsa').is(':checked')) {
			nextform('upsa')
		}
		
	})

	$('#prev').click(function() {
			if($('#rbtn-upsa').is(':checked')) {
				prevform('upsa')
			}

	})

	$('#btn-continuar').click(function(){
		$('#prev').removeClass('hide')
		$('#next').removeClass('hide')
		$('#content-0').addClass('hide')
		$('#content-1').removeClass('hide')
		$('#fondo').addClass('hide')
		$('#btn-agregar').removeClass('hide')
		$('#content-nav').removeClass('hide')
	})

	$("#agosto23").css("display", "block");
	$("#agosto30").css("display", "block");


	$('#prevhorario').click(function() {
		if (cont > 0) {
			cont--;
		}
	})

	$('#nexthorario').click(function() {
		cont++;
	})


})


function nextform(university) {

	if(!$('#content-1').hasClass('hide')) {	
		if($('#content-2').hasClass('hide') && $('#content-3').hasClass('hide')){
			$('#content-1').addClass('hide')
			$('#content-2').removeClass('hide')
			$('#content-3').removeClass('hide')
		} else {
			$('#content-1').removeClass('hide')
			$('#content-2').addClass('hide')
			$('#content-3').addClass('hide')
		}
	}
}

function prevform(university) {
	if (university === 'upsa') {
		if($('#content-1').hasClass('hide')) {	
			if($('#content-2').hasClass('hide') && $('#content-3').hasClass('hide')){
				$('#content-1').addClass('hide')
				$('#content-2').removeClass('hide')
				$('#content-3').removeClass('hide')
			} else {
				$('#content-1').removeClass('hide')
				$('#content-2').addClass('hide')
				$('#content-3').addClass('hide')
			}
		}		
	}
}


function cambiarText(elemento, texto) {
	$(elemento).empty()
	$(elemento).text(texto)
}