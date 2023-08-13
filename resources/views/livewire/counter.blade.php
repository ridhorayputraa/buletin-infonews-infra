<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
{{-- Count function --}}
{{-- ini adalah component dari liveWire --}}
    <h2>{{$countMinus}}</h2>
    <button wire:click="decrement">-</button>

</div>