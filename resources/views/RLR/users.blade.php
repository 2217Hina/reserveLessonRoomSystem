<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      @foreach($users as $user)
      
        <h1>{{$user->name}}</h1>
       
        @foreach($user->rooms as $room)
        
          <p>{{$room->piano}}</p>
        @endforeach
      @endforeach
        
        
    </body>
</html>