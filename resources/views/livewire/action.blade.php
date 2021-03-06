<div>
    {{-- Do your work, then step back. --}}
    <button type="button" wire:click="addTwoNumbers(32,55)">Sum</button>

    <textarea wire:keydown.enter="displayMessage($event.target.value)" name="" id="" cols="30" rows="10"></textarea>

    <form wire:submit.prevent="getSum">
        Enter Num 1:<input type="text" name="num1" wire:model="num1">
        Enter Num 2:<input type="text" name="num2" wire:model="num2">
        <button type="submit">Submit</button>
    </form>

    Sum: {{$sum}}<br>
    Message: {{$message}}

</div>