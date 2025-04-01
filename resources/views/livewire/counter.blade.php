<div>
    <h1>{{ $count }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>

    <button wire:click="render">get users</button>

    <livewire:user-list />

</div>