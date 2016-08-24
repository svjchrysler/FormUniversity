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

use Cloudder;


class DateTimeController extends Controller
{
		public function pdf($id) {

			$data = DB::table('date_times')
						->join('details', 'date_times.id', '=', 'details.date_time_id')
						->join('groups', 'details.group_id', '=', 'groups.id')
						->where('groups.id', '=', $id)
						->select('details.id', 'date_times.fecha', 'date_times.hora', 'date_times.dia')
						->get();

			$person = Group::Find($id);

	    	$view =  \View::make('pdf.horario', compact('data', 'person'))->render();
		    $pdf = \App::make('dompdf.wrapper');
		    $pdf->loadHTML($view);
		    $pdf->setPaper('A4', 'landscape');

	       	return $pdf->download('horario.pdf');
	}

	public function store(Request $request) {
		$group = $this->guardarUpsa($request);
		return view('enviado')->with('id', $group->id);
	}

	public function enviado() {
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
		Cloudder::upload($request->file1);
		$group->file1 = $request->file1;

		$group->nombreone = $request->nameOne;
		$group->telefonoone = $request->phoneOne;
		$group->emailone = $request->emailOne;
		Cloudder::upload($request->file2);
		$group->file2 = $request->file2;

		$group->nombretwo = $request->nameTwo;
		$group->telefonotwo = $request->phoneTwo;
		$group->emailtwo = $request->emailTwo;
		Cloudder::upload($request->file3);
		$group->file3 = $request->file3;

		$group->nombrethree = $request->nameThree;
		$group->telefonothree = $request->phoneThree;
		$group->emailthree = $request->emailThree;
		Cloudder::upload($request->file4);
		$group->file4 = $request->file4;

		$group->nombrefour = $request->nameFour;
		$group->telefonofour = $request->phoneFour;
		$group->emailfour = $request->emailFour;
		Cloudder::upload($request->file5);
		$group->file5 = $request->file5;

		$group->nombrefive = $request->nameFive;
		$group->telefonofive = $request->phoneFive;
		$group->emailfive = $request->emailFive;
		Cloudder::upload($request->file6);
		$group->file6 = $request->file6;

		$group->save();

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
