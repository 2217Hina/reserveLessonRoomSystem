<?php
use Carbon\Carbon;

 $now = Carbon::now();
?>

<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
 
        
        
            <form action="/3_all_history" method="POST">
            @csrf
                
                <h2>閲覧する日付を選択</h2>
       
                <div class=date>
                    
                      <input name='date' type="date">
                </div>
              

             <input type="submit" value="次へ"/>
             
             
            
           
               </form>
               
                 </x-app-layout>