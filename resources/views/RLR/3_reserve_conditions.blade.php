<?php
use Carbon\Carbon;

 $date = Carbon::now();
?>

<x-app-layout>
    <x-slot name="header">
        　練習室予約
    </x-slot>
 
    <div class="h-full w-full flex items-center justify-center text-center">
       <div class="m-auto text-2xl  ">
          
            
                

             <form action="/3_reserve_rooms" method="POST">
                     @csrf
                 <div class="border border-solid pt-14 px-8 mt-10 mb-5 bg-white rounded-xl text-center">   
                    <div class="text-center text-xl mb-5 font-bold">
                        <h2>予約する【日付】を選択してくだい</h2>
                    </div>
                     
            

                     <select name="reserve[date]" >
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
           
                   <div class="text-center text-xs mb-5 font-bold">
                        <p>(１週間後まで予約できます)</p>
                    </div>
 
              
           
           
        </div> 
        
        
        <div class="time">
            
           <div class="border border-solid pt-14 px-8 mt-5 mb-10 bg-white rounded-xl text-center">  
                            <div class="text-center text-xl mb-5 font-bold">
                                 <h2>予約する【時間】を選んでください</h2>
                            </div>
                                
                                <div class="mb-2">
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
               </div>
               
        </div>
        
                
                     <input class="text-xs border rounded-xl my-10 bg-red-100 px-5 py-2 shadow-md m-auto"  type="submit" value="次へ（部屋の選択）"/>
                   
                   
                     </form>
                     
                     
         </div>
        </div>            
      </div>   
        
    </x-app-layout>