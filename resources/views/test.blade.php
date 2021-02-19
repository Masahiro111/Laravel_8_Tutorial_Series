@include('headers')

<h1>Test Blade</h1>

@php
$name = 'jennifer';

$fruits = array('Mango', 'Apple', 'Banana','Stroberry');
$age = 20;
@endphp

<h2>{{$name}}</h2>

<h2>Fruits</h2>

@foreach ($fruits as $fruit)
<ul>
    <li>{{$fruit}}</li>
</ul>
@endforeach

<br>

@if (count($fruits)==1)
single Fruit
@elseif(Count($fruits)>1)
More than one Fruit
@else
No Fruit
@endif

<br>

{{ $age > 18 ? 'You are adult' : 'You are not adult' }}