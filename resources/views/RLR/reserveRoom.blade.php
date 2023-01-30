<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
          <form action="/rlr/reserve/detail" method="POST">
            @csrf
            
             <h2>予約する部屋を選んでください</h2>
        
        
        
      
                <div class=room>
                        <select name="reserve[room]"> 
                       
                         @foreach( $empty_rooms as  $empty_room)
                          <option value=" {{ $empty_room->room_num}}">
                              
                              {{ $empty_room->room_num}}(最大人数：{{ $empty_room->capacity}}人)
                              
                           
                              
                           </option>
                           
                         @endforeach
                    
                </div>
                
                
                
                
                
              
                 <a>予約情報入力へ</a>
                     <input type="submit" value="次へ"/>
             
             
             
           
             </form>
           
           
           
       
    </body>
</html>