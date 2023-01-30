<?php

use Carbon\Carbon;

?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        
          <form action="/rlr/reserve/confirm" method="POST">
            @csrf
            
             <h2>人数を入力してください</h2></h2>
        
               <h2>日付{{$reserve["date"]}}</h2>
               <h2>時間{{$reserve["startTime"]}}</h2>
               <h2>部屋{{$reserve["room_num"]}}<h2>
        
                  <div class=numberOfPeople>
                     <select name="reserve[numOfPeople]" >
                   @for($i=1;$i<=$reserve['capacity'];$i++)
                   
                    
                   
                          <option value={{$i}}>{{$i}}人</option>
                          
                     
                   
                   
                   @endfor
                   </select>
        
        
        
        
        
        
                
                    
                </div>
                
                
                
                
                
              
                 <a>予約内容確認へ</a>
                     <input type="submit" value="次へ"/>
             
             
             
           
             </form>
           
           
           
       
    </body>
</html>