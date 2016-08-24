$(document).ready(function() {
	$('.carousel.carousel-slider').carousel({full_width: true});
	
	$('#next').click(function() {
		nextform();
	})

	$('#prev').click(function() {
		prevform();
	})

	$('#carousel-horario').css('height', '20em')

	$('#btn-continuar').click(function(){
		$('#prev').removeClass('hide')
		$('#next').removeClass('hide')
		$('#content-0').addClass('hide')
		$('#content-1').removeClass('hide')
		$('#btn-agregar').removeClass('hide')
		$('#content-nav').removeClass('hide')
	})

	$('#prev-date').click(function() {
		$('.carousel').carousel('prev');
	})

	$('#next-date').click(function() {
		$('.carousel').carousel('next');
	})

	$('#file1').bind('change', function() {
		if (this.files[0].size <= 1500000) 
			console.log(this.files[0].size)
		else {
			$('#file1').val("");
			alert("Subir imagenes menores a 1.5MB")
		}
	})

	$('#file2').bind('change', function() {
		if (this.files[0].size <= 1500000) 
			console.log(this.files[0].size)
		else {
			$('#file2').val("");
			alert("Subir imagenes menores a 1.5MB")
		}
	})

	$('#file3').bind('change', function() {
		if (this.files[0].size <= 1500000) 
			console.log(this.files[0].size)
		else {
			$('#file3').val("");
			alert("Subir imagenes menores a 1.5MB")
		}
	})

	$('#file4').bind('change', function() {
		if (this.files[0].size <= 1500000) 
			console.log(this.files[0].size)
		else {
			$('#file4').val("");
			alert("Subir imagenes menores a 1.5MB")
		}
	})

	$('#file5').bind('change', function() {
		if (this.files[0].size <= 1500000) 
			console.log(this.files[0].size)
		else {
			$('#file5').val("");
			alert("Subir imagenes menores a 1.5MB")
		}
	})

	$('#file6').bind('change', function() {
		if (this.files[0].size <= 1500000) 
			console.log(this.files[0].size)
		else {
			$('#file6').val("");
			alert("Subir imagenes menores a 1.5MB")
		}
	})

})


function nextform() {
	if(!$('#content-1').hasClass('hide')) {	
		$('#content-1').addClass('hide')
		$('#content-2').removeClass('hide')
	}
}

function prevform() {
	if($('#content-1').hasClass('hide')) {	
		$('#content-1').removeClass('hide')
		$('#content-2').addClass('hide')
	}	
}

function cambiarText(elemento, texto) {
	$(elemento).empty()
	$(elemento).text(texto)
}