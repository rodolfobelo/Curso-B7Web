<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <x-cabecalho></x-cabecalho>
    @yield('content')
    <x-footer></x-footer>

</body>
</html>


{{-- 1 - origem no compras 
2 - gera um lançamento financeiro
3 - gestao fiscal e processa a guia
    - no periodo de apuração - encerra o periodo - geração de guias automatico - 
    - na Guia darf -processar as guias - geração do lançamento financeiro --}}