<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JardimDigital;

class JardimDigitalController extends Controller
{
    public function home()
    {
        $projetos = JardimDigital::where('destaque', true)->get();
        return view('home', compact('projetos'));
    }

    public function index()
    {
        $projetos = JardimDigital::all();
        return view('index', compact('projetos'));
    }

    public function show($slug)
    {
        $projeto = JardimDigital::where('slug', $slug)->firstOrFail();
        return view('projetos.show', compact('projeto'));
    }
}
