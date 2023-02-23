<?php
use Carbon\Carbon;

 $now = Carbon::now();
?>

<x-app-layout>
    <x-slot name="header">
        　全体の予約
    </x-slot>
 
      <div class="h-full w-full flex items-center justify-center">
       <div class="m-auto text-2xl  ">
           <div class="border border-solid pt-14 px-8 mt-20 mb-20 bg-white rounded-xl text-center">  
        
                     <div class="text-center text-xl mb-5 font-bold">
                             <h2>閲覧する日付を選択</h2>
                    </div>
                    
                        <form action="/3_all_history" method="POST">
                             @csrf
                
                
       
                                <div class=date>
                                    
                                      <input name='date' type="date">
                                </div>
              

             <input type="submit" class="text-xs border rounded-xl my-10 bg-gray-200 px-5 py-2 shadow-md" value="次へ"/>
             
             
            
           
               </form>
             </div>
         </div>
     </div>
                 </x-app-layout>