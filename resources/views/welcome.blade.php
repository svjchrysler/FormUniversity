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

        <div class="fondo-fondo" id="fondo">
            <div class="container-fluid align-horizontal-vertical" style="height:100vh;" id="content-0">
                <div class="row">
                    <div class="col s12 center-align">
                        <button class="btn" id="btn-continuar">Registra Tu Equipo</button>
                    </div>
                </div>
            </div>    
        </div>

        <div class="row hide" id="content-nav">
            <div class="col s12 m12">
                <div class="card-panel teal center-align">
                    <h4 class="white-text">Formulario de Registro</h4>
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
    
    {!! Form::open(['route' => 'form.store', 'method' => 'POST', 'id' => 'form']) !!}

        <div class="container hide altura" id="content-1">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" name="nameRepresentante" class="validate">
                            <label for="nombre">Nombre Representante</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" name="phoneRepresentante" class="validate">
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="email" type="email" name="emailRepresentante" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" name="nameOne" class="validate">
                            <label for="nombre">Nombre Integrante 1</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" name="phoneOne" class="validate">
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="email" type="email" name="emailOne" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" name="nameTwo" class="validate">
                            <label for="nombre">Nombre Integrante 2</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" name="phoneTwo" class="validate">
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="email" type="email" name="emailTwo" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" name="nameThree" class="validate">
                            <label for="nombre">Nombre Integrante 3</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" name="phoneThree" class="validate">
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="email" type="email" name="emailThree" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" name="nameFour" class="validate">
                            <label for="nombre">Nombre Integrante 4</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" name="phoneFour" class="validate">
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="email" type="email" name="emailFour" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" name="nameFive" class="validate">
                            <label for="nombre">Nombre Integrante 5</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" name="phoneFive" class="validate">
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="email" type="email" name="emailFive" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                </div>
            </div>      
        </div>

        <div class="container tamano-vh align-horizontal-vertical hide" id="content-2" >
            <div class="carousel carousel-slider center" data-indicators="true">
                <div class="carousel-item" href="#one!">
                    <div class="row">
                        <div class="col s6">
                            <h2>23/08</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '23/08')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora1" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col s6">
                            <h2>30/08</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '30/08')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora2" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>                                        
                                @endforeach
                            </ul>
                        </div>
                    </div>                  
                </div>
                <div class="carousel-item" href="#two!">
                    <div class="row">
                        <div class="col s6">
                            <h2>06/09</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '06/09')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora3" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col s6">
                            <h2>13/09</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '13/09')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora4" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>                                        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" href="#three!">
                    <div class="row">
                        <div class="col s6">
                            <h2>25/08</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '25/08')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora5" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col s6">
                            <h2>01/09</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '01/09')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora6" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>                                        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" href="#four!">
                    <div class="row">
                        <div class="col s6">
                            <h2>08/09</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '08/09')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora7" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col s6">
                            <h2>15/09</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '15/09')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora8" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>                                        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" href="#five!">
                    <div class="row">
                        <div class="col s6">
                            <h2>27/08</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '27/08')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora9" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col s6">
                            <h2>10/09</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '10/09')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora10" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>                                        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" href="#six!">
                    <div class="row">
                        <div class="col s6">
                            <h2>04/09</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '04/09')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora11" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col s6">
                            <h2>18/09</h2>
                            <ul class="collection left-align space-content-calendar">
                                <?php $dates = DB::table('date_times')->where('fecha', '=', '18/09')->get(); ?>
                                @foreach($dates as $data)
                                    <li class="collection-item">
                                        <input name="ghora12" type="radio" value="{{ $data->id }}" id="hora{{ $data->id }}" />
                                        <label for="hora{{ $data->id }}">{{ $data->hora }} - {{ 'Cantidad '.$data->cantidad }}
                                        </label>
                                    </li>                                        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed-action-btn hide" id="btn-agregar" style="bottom: 45px; right: 24px;">
            <button type="submit" class="btn-floating btn-large red">
                <i class="material-icons">add</i>
            </button>
        </div>
        

    {!! Form::close() !!}

    <!-- End Formulario UPSA -->
   
    </body>
        
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    {{ Html::script('materialize/js/materialize.min.js') }}
    {{ Html::script('materialize/js/validaciones.js') }}

</html>
