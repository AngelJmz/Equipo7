<?php 

namespace App\Http\Controllers\dsos_controler;

use App\Http\Controllers\Controller;

use App\Model\pw\ejemplo_model; 
class new_controlador extends Controller
{
	public function index(){
		return view('dsos/holamundo');
	} 

	
}

