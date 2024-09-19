<div style="display: grid;
">
@for ($i = 1; $i <= 50; $i++)
    @component('modulo04.components.foto')
        @slot('image')
            {{ $url }} {{ $i }}
        @endslot
        @slot('i')
            {{ $i }}
        @endslot
    @endcomponent
@endfor
</div>