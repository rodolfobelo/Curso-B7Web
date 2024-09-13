@foreach ($pessoas as $pessoa)
    @component('components.foto')
        @slot('image') {{-- vaariavel image da view component foto --}}
            {{ $pessoa['image'] }}
        @endslot
        @slot('image') {{-- vaariavel image da view component foto --}}
            {{ $pessoa['image'] }}
        @endslot
    @endcomponent
@endforeach
