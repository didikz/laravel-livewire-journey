<div class="w-full max-w-xs">
    <div>
        <button wire:click="increment" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+</button>
        <h1 class="py-4 text-center">{{ $count }}</h1>
        <button wire:click="decrement" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">-</button>
    </div>
    <div class="mt-4">
        <input type="text" wire:model="name" class="input-sm rounded rounded-md py-2 px-2 shadow appearance-none text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        <p class="mt-2 ml-1 text-xs text-gray-700">Your name is: {{ $name }}</p>
    </div>
    <button wire:click="incrementNumber(2)" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">2</button>
</div>
