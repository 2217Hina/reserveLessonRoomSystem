<?php

use Carbon\Carbon;

?>

<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
  

        
       
         <main>
        
           
           <div class="flex flex-col w-1/2 mt-10 m-auto">
                  <form action="/rlr/reserve/confirm" method="POST">
                    @csrf
                        <div class="text-4xl text-left">
                        <h2>人数を入力してください</h2></h2>
                        </div>
                        
                        
                          <div class="text-left">
                               <div class="m-auto text-2xl w-1/3 mt-12 ">
                                
                                   <h2>日付:{{$reserve["date"]}}</h2>
                                   <h2>時間:{{$reserve["startTime"]}}</h2>
                                   <h2>部屋:{{$reserve["room_num"]}}<h2>
                
                                <div class="text-center">
                                 <select name="reserve[numOfPeople]" >
                                       @for($i=1;$i<=$reserve['capacity'];$i++)
                                       
                                        
                                       
                                              <option value={{$i}}>{{$i}}人</option>
                                              
                                         
                                       
                                       
                                       @endfor
                                </select>
                
                
                
                
                
                
                        
                            
                            </div>
                         </div>
                        
                        
                        
                        
                        
                      <div class="text-center">
                        
                             <input class="mt-20  text-xl border border-indigo-600 bg-blue-2" type="submit" value="予約内容確認"/>
                     
                     </div>
                     
                   
                     </form>
                   
                   
             </div>
     </main>
     
     </x-app-layout>