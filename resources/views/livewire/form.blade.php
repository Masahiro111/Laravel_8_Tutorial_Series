<div>
    {{-- In work, do what you enjoy. --}}
    Name : <input type="text" wire:model.debounce.1000ms="name"><br>

    <hr>

    Message:
    <textarea wire:model="message" cols="30" rows="10"></textarea><br>

    Marital Status:
    Single <input type="radio" wire:model="marital_status" value="Single">
    Married <input type="radio" wire:model="marital_status" value="Married"><br>

    <hr>

    Favourite Color: <br>

    Red <input type="checkbox" value="red" wire:model="colors"><br>
    Green <input type="checkbox" value="green" wire:model="colors"><br>
    Blue <input type="checkbox" value="blue" wire:model="colors"><br>

    <hr>

    Favourite Fruit : <br>
    <select wire:model="fruit">
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Mango">Mango</option>
        <option value="Banana">Banana</option>
    </select>

    <hr>
    Name : {{$name}}<br>
    Message: {{$message}}<br>
    Marital Status: {{$marital_status}}<br>
    Favourite Colors:
    <ul>
        @foreach ($colors as $color)
        <li>{{$color}}</li>
        @endforeach
    </ul>
    <br>
    Favourite Fruit: {{$fruit}}


</div>