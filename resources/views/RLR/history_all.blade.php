<?php
use Carbon\Carbon;

 $now = Carbon::now();
?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
          
                <div class='reserve'>
                    
                     @foreach ($my_reserves as $my_reserve)
                       @if($my_reserve['date']>$now)
                        
                        <h1 class='date'>{{ $my_reserve->date }}　{{ $my_reserve->startTime }}〜</h1>
                        <h1 class='room'>{{ $my_reserve->room_id }}</h1>
                        <h1 class='numOfPeople'>{{ $my_reserve->numOfPeople }}人</h1>
                        
                        <!--キャンセル機能-->
                        <form action="/rlr/history/cancel/{{ $my_reserve->id }}" id="form_{{ $my_reserve->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="cancel({{ $my_reserve->id }})">キャンセル</button> 
                        </form>
                       
                        
                      @else
                        <h2 class='date'>{{ $my_reserve->date }}　{{ $my_reserve->startTime }}〜</h2>
                        <h2 class='room'>{{ $my_reserve->room_id }}</h2>
                        <h2 class='numOfPeople'>{{ $my_reserve->numOfPeople }}人</h2>
                       @endif
                      @endforeach
                 </div>
                   
                    <h2 class='myPage'>
                      <a href="/rlr/myPage">マイページに戻る</a>
            　    　</h2>   
                    
                <script>
                    function cancel(id) {
                        'use strict'
                
                        if (confirm('キャンセルすると元に戻せません。キャンセルしますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
                        
    </body>
</html>