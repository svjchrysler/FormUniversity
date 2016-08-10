<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Horarios</title>
</head>
<body>

	<table>
		<tr>
			<td>Fecha</td>
			<td>Hora</td>
			<td>Representante</td>	
		</tr>

		@foreach ($data_group as $element)
			<tr>
				<td>
					<span>{{ $element->fecha }}</span>
				</td>
				<td>
					<span>{{ $element->hora }}</span>
				</td>
				<td>
					<span>{{ $element->representante }}</span>
				</td>
			</tr>
		@endforeach

		
		
	</table>
	
	

</body>
</html>