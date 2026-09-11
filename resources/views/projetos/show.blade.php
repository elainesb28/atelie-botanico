@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6">
    <a href="/" class="text-gray-500 hover:text-white mb-6 inline-block">← Voltar</a>
    
    <div class="text-center mb-10">
        <h2 class="text-3xl font-serif">{{ $projeto->titulo }}</h2>
        <div class="w-32 h-px bg-gray-700 mx-auto mt-4"></div>
    </div>

    <img src="{{ asset($projeto->imagem) }}" class="w-full rounded shadow-2xl mb-10 border border-gray-800">
    
    <div class="text-center max-w-2xl mx-auto">
        <p class="text-lg text-gray-300 italic">"{{ $projeto->descricao }}"</p>
        <p class="mt-6 text-gray-500 text-sm italic">Essa obra representa a paz encontrada no meio do caos da natureza.</p>
    </div>
</div>
@endsection