<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $busca = request('search');

        return view('contents', ['busca' => $busca]);
    }
    public function create(){
        return view('events.create');
    }
}
