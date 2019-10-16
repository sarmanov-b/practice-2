<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailer;
use App\Login;

class LoginController extends Controller
{
    public function dfdf(Request $request){

    	$this->validate($request, [
    		'name' => 'required|string',
    		'surname' => 'required|string',
    	]);

    	// $students = new Login();
    	// $students->name = $request->name;
    	// $students->surname = $request->surname;
    	// $students->save();
        $name = $request->input('name');
        $surname = $request->input('surname');


    	Mail::to('iphone6berik@gmail.com')->send(new Mailer($name." ".$surname));

        echo $name." ".$surname;

    	/*
    	echo "Hi my name is ";
    	echo $name = $request->input('name');
    	echo "<br>and surname is ";
    	echo $surname = $request->input('surname');
		*/

    }
}
?>