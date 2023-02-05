<?php
use Carbon\Carbon;

 $now = Carbon::now();
?>


<x-app-layout>
    <x-slot name="header">
        　予約履歴
    </x-slot>
  

        
       
         <main>
              
    <body>
           
                <div class='reserve'>
                    
                   
                    
                     @foreach ($infoss as $info)
                     
                        <h2 class='time'>{{ $info['user_name'] }}</h2>
                        <h2 class='time'>{{ $info['startTime'] }}〜</h2>
                        <h2 class='room'>{{ $info['room_num'] }}</h2>
                        <h2 class='numOfPeople'>{{ $info['numOfPeople'] }}人</h2>
                   
                      @endforeach
                 </div>
                   
                    <h2 class='manage_Date'>
                      <a href="/rlr/manage/date">日付選択に戻る</a>
            　    　</h2>   
                    
                
                        
    </main>
     
     </x-app-layout>