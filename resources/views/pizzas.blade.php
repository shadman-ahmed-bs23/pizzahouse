<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Pizzas</h2>
    <!-- For Loop -->
    @for ($i = 0; $i < 5; $i++)
        <p>The Value of i is {{ $i }} </p>
    @endfor

    @foreach ($pizzas as $pizza)
        <div> {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }}</div>
        @if ($loop->first)
            <span> - first in the loop</span>
        @endif
    @endforeach

</body>

</html>
