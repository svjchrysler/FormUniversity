<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        {{ Html::style('materialize/css/materialize.min.css') }}
        {{ Html::style('materialize/css/style.css') }}

    </head>
    <body>
        <div class="row">
          <div class="col s12 m12">
            <div class="card-panel teal center-align">
              <h4 class="white-text">Formulario de Registro</h4>
            </div>
          </div>
        </div>

    <a href="#" id="prev" class="disabled">
        <div class="absolute position-left center-align">
            <img src="materialize/img/back.png">
        </div>
    </a>

    <a href="#" id="next">
        <div class="absolute position-right center-align">
            <img src="materialize/img/next.png">
        </div>
    </a>
    
    <div class="container hide" id="content-1">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <div class="row">
                            <div class="col m4">
                                <label>Universidad</label>  
                            </div>
                            <div class="col m4">
                                <input name="group1" type="radio" id="rbtn-upsa" />
                                <label for="rbtn-upsa">UPSA</label>     
                            </div>
                            <div class="col m4">
                                <input name="group1" type="radio" id="rbtn-uagrm" />
                                <label for="rbtn-uagrm">UAGRM</label>       
                            </div>
                        </div>                          
                    </div>
                    <div class="input-field col s6">
                        <input id="university" type="text" disabled class="validate" value="Seleccione su universidad">
                    </div>
                </div>

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
            </form>
        </div>      
    </div>

