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


class DateTimeController extends Controller
{

	public function store(Request $request) {
		if ($request->universidad == 1) {
			$this->guardarUpsa($request);
		} else {
			$this->guardarUagrm($request);
		}

		return view('welcome');
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
	}


    public function guardar() {
    	

    	for ($i=1; $i <= 4; $i++) { 

    		$dt = new DateTime();
    		$dt->fecha = '30/08';
			
			switch ($i) {
	    		case 1:
	    			$dt->hora = '07:00am - 11:00am';
	    			$dt->cantidad = 5;
	    			break;
	    		case 2:
	    			$dt->hora = '11:00am - 15:00pm';
	    			$dt->cantidad = 5;
	    			break;
	    		case 3:
	    			$dt->hora = '15:00pm - 19:00pm';
	    			$dt->cantidad = 5;
	    			break;
	    		case 4:
	    			$dt->hora = '19:00pm - 23:00pm';
	    			$dt->cantidad = 4;
	    			break;
	    	}

	    	$dt->dia = 'Martes';
	    	$dt->universidad = 'upsa';
	    	$dt->save();
    	}

    	return 'guardado';    	
    }
}
