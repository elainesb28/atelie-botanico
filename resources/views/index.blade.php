@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-6">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-serif mb-4 text-white">Galeria Completa</h2>
        <p class="text-gray-500">Explore todas as vibrações da natureza capturadas em traços.</p>
        <div class="w-24 h-px bg-gray-800 mx-auto mt-6"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($projetos as $p)
        <a href="{{ url('/projetos/' . $p->slug) }}" class="group block bg-[#131315] border border-gray-900 rounded-lg overflow-hidden">
            
            <img src="{{ asset($p->imagem) }}" class="w-full h-72 object-cover group-hover:scale-105 transition duration-500">

            <div class="p-6">
                <span class="text-xs text-amber-200 uppercase tracking-widest">{{ $p->categoria }}</span>
                <h4 class="text-xl font-serif mt-2">{{ $p->titulo }}</h4>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection