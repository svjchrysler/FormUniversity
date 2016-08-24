<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Correo Enviado</title>
	{{ Html::style('materialize/css/materialize.min.css') }}
    {{ Html::style('materialize/css/style.css') }}

</head>
<body>
	<div class="container-fluid email">
		<h1 class="h1">Gracias por Registrarte</h1>
		<h4 class="h4">Te enviamos un correo con los horarios registrados</h4>
		<br>
	</div>
	

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    {{ Html::script('materialize/js/materialize.min.js') }}
    {{ Html::script('materialize/js/validaciones.js') }}
</body>
</html>