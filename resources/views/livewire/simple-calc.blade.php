<div>
    <form wire:submit.prevent="calc">
        first Number : <input type="text" name="num1" wire:model="num1">
        Second Number : <input type="text" name="num2" wire:model="num2">
        <button type="submit" > Add </button>
    </form>

    <br>
    Result = {{$sum}}
</div>
