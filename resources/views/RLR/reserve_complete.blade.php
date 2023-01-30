<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
         <form action="/rlr/register/complete" method="POST">
             @csrf
            <h1 class="title">以下の内容で予約しました</h1>
                <div class="content">
        
                         <div class='date'>
                            <h2>日付</h2>
                            <h3>{{ $reserve["date"] }}</3>
                            
                        </div>
                        
                       
                        <div class='time'>
                            <h2>時間</h2>
                           <h3>{{ $reserve["startTime"] }}~</h3>
                          
                        </div>
                        
                        <div class='room'>
                            <h2>部屋</h2>
                           <h3>{{$reserve["room"]}}</h3>
                          
                        </div>
                        
                          <div class='numOfPeople'>
                            <h2>人数</h2>
                           <h3>{{$reserve["numOfPeople"]}}</h3>
                           
                        </div>
                       
                        
            
                         
           
                      
                       <h2 class='myPage'>
                          <a href="/rlr/myPage">マイページに移動</a>
                　    　</h2>   
           
           
       
            </div>
        </form>
       
    </body>
</html>