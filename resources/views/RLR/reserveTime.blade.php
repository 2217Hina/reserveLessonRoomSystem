<?php
use Carbon\Carbon;

 $date = Carbon::now();
?>

<!DOCTYPE html>


<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
  

        
       
         <main>
                  <div class="flex flex-col w-1/2 mt-10 m-auto">
                      <form action="/rlr/reserve/room" method="POST">
                        @csrf
                            <div class="text-4xl text-left">
                                 <h2>予約する【時間】を選んでください</h2>
                            </div>
                    
                    
                    
                            <div class="text-center">
                                       <div class="m-auto text-2xl w-1/3 mt-12 ">
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
                            
                            
                            
                            
                       
                               
                                       
                                                 <input class="mt-20 text-xl border border-indigo-600 bg-blue-2" type="submit" value="次へ（部屋の選択）"/>
                                            
                                 </div>
                       
                           </form>
                   
               
               </div>  
       
     </main>
     
     </x-app-layout>