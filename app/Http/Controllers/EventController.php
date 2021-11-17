<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function contents() {
        $busca = request('search');

        return view('contents', ['busca' => $busca]);
    }
    public function create(){
        return view('events.create');
    }
    public function index(){

        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }
    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;

         // Image Upload
         if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        // salvar dados no banco
        $event->save();

        // redirecionar usuário
        return redirect('/events/create')->with('msg', 'Evento criado com sucesso!');
    }
}
