<?php
use Carbon\Carbon;

 $date = Carbon::now();
?>

<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
        <div class="flex flex-col w-1/2 mt-10 m-auto">

            <form action="/g_reserve_rooms" method="POST">
                @csrf
                    <div class="text-2xl text-left">
                        <h2>①予約する【日付】を選択してくだい</h2>
                    </div>
                     <div class="text-xl text-left　ml-5">
                        <p>(１週間後まで予約できます)</p>
                    </div>
            

                     <select class="ml-10" name="reserve[date]" >
                            <option value="{{$date->format('Y-m-d')}}">
                               {{$date->format('m月d日')}}
                            </option>
                           
                            <option value="{{ $date->copy()->addDay(1)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(1)->format('m月d日')}}
                            </option>
                            
                              <option value="{{ $date->copy()->addDay(2)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(2)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(3)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(3)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(4)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(4)->format('m月d日')}}
                            </option>
                              <option value="{{ $date->copy()->addDay(5)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(5)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(6)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(6)->format('m月d日')}}
                            </option>
                     </select>
           
                   
 
              
           
           
       
        
        
        <div class="time">
            
              
                            <div class="text-2xl text-left">
                                 <h2>②予約する【時間】を選んでください</h2>
                            </div>
                         
                                  <select class="ml-10" name="reserve[startTime]" >
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
                   
                   
                     </form>
                     
                     
         </div>
         
  </div> 
                   
        
        
   </x-app-layout>