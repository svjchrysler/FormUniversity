<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Descargar Horario</title>
	{{ Html::style('materialize/css/materialize.min.css') }}
    {{ Html::style('materialize/css/style.css') }}

</head>
<body class="background-enviado">
	<div class="container-fluid center-align">
		<div class="row">
			<div class="col s12">
				<h1 class="h1">Gracias por Registrar tu equipo</h1>		
			</div>
			<div class="col s12">
				<a href="{{ url('/pdf/'.$id) }}" class="btn">Descargar Horarios</a>		
			</div>
		</div>
		
		
	</div>
	

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    {{ Html::script('materialize/js/materialize.min.js') }}
    {{ Html::script('materialize/js/validaciones.js') }}
</body>
</html>