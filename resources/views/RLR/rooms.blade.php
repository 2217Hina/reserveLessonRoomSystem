<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        @foreach ($rooms as $room)
        
        <h1>{{$room->piano}}</h1>
        <h1>{{$room->room_num}}</h1>
        @foreach($room->users as $user)
        <p>{{$room->user}}</p>
      @endforeach
        @endforeach
        
        
    </body>
</html>
    