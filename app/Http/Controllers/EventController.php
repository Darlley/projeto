<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

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

        $search = request('search');

        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $events = Event::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
    }
    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->items = $request->items;

         // Image Upload
         if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        // salvar dados no banco
        $event->save();

        // redirecionar usuário
        return redirect('/events/create')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', '=', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    public function dashboard(){
        $user = auth()->user();
        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }
}
