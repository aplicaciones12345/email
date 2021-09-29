<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, ya que será la responsable de enviar el email

class EmailController extends Controller
{
    public function contact(Request $request){
    	$subject = "Asunto del correo";
    	$for = "cursoaplicaciones220@gmail.com";//La misma que en .env MAIL_USERNAME
    	Mail::send('email', $request->all(), function($msg) use($subject,$for) {
    		                // $msg->from("javier7422@gmail.com", "Usuario");
    						$msg->from('javier7422@gmail.com', 'Usuario');
    		                $msg->subject($subject);
    		                $msg->to($for);
    						});
    	return redirect()->back();
    }
} //cierre de la clase
