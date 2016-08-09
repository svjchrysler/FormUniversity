$(document).ready(function() {

	$('#rbtn-upsa').click(function() {
		$('#university').val('UPSA')
	})

	$('#rbtn-uagrm').click(function() {
		$('#university').val('UAGRM')	
	})

	$('#next').click(function() {

		if($('#rbtn-upsa').is(':checked') || $('#rbtn-uagrm').is(':checked')) {
			if($('#rbtn-upsa').is(':checked')) {
				nextform('upsa')
			}

			if ($('#rbtn-uagrm').is(':checked')) {
				nextform('uagrm')
			}
		} else {
			alert('Seleccionar una Universidad')
		}
		
	})

	$('#prev').click(function() {
		if($('#rbtn-upsa').is(':checked') || $('#rbtn-uagrm').is(':checked')) {
			if($('#rbtn-upsa').is(':checked')) {
				prevform('upsa')
			}

			if ($('#rbtn-uagrm').is(':checked')) {
				prevform('uagrm')
			}
		} else {
			alert('Seleccionar una Universidad')
		}
	})

})


function nextform(university) {
	if(university === 'upsa') {
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

	if(university === 'uagrm') {
		if(!$('#content-1').hasClass('hide')) {	
			if($('#content-4').hasClass('hide') && $('#content-5').hasClass('hide')){
				$('#content-1').addClass('hide')
				$('#content-4').removeClass('hide')
				$('#content-5').removeClass('hide')
			} else {
				$('#content-1').removeClass('hide')
				$('#content-4').addClass('hide')
				$('#content-5').addClass('hide')
			}
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

	if(university === 'uagrm') {
		if($('#content-1').hasClass('hide')) {	
			if($('#content-4').hasClass('hide') && $('#content-5').hasClass('hide')){
				$('#content-1').addClass('hide')
				$('#content-4').removeClass('hide')
				$('#content-5').removeClass('hide')
			} else {
				$('#content-1').removeClass('hide')
				$('#content-4').addClass('hide')
				$('#content-5').addClass('hide') 
			}
		}
	}
}

function cambiarText(elemento, texto) {
	$(elemento).empty()
	$(elemento).text(texto)
}