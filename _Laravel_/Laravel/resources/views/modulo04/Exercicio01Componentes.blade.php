<div style="display:flex; 
/* flex-direction: row;  */
justify-content: space-around; 
flex- ;
width: 100%;
">
@foreach ($pessoas as $pessoa)
    {{-- @component('modulo04.components.cardPerson')
        @slot('image')
            {{ $pessoa['image'] }}
        @endslot
        @slot('nome')
            {{ $pessoa['nome'] }}
        @endslot
        @slot('idade')
            {{ $pessoa['idade'] }}
        @endslot
        @slot('birth')
            {{ $pessoa['birth'] }}
        @endslot
    @endcomponent --}}
    @include('modulo04.components.cardPerson', $pessoa)
@endforeach