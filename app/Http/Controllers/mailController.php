<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class mailController extends Controller
{
    public function send(Request $request){
    	$name = $request->input('text1');
    	$mail = $request->input('text2');
    	$celu = $request->input('text3');
    	$mesa = $request->input('text4');
        //return $mesa;
    	$to_name = 'Buildup';
		$to_email = 'info@buildup.mx';
		$data = array('name'=>$name, 'body' => $mesa, "telephone" => $celu, "mail" => $mail);
		Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)
					->subject('Contacto desde web');
			$message->from('info@buildup.mx','Buildup');
    	});
    	return redirect('contacto');
    }
}
