<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
<h2><?=$body?></h2>
<p> {{ $siteTitle }}
<br>
<span>Hello, @{{ $name }} </span>
<br>
<span> Hello, {!! $name !!} </span>


{{--   
    // chu thich 
    @include('notify', ['alertType' => 'alert-warning'])
--}}


@includeIf('notify', ['alertType' => 'alert-warning'])


<div class="list-post">
    @each('shared.post', $posts , 'post')
</div>


<x-todo>
    @foreach ($tasks as $task)
        <h3>{{ $task['name'] }}</h3>
    @endforeach
</x-todo>



</body>
</html>