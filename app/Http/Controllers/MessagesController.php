<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	
    	//return $request->input('name');
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required',
    		'message' => 'required'
    	]);	
    	//Migr version . return 'Molt bé';
        
        // Crear un nou missatge
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Guardar missatge
        $message->save();

        // Redirect
        return redirect('/home')->with('correcte', 'Message Sent');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages',$messages);
    }
}
