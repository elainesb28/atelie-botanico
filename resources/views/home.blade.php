@extends('layout')

@section('content')
<div class="relative h-[60vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e')">
    <div class="absolute inset-0 bg-black/50 gradient-overlay"></div>
    <div class="relative text-center">
        <h2 class="text-4xl md:text-6xl font-serif mb-4">Sentir a vibração da terra através do olhar e da arte.</h2>
    </div>
</div>

<div class="max-w-4xl mx-auto py-16 px-6 flex flex-col md:flex-row items-center gap-10">
    <img src="{{ asset('img/FotoProfissionalElaineSilva.jpeg') }}" class="w-48 h-48 rounded-full border-2 border-gray-700 object-cover">
    <div>
        <h3 class="text-2xl font-serif mb-4">Elaine Silva</h3>
        <p class="text-gray-400 leading-relaxed">Brasileira e apaixonada pela essência da natureza, Elaine
            Silva dedica sua arte a traduzir o invisível. Desde muito jovem, utiliza o desenho como ferramenta para dar forma
            ao que nasce da alma, unindo a técnica do paisagismo à
            sensibilidade emocional. Seu objetivo é claro: fazer com que sua arte transborde, conectando
            o público à vibração pura e orgânica do mundo natural.</p>
    </div>
</div>

<div class="max-w-6xl mx-auto py-10 px-6">
    <h3 class="text-center text-xl font-serif mb-10 border-b border-gray-800 pb-4 italic">— Destaques —</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($projetos as $p)
        <a href="{{ url('/projetos/' . $p->slug) }}" class="group block bg-gray-900 overflow-hidden rounded-lg">
            <img src="{{ $p->imagem }}" class="w-full h-64 object-cover group-hover:scale-105 transition duration-500">
            <div class="p-6 text-center">
                <h4 class="text-lg font-serif">{{ $p->titulo }}</h4>
                <p class="text-gray-500 text-sm italic">Ver detalhes da obra</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection