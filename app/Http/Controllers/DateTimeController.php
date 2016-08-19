<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;
use Session;
use Redirect;

use App\DateTime;

use App\Group;

use App\Detail;

use DB;


class DateTimeController extends Controller
{

	public function store(Request $request) {
		$group = $this->guardarUpsa($request);
		return view('enviado');
	}

	public function enviarCorreo($id) {
		$data_group = DB::table('groups')
						->join('details', 'groups.id', '=', 'details.group_id')
						->join('date_times', 'details.date_time_id', '=', 'date_times.id')
						->where('groups.id', '=', $id)
						->get();

		Mail::send('correo', ['data_group' => $data_group], function($msj) {
			$msj->subject('Datos de los horarios');
			$msj->to('svjchrysler@gmail.com');
		});
	}

	public function guardarUpsa($request) {
		$uni = 'upsa';
		$group = $this->guardarGrupo($request, $uni);
		
		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora1;
		$detail->save();
		$this->actualizarDateTime($request->ghora1);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora2;
		$detail->save();
		$this->actualizarDateTime($request->ghora2);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora3;
		$detail->save();
		$this->actualizarDateTime($request->ghora3);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora4;
		$detail->save();
		$this->actualizarDateTime($request->ghora4);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora5;
		$detail->save();
		$this->actualizarDateTime($request->ghora5);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora6;
		$detail->save();
		$this->actualizarDateTime($request->ghora6);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora7;
		$detail->save();
		$this->actualizarDateTime($request->ghora7);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora8;
		$detail->save();
		$this->actualizarDateTime($request->ghora8);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora9;
		$detail->save();
		$this->actualizarDateTime($request->ghora9);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora10;
		$detail->save();
		$this->actualizarDateTime($request->ghora10);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora11;
		$detail->save();
		$this->actualizarDateTime($request->ghora11);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora12;
		$detail->save();
		$this->actualizarDateTime($request->ghora12);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora13;
		$detail->save();
		$this->actualizarDateTime($request->ghora13);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora14;
		$detail->save();
		$this->actualizarDateTime($request->ghora14);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora15;
		$detail->save();
		$this->actualizarDateTime($request->ghora15);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora16;
		$detail->save();
		$this->actualizarDateTime($request->ghora16);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora17;
		$detail->save();
		$this->actualizarDateTime($request->ghora17);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora18;
		$detail->save();
		$this->actualizarDateTime($request->ghora18);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora19;
		$detail->save();
		$this->actualizarDateTime($request->ghora19);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora20;
		$detail->save();
		$this->actualizarDateTime($request->ghora20);

		return $group;

	}

	public function actualizarDateTime($id) {
		$datetime = DateTime::Find($id);
		$datetime->cantidad = $datetime->cantidad - 1;
		$datetime->save();
	}

	public function guardarGrupo($request, $uni) {
		$group = new Group();
		$group->universidad = $uni;

		$group->representante = $request->nameRepresentante;
		$group->rtelefono = $request->phoneRepresentante;
		$group->remail = $request->emailRepresentante;

		$group->nombreone = $request->nameOne;
		$group->telefonoone = $request->phoneOne;
		$group->emailone = $request->emailOne;

		$group->nombretwo = $request->nameTwo;
		$group->telefonotwo = $request->phoneTwo;
		$group->emailtwo = $request->emailTwo;

		$group->nombrethree = $request->nameThree;
		$group->telefonothree = $request->phoneThree;
		$group->emailthree = $request->emailThree;

		$group->nombrefour = $request->nameFour;
		$group->telefonofour = $request->phoneFour;
		$group->emailfour = $request->emailFour;

		$group->nombrefive = $request->nameFive;
		$group->telefonofive = $request->phoneFive;
		$group->emailfive = $request->emailFive;

		$group->save();

		$global_group = $group->id;

		return $group;
	}

	public function guardarUagrm($request) {
		$uni = 'uagrm';
		$group = $this->guardarGrupo($request, $uni);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora13;
		$detail->save();
		$this->actualizarDateTime($request->ghora13);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora14;
		$detail->save();
		$this->actualizarDateTime($request->ghora14);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora15;
		$detail->save();
		$this->actualizarDateTime($request->ghora15);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora16;
		$detail->save();
		$this->actualizarDateTime($request->ghora16);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora17;
		$detail->save();
		$this->actualizarDateTime($request->ghora17);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora18;
		$detail->save();
		$this->actualizarDateTime($request->ghora18);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora19;
		$detail->save();
		$this->actualizarDateTime($request->ghora19);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora20;
		$detail->save();
		$this->actualizarDateTime($request->ghora20);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora21;
		$detail->save();
		$this->actualizarDateTime($request->ghora21);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora22;
		$detail->save();
		$this->actualizarDateTime($request->ghora22);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora23;
		$detail->save();
		$this->actualizarDateTime($request->ghora23);

		$detail = new Detail();
		$detail->group_id = $group->id;
		$detail->date_time_id = $request->ghora24;
		$detail->save();
		$this->actualizarDateTime($request->ghora24);

		return $group;
	}

   	// public function guardar() {

   	// 	for ($i=1; $i < 5; $i++) { 
   	// 		$date = new DateTime();
   	// 		$date->fecha = "22/09";
   			
   	// 		switch ($i) {
   	// 			case 1:
   	// 				$date->hora = "7:00am - 10:40am";
   	// 				break;
   	// 			case 2:
   	// 				$date->hora = "11:00am - 14:40pm";
   	// 				break;
				// case 3:
   	// 				$date->hora = "15:00pm - 18:40pm";
   	// 				break;
				// case 4:
   	// 				$date->hora = "19:00pm - 22:40pm";
   	// 				break;
   	// 		}

   	// 		$date->universidad = "upsa";
   	// 		$date->dia = "Jueves";
   	// 		$date->cantidad = 2;
   	// 		$date->save();
   	// 	}
    // 	return 'guardado';    	
    // }

}
