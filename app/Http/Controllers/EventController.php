<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {

        $events = Event::all();
        return view('welcome', ['events' => $events
        ]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request) {
        // Apenas para testar o POST e a manipulação de dados
        $nome = $request->input('nome');
        $idade = $request->input('idade');

        return response()->json([
            'message' => 'Dados recebidos com sucesso',
            'nome' => $nome,
            'idade' => $idade
        ]);
    }
}