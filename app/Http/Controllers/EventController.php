<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'Andrey';

        $arr = [10, 20, 30, 40, 50];

        $arrnomes = ['ZEZINHO', 'CHIQUINHO', 'TOINHO'];
        return view(
            'welcome',
            [
                'nome' => $nome,
                'arr' => $arr,
                'arrnomes' => $arrnomes
            ]
        );
    }
    
    public function create(){
        return view('events.create');
    }
}
