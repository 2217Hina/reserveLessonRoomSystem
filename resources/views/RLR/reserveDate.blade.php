<?php
use Carbon\Carbon;

 $date = Carbon::now();
?>

<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
  

        
       
         <main>


 <div class="flex flex-col w-1/2 mt-10 m-auto">

          <form action="/rlr/reserve/time" method="POST">
            @csrf
                    <div class="text-4xl text-left">
                        <h2>予約する【日付】を選択してくだい</h2>
                    </div>
                     <div class="text-2xl text-left">
                        <p>(１週間後まで予約できます)</p>
                    </div>
            
             <div class="text-center">
               <div class="m-auto text-2xl w-1/3 mt-12 ">
                    
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
                </div>
              
              
              
           
                
                   
            
                     <input class="mt-20 text-xl border border-indigo-600 bg-blue-2" type="submit" value="次へ（時間選択）"/>
                    
               
             
             
             <!-- <input type="date"> -->
           
               </form>
           
           
</div>       
    </main>
     
     </x-app-layout>