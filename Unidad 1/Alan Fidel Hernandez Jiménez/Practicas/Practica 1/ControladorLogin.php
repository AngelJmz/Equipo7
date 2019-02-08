<?php
 namespace app\http\Controllers\PW_Controller;
 use Iluminate\Http\Request;
 use App\Http\Controllers\Controller;

 /**
  *
  */
 class ControladorLogin extends Controller
 {

   public function index()
   {
     return view('PW/login');
   }
 }


 ?>
