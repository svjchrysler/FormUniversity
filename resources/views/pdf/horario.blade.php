<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Horarios</title>

	<style>

      table{
        width: 100%;
        display: table;
      }

      table, th, td {
        border: none;
        text-align: left;
      }

      table{
        border-collapse: collapse;
        border-spacing: 0;
      }

      table.striped > tbody > tr:nth-child(odd) {
        background-color: #f2f2f2;
      }

      table.striped > tbody > tr > td {
        border-radius: 0;
      }
      h1{
        text-align: center;
      }
      .date{
        text-align: right;
      }
      table.centered thead tr th, table.centered tbody tr td {
        text-align: center;
      }
      .text-capitalize{
        text-transform: capitalize;
      }

    </style>

</head>
<body>
	<div>
        <div>
          <h1>Integrantes</h1>
        </div>
  	</div>
	
  	<br>
	
	<table class="striped" align="center">
        <thead>
		    <tr align="center">
		        <th data-field="nombre">Integrantes</th>
		        <th data-field="email">Email</th>
		        <th data-field="telefono">Telefono</th>
	        </tr>
        </thead>
        <tbody>
          
	        <tr align="center">
          		<td class="text-capitalize">{{ $person->representante }}</td>
          		<td class="text-capitalize">{{ $person->remail }} </td>
          		<td class="text-capitalize">{{ $person->rtelefono }}</td>
	        </tr>

	         <tr align="center">
          		<td class="text-capitalize">{{ $person->nombreone }}</td>
          		<td class="text-capitalize">{{ $person->emailone }} </td>
          		<td class="text-capitalize">{{ $person->telefonoone }}</td>
	        </tr>

	         <tr align="center">
          		<td class="text-capitalize">{{ $person->nombretwo }}</td>
          		<td class="text-capitalize">{{ $person->emailtwo }} </td>
          		<td class="text-capitalize">{{ $person->telefonotwo }}</td>
	        </tr>

	         <tr align="center">
          		<td class="text-capitalize">{{ $person->nombrethree }}</td>
          		<td class="text-capitalize">{{ $person->emailthree }} </td>
          		<td class="text-capitalize">{{ $person->telefonothree }}</td>
	        </tr>

	         <tr align="center">
          		<td class="text-capitalize">{{ $person->nombrefour }}</td>
          		<td class="text-capitalize">{{ $person->emailfour }} </td>
          		<td class="text-capitalize">{{ $person->telefonofour }}</td>
	        </tr>

	         <tr align="center">
          		<td class="text-capitalize">{{ $person->nombrefive }}</td>
          		<td class="text-capitalize">{{ $person->emailfive }} </td>
          		<td class="text-capitalize">{{ $person->telefonofive }}</td>
	        </tr>
          
        </tbody>
  	</table>


	<div>
        <div>
          <h1>Horarios</h1>
        </div>
  	</div>
    <br>
  	<table class="striped" align="center">
        <thead>
          <tr align="center">
            <th data-field="fecha">Fecha</th>
            <th data-field="horario">Horario</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $horario)
            <tr align="center">
              <td class="text-capitalize">{{ $horario->dia }} - {{ $horario->fecha }}</td>
              <td>{{ $horario->hora }} </td>
            </tr>
          @endforeach
        </tbody>
  	</table>
</body>
</html>