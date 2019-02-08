<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Arte\Usuario;

class IndexController extends Controller
{
	public function index()
	{
		return view('inicio/index');
	}

}
