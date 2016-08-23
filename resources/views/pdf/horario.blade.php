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
	
	<table class="striped">
        <thead>
          <tr>
            <th data-field="nombre">Nombre Representante</th>
            <th data-field="email">Email</th>
            <th data-field="telefono">Telefono</th>
          </tr>
        </thead>
        <tbody>
          @foreach($group as $person)
            <tr>
              <td class="text-capitalize">{{ $person->representante }}</td>
              <td class="text-capitalize">{{ $person->remail }} </td>
              <td class="text-capitalize">{{ $person->rtelefono }}</td>
            </tr>
          @endforeach
        </tbody>
  	</table>


	<div>
        <div>
          <h1>Horarios</h1>
        </div>
  	</div>
    <br>
  	<table class="striped">
        <thead>
          <tr>
            <th data-field="fecha">Fecha</th>
            <th data-field="horario">Horario</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $horario)
            <tr>
              <td class="text-capitalize">{{ $horario->fecha }}</td>
              <td class="text-capitalize">{{ $horario->hora }} </td>
            </tr>
          @endforeach
        </tbody>
  	</table>
</body>
</html>