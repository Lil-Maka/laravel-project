<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $obtencio){
    	
    	//return $request->input('name');
    	$this->validate($obtencio,[
    		'name' => 'required',
    		'email' => 'required',
    		'message' => 'required'
    	]);	
    	//Migr version . return 'Molt bé';
        
        // Crear un nou missatge
        $message = new Message;
        $message->name = $obtencio->input('name');
        $message->email = $obtencio->input('email');
        $message->message = $obtencio->input('message');

        // Guardar missatge
        $message->save();

        // Redirect
        return redirect('/home')->with('correcte', 'Missatge enviat');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages',$messages);
    }
}
