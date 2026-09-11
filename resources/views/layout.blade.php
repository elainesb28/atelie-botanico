<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ateliê Botânico Elaine Silva</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #0d0d0f; color: #e5e7eb; }
        .gradient-overlay { background: linear-gradient(to bottom, rgba(0,0,0,0) 0%, rgba(13,13,15,1) 100%); }
    </style>
</head>
<body>
    <nav class="p-6 flex justify-between items-center border-b border-gray-800">
    <h1 class="text-xl font-serif">Ateliê Botânico Elaine Silva</h1>
    <div class="space-x-6 text-sm uppercase tracking-widest">
        <a href="{{ url('/') }}" class="hover:text-amber-200">Início</a>
        <a href="{{ url('/projetos') }}" class="hover:text-amber-200">Obras</a>
        <a href="https://wa.me/SEUNUMERO" target="_blank" class="hover:text-amber-200">Contato</a>
    </div>
</nav>

    <main>@yield('content')</main>

    <footer class="p-10 text-center text-gray-600 border-t border-gray-900 mt-10">
        &copy; 2026 Jardim Digital - Elaine Silva
    </footer>
</body>
</html>