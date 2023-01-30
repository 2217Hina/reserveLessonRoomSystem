<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
         <form action="/rlr/reserve/complete" method="POST">
             @csrf
            <h1 class="title">この内容で登録しますか？</h1>
                <div class="content">
        
        
                         <div class='user_id'>
                           
                          
                             <input name="reserve[user_id]" value={{ Auth::id() }} type="hidden">
                        </div>
        
        
                         <div class='date'>
                            <h2>日付</h2>
                            <h3>{{ $reserve["date"] }}</3>
                             <input name="reserve[date]" value={{ $reserve["date"] }} type="hidden">
                        </div>
                        
                       
                        <div class='time'>
                            <h2>時間</h2>
                           <h3>{{ $reserve["startTime"] }}~</h3>
                            <input name="reserve[startTime]" value={{ $reserve["startTime"] }} type="hidden">
                        </div>
                        
                        <div class='room'>
                            <h2>部屋</h2>
                           <h3>{{$reserve["room"]}}</h3>
                            <input name="reserve[room_id]" value={{$reserve["room"]}} type="hidden">
                        </div>
                        
                          <div class='numOfPeople'>
                            <h2>人数</h2>
                           <h3>{{$reserve["numOfPeople"]}}</h3>
                            <input name="reserve[numOfPeople]" value={{$reserve["numOfPeople"]}} type="hidden">
                        </div>
                       
                        
            
                         
           
                      
                       <input type="submit" value="予約を確定" />
           
       
            </div>
        </form>
        <a href="/rlr/reserve">再度入力</a>
    </body>
</html>