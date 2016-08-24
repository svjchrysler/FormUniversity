<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Group extends Model
{
    public function setFile1Attribute($file1){
	    if(!empty($file1)){
	      	$this->attributes['file1'] = Carbon::now()->second.$file1->getClientOriginalName();
	      	$name = Carbon::now()->second.$file1->getClientOriginalName();
	      	\Storage::disk('local')->put($name, \File::get($file1));
	    }
  	}

  	public function setFile2Attribute($file2){
	    if(!empty($file2)){
	      	$this->attributes['file2'] = Carbon::now()->second.$file2->getClientOriginalName();
	      	$name = Carbon::now()->second.$file2->getClientOriginalName();
	      	\Storage::disk('local')->put($name, \File::get($file2));
	    }
  	}

  	public function setFile3Attribute($file3){
	    if(!empty($file3)){
	      	$this->attributes['file3'] = Carbon::now()->second.$file3->getClientOriginalName();
	      	$name = Carbon::now()->second.$file3->getClientOriginalName();
	      	\Storage::disk('local')->put($name, \File::get($file3));
	    }
  	}

  	public function setFile4Attribute($file4){
	    if(!empty($file4)){
	      	$this->attributes['file4'] = Carbon::now()->second.$file4->getClientOriginalName();
	      	$name = Carbon::now()->second.$file4->getClientOriginalName();
	      	\Storage::disk('local')->put($name, \File::get($file4));
	    }
  	}

  	public function setFile5Attribute($file5){
	    if(!empty($file5)){
	      	$this->attributes['file5'] = Carbon::now()->second.$file5->getClientOriginalName();
	      	$name = Carbon::now()->second.$file5->getClientOriginalName();
	      	\Storage::disk('local')->put($name, \File::get($file5));
	    }
  	}

  	public function setFile6Attribute($file6){
	    if(!empty($file6)){
	      	$this->attributes['file6'] = Carbon::now()->second.$file6->getClientOriginalName();
	      	$name = Carbon::now()->second.$file6->getClientOriginalName();
	      	\Storage::disk('local')->put($name, \File::get($file6));
	    }
  	}
}
