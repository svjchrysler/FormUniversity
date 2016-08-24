<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {{ Html::style('materialize/css/materialize.min.css') }}
        {{ Html::style('materialize/css/animate.css') }}
        {{ Html::style('materialize/css/style.css') }}

    </head>
    <body>
        
    <!-- Inicio -->

        <div class="fondo-fondo" id="content-0">
            <div class="container-fluid align-horizontal-vertical" style="height:100vh;">
                <div class="row">
                    <div class="col s12 center-align">
                        <button class="btn" id="btn-continuar">Registra Tu Equipo</button>
                    </div>
                </div>
            </div>    

        </div>

    <!-- End Inicio -->

        <div class="row hide" id="content-nav">
            <div class="col s12 m12">
                <div class="card-panel teal center-align">
                    <h4 class="white-text">Formulario de Registro</h4>
                </div>
            </div>
            <div class="col s12 m12 center-align">
                <div class="card-panel hoverable center-align">
                    Subir imagenes menores o iguales a 1.5MB. Si consta con una imagen mayor a 1MB link de pagina para comprimir imagen  
                    <a href="https://compressor.io/" target="_blank">Compresor de Imagenes</a>
                </div>
            </div>
        </div>

        <a href="#" class="hide" id="prev">
            <div class="absolute position-left center-align">
                <img src="materialize/img/back.png" />
            </div>
        </a>

        <a href="#" class="hide" id="next">
            <div class="absolute position-right center-align">
                <img src="materialize/img/next.png" />
            </div>
        </a>
                
    <!-- Formulario UPSA -->
    
        {!! Form::open(['route' => 'form.store', 'method' => 'POST', 'id' => 'form', 'files' => 'true']) !!}
        {{ csrf_field() }}

            <div class="container hide altura" id="content-1">
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="col s3 center-align">
                                <br>
                                <input type="file" id="file1" required accept="*.jpg,*.png" name="file1">
                            </div>
                            <div class="input-field col s3">
                                <input id="nombre" type="text" required name="nameRepresentante" class="validate">
                                <label for="nombre">Nombre Representante</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="telefono" type="number" required name="phoneRepresentante" class="validate">
                                <label for="telefono">Telefono</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="email" type="email" required name="emailRepresentante" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s3 center-align">
                                <br>
                                <input type="file" accept="*.jpg,*.png" required id="file2" name="file2">
                            </div>
                            <div class="input-field col s3">
                                <input id="nombre" type="text" required name="nameOne" class="validate">
                                <label for="nombre">Nombre Integrante 1</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="telefono" type="number" required name="phoneOne" class="validate">
                                <label for="telefono">Telefono</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="email" type="email" required name="emailOne" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s3 center-align">
                                <br>
                                <input type="file" id="file3" required accept="*.jpg,*.png" name="file3">
                            </div>
                            <div class="input-field col s3">
                                <input id="nombre" type="text" required name="nameTwo" class="validate">
                                <label for="nombre">Nombre Integrante 2</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="telefono" type="number" required name="phoneTwo" class="validate">
                                <label for="telefono">Telefono</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="email" type="email" required name="emailTwo" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s3 center-align">
                                <br>
                                <input type="file" id="file4" required accept="*.jpg,*.png" name="file4">
                            </div>
                            <div class="input-field col s3">
                                <input id="nombre" type="text" required name="nameThree" class="validate">
                                <label for="nombre">Nombre Integrante 3</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="telefono" type="number" required name="phoneThree" class="validate">
                                <label for="telefono">Telefono</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="email" type="email" required name="emailThree" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s3 center-align">
                                <br>
                                <input type="file" id="file5" required accept="*.jpg,*.png" name="file5">
                            </div>
                            <div class="input-field col s3">
                                <input id="nombre" type="text" required name="nameFour" class="validate">
                                <label for="nombre">Nombre Integrante 4</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="telefono" type="number" required name="phoneFour" class="validate">
                                <label for="telefono">Telefono</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="email" type="email" required name="emailFour" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s3 center-align">
                                <br>
                                <input type="file" id="file6" required accept="*.jpg,*.png" name="file6">
                            </div>
                            <div class="input-field col s3">
                                <input id="nombre" type="text" required name="nameFive" class="validate">
                                <label for="nombre">Nombre Integrante 5</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="telefono" type="number" required name="phoneFive" class="validate">
                                <label for="telefono">Telefono</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="email" type="email" required name="emailFive" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>

            <div class="container-fluid hide" id="content-2">
                
                <div class="row">
                    <div class="col s2  altura-col align-horizontal-vertical">
                        <a href="#" id="prev-date">
                            <img src="materialize/img/back.png">
                        </a>
                    </div>

                    <div class="col s8">
                        <div class="carousel carousel-slider align-horizontal-vertical center" id="carousel-horario" data-indicators="true">
                            <div class="carousel-item white" href="#one!">
                                <div class="row">

                                    <div class="col s6">
                                        <h2>Sabado - 27/08</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '27/08')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora1" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s6">
                                        <h2>Domingo - 28/08</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '28/08')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora1" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item white" href="#two!">
                                <div class="row">

                                    <div class="col s4">
                                        <h2>Martes - 30/08</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '30/08')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora2" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s4">
                                        <h2>Miercoles - 31/08</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '31/08')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora2" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s4">
                                        <h2>Jueves - 01/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '01/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora2" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item white" href="#three!">
                                <div class="row">

                                    <div class="col s6">
                                        <h2>Sabado - 03/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '03/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora3" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s6">
                                        <h2>Domingo - 04/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '04/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora3" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item white" href="#four!">
                                <div class="row">

                                    <div class="col s4">
                                        <h2>Martes - 06/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '06/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora4" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s4">
                                        <h2>Miercoles - 07/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '07/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora4" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s4">
                                        <h2>Jueves - 08/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '08/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora4" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item white" href="#five!">
                                <div class="row">

                                    <div class="col s6">
                                        <h2>Sabado - 10/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '10/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora5" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s6">
                                        <h2>Domingo - 11/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '11/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora5" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item white" href="#six!">
                                <div class="row">

                                    <div class="col s4">
                                        <h2>Martes - 13/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '13/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora6" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s4">
                                        <h2>Miercoles - 14/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '14/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora6" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s4">
                                        <h2>Jueves - 15/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '15/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora6" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item white" href="#seven!">
                                <div class="row">

                                    <div class="col s6">
                                        <h2>Sabado - 17/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '17/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora7" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s6">
                                        <h2>Domingo - 18/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '18/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora7" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>            
                        
                                </div>
                            </div>

                            <div class="carousel-item white" href="#eight!">
                                <div class="row">

                                    <div class="col s4">
                                        <h2>Martes - 20/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '20/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora8" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s4">
                                        <h2>Miercoles - 21/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '21/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora8" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col s4">
                                        <h2>Jueves - 22/09</h2>
                                        <ul class="collection left-align space-content-calendar">
                                            <?php $dates = DB::table('date_times')->where('fecha', '=', '22/09')->get(); ?>
                                            @foreach($dates as $data)
                                                <li class="collection-item">
                                                    <input name="ghora8" type="radio" @if($data->cantidad == 0) {{ "disabled" }} @endif required value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                                    <label for="hora{{ $data->id }}">
                                                        {{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                                    </label>
                                                </li>                                        
                                            @endforeach
                                        </ul>
                                    </div>                                    

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col s2 center-align altura-col align-horizontal-vertical">
                        <a href="#" id="next-date">
                            <img src="materialize/img/next.png">
                        </a>
                    </div>
                </div>

            </div>

            <div class="fixed-action-btn hide alinear" id="btn-agregar">
                <button type="submit" class="btn-floating btn-large red">
                    <i class="material-icons">save</i>
                </button>
            </div>
            
        {!! Form::close() !!}

    <!-- End Formulario UPSA -->
   
    </body>
        
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    {{ Html::script('materialize/js/materialize.min.js') }}
    {{ Html::script('materialize/js/validaciones.js') }}

</html>
