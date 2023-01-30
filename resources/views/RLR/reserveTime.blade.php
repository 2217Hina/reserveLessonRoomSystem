<?php
use Carbon\Carbon;

 $date = Carbon::now();
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
          <form action="/rlr/reserve/room" method="POST">
            @csrf
            
        <h2>予約する部屋と時間を選んでください</h2>
        
                <div class=time>
                      <select name="reserve[startTime]" >
                            <option value="10:00:00">
                              10:00~
                            </option>
                           
                            <option value="11:10:00">
                              11:10~
                            </option>
                            
                              <option value="12:20:00">
                              12:20~
                            </option>
                             <option value="13:30:00">
                              13:30~
                            </option>
                             <option value="14:40:00">
                               14:40~
                            </option>
                              <option value="15:50:00">
                             15:50~
                            </option>
                             <option value="17:00:00">
                              17:00~
                            </option>
                     </select>
              
                </div>
                
                
                
                
                
              
 <a>部屋の選択へ</a>
             <input type="submit" value="次へ"/>
             
             
             
           
               </form>
           
           
           
       
    </body>
</html>