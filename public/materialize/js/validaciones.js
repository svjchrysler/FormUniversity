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

	$('#fileimg1').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;			
				$('#file1').val(src)				
			}
			reader.readAsDataURL(this.files[0]);
		}
	})

	$('#fileimg2').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;			
				$('#file2').val(src)				
			}
			reader.readAsDataURL(this.files[0]);
		}
	})

	$('#fileimg3').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;			
				$('#file3').val(src)				
			}
			reader.readAsDataURL(this.files[0]);
		}
	})

	$('#fileimg4').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;			
				$('#file4').val(src)				
			}
			reader.readAsDataURL(this.files[0]);
		}
	})

	$('#fileimg5').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;			
				$('#file5').val(src)				
			}
			reader.readAsDataURL(this.files[0]);
		}
	})

	$('#fileimg6').change(function() {
		if (this.files && this.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				var src = e.target.result;			
				$('#file6').val(src)				
			}
			reader.readAsDataURL(this.files[0]);
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