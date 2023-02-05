<?php
use Carbon\Carbon;

 $now = Carbon::now();
?>


<x-app-layout>
    <x-slot name="header">
        　予約履歴
    </x-slot>
  

        
       
         <main>
              
          
            <form action="/rlr/manage/detail" method="POST">
            @csrf
                
                <h2>閲覧する日付を選択</h2>
       
                <div class=date>
                    
                      <input name='date' type="date">
                </div>
              

             <input type="submit" value="次へ"/>
             
             
            
           
               </form>
               
                        
     </main>
     
     </x-app-layout>