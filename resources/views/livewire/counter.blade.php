<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
{{-- Count function --}}
    <h2>{{$countMinus}}</h2>
    <button wire:click="decrement">-</button>

</div>