{{--     <?php $array_upsa_day = array("Martes", "Jueves", "Sabado", "Domingo");
          $array_uagrm_day = array("Lunes", "Miercoles", "Sabado", "Domingo"); ?>
 --}}
{{--     <div class="container">
        <div class="row">
            <div class="col m12">
                <div class="row">
                    @for($i=0; $i<4; $i++) 
                        
                        <?php $fechas = DB::table('date__works')->where('date__works.universidad', '=', 'uagrm')->get(); ?>
                        @foreach($fechas as $fecha)
                            <div class="col m6">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s3">
                                            <a href="#test{{ $fecha->id }}">{{ $fecha->fecha }}</a>
                                        </li>
                                    </ul>       
                                </div>          
                                <?php $horas = DB::table('date__works')->join('detalles', 'date__works.id', '=', 'detalles.date_id')
                                                    ->join('time__works', 'detalles.time_id', '=', 'time__works.id')
                                                    ->where('date__works.id', '=', $fecha->id)->select('time__works.*', 'detalles.*')
                                                    ->get(); ?>

                                <div id="test{{ $fecha->id }}" class="col s12">
                                    <ul class="collection">
                                        @foreach($horas as $hora)
                                            <li class="collection-item">
                                                <input name="group{{ $fecha->id }}" type="radio" id="test{{ $hora->id }}" />
                                                <label for="test{{ $hora->id }}">{{ $hora->hora }} - {{ $hora->cantidad }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        
                    @endfor
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Formulario UPSA -->
    
    <div class="container hide" id="content-2">
        <div class="row">
            <div class="col m12">
                <div class="row">
                    <div class="col m6">
                        <h5 class="center-align">Martes</h5>
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3">
                                        <a href="#agosto23" onclick="cambiarText('#fecha1', '23 de Agosto')">23/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#agosto30" onclick="cambiarText('#fecha1', '30 de Agosto')">30/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre06" onclick="cambiarText('#fecha1', '06 de Septiembre')" >06/09</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre13" onclick="cambiarText('#fecha1', '13 de Septiembre')">13/09</a>
                                    </li>
                                </ul>
                                <h6 class="center-align" id="fecha1">23 de Agosto</h6>
                            </div>
                            <div id="agosto23" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora1" type="radio" id="hora1" />
                                        <label for="hora1">07:00am - 11:00am</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora1" type="radio" id="hora2" />
                                        <label for="hora2">11:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora1" type="radio" id="hora3" />
                                        <label for="hora3">15:00pm - 19:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora1" type="radio" id="hora4" />
                                        <label for="hora4">19:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="agosto30" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora2" type="radio" id="hora5" />
                                        <label for="hora5">07:00am - 11:00am</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora2" type="radio" id="hora6" />
                                        <label for="hora6">11:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora2" type="radio" id="hora7" />
                                        <label for="hora7">15:00pm - 19:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora2" type="radio" id="hora8" />
                                        <label for="hora8">19:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre06" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora3" type="radio" id="hora9" />
                                        <label for="hora9">07:00am - 11:00am</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora3" type="radio" id="hora10" />
                                        <label for="hora10">11:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora3" type="radio" id="hora11" />
                                        <label for="hora11">15:00pm - 19:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora3" type="radio" id="hora12" />
                                        <label for="hora12">19:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre13" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora4" type="radio" id="hora13" />
                                        <label for="hora13">07:00am - 11:00am</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora4" type="radio" id="hora14" />
                                        <label for="hora14">11:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora4" type="radio" id="hora15" />
                                        <label for="hora15">15:00pm - 19:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora4" type="radio" id="hora16" />
                                        <label for="hora16">19:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>  
                        </div>                      
                    </div>

                    <div class="col m6">
                        <h5 class="center-align">Jueves</h5>
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3">
                                        <a href="#agosto25" onclick="cambiarText('#fecha2', '25 de Agosto')">25/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre01" onclick="cambiarText('#fecha2', '01 de Septiembre')">01/09</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre08" onclick="cambiarText('#fecha2', '08 de Septiembre')">08/09</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre15" onclick="cambiarText('#fecha2', '15 de Septiembre')">15/09</a>
                                    </li>
                                </ul>
                                <h6 class="center-align" id="fecha2">25 de Agosto</h6>
                            </div>
                            <div id="agosto25" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora5" type="radio" id="hora17" />
                                        <label for="hora17">07:00am - 11:00am</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora5" type="radio" id="hora18" />
                                        <label for="hora18">11:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora5" type="radio" id="hora19" />
                                        <label for="hora19">15:00pm - 19:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora5" type="radio" id="hora20" />
                                        <label for="hora20">19:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre01" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora6" type="radio" id="hora21" />
                                        <label for="hora21">07:00am - 11:00am</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora6" type="radio" id="hora22" />
                                        <label for="hora22">11:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora6" type="radio" id="hora23" />
                                        <label for="hora23">15:00pm - 19:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora6" type="radio" id="hora24" />
                                        <label for="hora24">19:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre08" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora7" type="radio" id="hora25" />
                                        <label for="hora25">07:00am - 11:00am</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora7" type="radio" id="hora26" />
                                        <label for="hora26">11:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora7" type="radio" id="hora27" />
                                        <label for="hora27">15:00pm - 19:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora7" type="radio" id="hora28" />
                                        <label for="hora28">19:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre15" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora8" type="radio" id="hora29" />
                                        <label for="hora29">07:00am - 11:00am</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora8" type="radio" id="hora30" />
                                        <label for="hora30">11:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora8" type="radio" id="hora31" />
                                        <label for="hora31">15:00pm - 19:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora8" type="radio" id="hora32" />
                                        <label for="hora32">19:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>  
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container hide" id="content-3"> 
        <div class="row">
            <div class="col m12">
                <div class="row">
                    <div class="col m6">
                        <h5 class="center-align">Sabado</h5>
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3">
                                        <a href="#agosto27" onclick="cambiarText('#fecha3', '27 de Agosto')">27/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre10" onclick="cambiarText('#fecha3', '10 de Septiembre')">10/09</a>
                                    </li>
                                </ul>
                                <h6 class="center-align" id="fecha3">27 de Agosto</h6>
                            </div>
                            <div id="agosto27" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora9" type="radio" id="hora33" />
                                        <label for="hora33">07:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora9" type="radio" id="hora34" />
                                        <label for="hora34">15:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre10" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora10" type="radio" id="hora35" />
                                        <label for="hora35">07:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora10" type="radio" id="hora36" />
                                        <label for="hora36">15:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                        </div>                      
                    </div>
                    
                    <div class="col m6">
                        <h5 class="center-align">Domingo</h5>
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3">
                                        <a href="#septiembre04" onclick="cambiarText('#fecha4', '04 de Septiembre')">04/09</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre18" onclick="cambiarText('#fecha1', '18 de Septiembre')">18/09</a>
                                    </li>
                                </ul>
                                <h6 class="center-align" id="fecha4">04 de Septiembre</h6>
                            </div>
                            <div id="septiembre04" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora11" type="radio" id="hora37" />
                                        <label for="hora37">07:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora11" type="radio" id="hora38" />
                                        <label for="hora38">15:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre18" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora12" type="radio" id="hora39" />
                                        <label for="hora39">07:00am - 15:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora12" type="radio" id="hora40" />
                                        <label for="hora40">15:00pm - 23:00pm</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Formulario UPSA -->

    <!-- Formulario UAGRM -->

    <div class="container hide" id="content-4">
        <div class="row">
            <div class="col m12">
                <div class="row">
                    <div class="col m6">
                        <h5 class="center-align">Lunes</h5>
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3">
                                        <a href="#agosto22" onclick="cambiarText('#fecha5', '22 de Agosto')">22/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#agosto29" onclick="cambiarText('#fecha5', '29 de Agosto')">29/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre05" onclick="cambiarText('#fecha5', '05 de Septiembre')" >05/09</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre12" onclick="cambiarText('#fecha5', '12 de Septiembre')">12/09</a>
                                    </li>
                                </ul>
                                <h6 class="center-align" id="fecha5">22 de Agosto</h6>
                            </div>
                            <div id="agosto22" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora13" type="radio" id="hora41" />
                                        <label for="hora41">08:00am - 12:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora13" type="radio" id="hora42" />
                                        <label for="hora42">12:00pm - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora13" type="radio" id="hora43" />
                                        <label for="hora43">16:00pm - 20:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="agosto29" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora14" type="radio" id="hora45" />
                                        <label for="hora45">08:00am - 12:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora14" type="radio" id="hora46" />
                                        <label for="hora46">12:00pm - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora14" type="radio" id="hora47" />
                                        <label for="hora47">16:00pm - 20:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre05" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora15" type="radio" id="hora49" />
                                        <label for="hora49">08:00am - 12:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora15" type="radio" id="hora50" />
                                        <label for="hora50">12:00pm - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora15" type="radio" id="hora51" />
                                        <label for="hora51">16:00pm - 20:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre12" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora16" type="radio" id="hora53" />
                                        <label for="hora53">08:00am - 12:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora16" type="radio" id="hora54" />
                                        <label for="hora54">12:00pm - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora16" type="radio" id="hora55" />
                                        <label for="hora55">16:00pm - 20:00pm</label>
                                    </li>
                                </ul>
                            </div>  
                        </div>                      
                    </div>

                    <div class="col m6">
                        <h5 class="center-align">Miercoles</h5>
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3">
                                        <a href="#agosto24" onclick="cambiarText('#fecha6', '24 de Agosto')">24/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#agosto31" onclick="cambiarText('#fecha6', '31 de Agosto')">31/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre07" onclick="cambiarText('#fecha6', '07 de Septiembre')">07/09</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre14" onclick="cambiarText('#fecha6', '14 de Septiembre')">14/09</a>
                                    </li>
                                </ul>
                                <h6 class="center-align" id="fecha6">24 de Agosto</h6>
                            </div>
                            <div id="agosto24" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora17" type="radio" id="hora57" />
                                        <label for="hora57">08:00am - 12:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora17" type="radio" id="hora58" />
                                        <label for="hora58">12:00pm - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora17" type="radio" id="hora59" />
                                        <label for="hora59">16:00pm - 20:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="agosto31" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora18" type="radio" id="hora61" />
                                        <label for="hora61">08:00am - 12:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora18" type="radio" id="hora62" />
                                        <label for="hora62">12:00pm - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora18" type="radio" id="hora63" />
                                        <label for="hora63">16:00pm - 20:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre07" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora19" type="radio" id="hora65" />
                                        <label for="hora65">08:00am - 12:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora19" type="radio" id="hora66" />
                                        <label for="hora66">12:00pm - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora19" type="radio" id="hora67" />
                                        <label for="hora67">16:00pm - 20:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre14" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora20" type="radio" id="hora69" />
                                        <label for="hora69">08:00am - 12:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora20" type="radio" id="hora70" />
                                        <label for="hora70">12:00pm - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora20" type="radio" id="hora71" />
                                        <label for="hora71">16:00pm - 20:00pm</label>
                                    </li>
                                </ul>
                            </div>  
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container hide" id="content-5"> 
        <div class="row">
            <div class="col m12">
                <div class="row">
                    <div class="col m6">
                        <h5 class="center-align">Sabado</h5>
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3">
                                        <a href="#septiembre03" onclick="cambiarText('#fecha7', '03 de Septiembre')">03/09</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre09" onclick="cambiarText('#fecha7', '17 de Septiembre')">17/09</a>
                                    </li>
                                </ul>
                                <h6 class="center-align" id="fecha7">03 de Septiembre</h6>
                            </div>
                            <div id="septiembre03" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora21" type="radio" id="hora73" />
                                        <label for="hora73">08:00am - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora21" type="radio" id="hora74" />
                                        <label for="hora74">16:00pm - 21:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre09" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora22" type="radio" id="hora75" />
                                        <label for="hora75">08:00am - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora22" type="radio" id="hora76" />
                                        <label for="hora76">16:00pm - 21:00pm</label>
                                    </li>
                                </ul>
                            </div>
                        </div>                      
                    </div>
                    
                    <div class="col m6">
                        <h5 class="center-align">Domingo</h5>
                        <div class="row">
                            <div class="col s12">
                                <ul class="tabs">
                                    <li class="tab col s3">
                                        <a href="#agosto28" onclick="cambiarText('#fecha8', '28 de Agosto')">28/08</a>
                                    </li>
                                    <li class="tab col s3">
                                        <a href="#septiembre041" onclick="cambiarText('#fecha8', '04 de Septiembre')">04/09</a>
                                    </li>
                                </ul>
                                <h6 class="center-align" id="fecha8">28 de Agosto</h6>
                            </div>
                            <div id="agosto28" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora23" type="radio" id="hora77" />
                                        <label for="hora77">08:00am - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora23" type="radio" id="hora78" />
                                        <label for="hora78">16:00pm - 21:00pm</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="septiembre041" class="col s12">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <input name="ghora24" type="radio" id="hora79" />
                                        <label for="hora79">08:00am - 16:00pm</label>
                                    </li>
                                    <li class="collection-item">
                                        <input name="ghora24" type="radio" id="hora80" />
                                        <label for="hora80">16:00pm - 21:00pm</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Formulario UAGRM -->

    <br><br>
        
    </body>
        
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        {{ Html::script('materialize/js/materialize.min.js') }}
        {{ Html::script('materialize/js/validaciones.js') }}
</html>
