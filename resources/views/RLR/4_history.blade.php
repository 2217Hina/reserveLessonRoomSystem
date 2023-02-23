<?php
use Carbon\Carbon;

 $now = Carbon::now();
?>

<x-app-layout>
    <x-slot name="header">
        　予約履歴
    </x-slot>
        
      
                  
                   <h2>
                        <div class="mt-5 ml-5">
                            <span class="border rounded-xl bg-indigo-100 px-5 py-2 shadow-md">
                                <a href="/mypage" class="mt-36 text-gray-900">トップページに戻る</a>
                            </span>
                        </div>
            　    　</h2> 
            　    　<div class="mt-5 ml-5">
                    <h2>・【キャンセル】ボタンから予約をキャンセルできます</h2>              
           
                  
                <div class="flex flex-col w-1/2 mt-10 m-auto">
       
                     <div class='mt-10'>
                    
                     @foreach ($my_reserves as $my_reserve)
                        @if($my_reserve['date']>$now)
                        <div class='mt-10 border border-yellow-300 bg-white'>
                               <div class="flex-row py-2 px-5">
                                        <div class="float-left w-32 mr-5 border-l-4">
                                            <label class='w-40 p-2 truncate'>日時</label>
                                        </div>          
                                        <h2>{{ $my_reserve->date }}　{{ $my_reserve->startTime }}〜</h2>
                                </div>
                                
                                 <div class="flex-row py-2 px-5">
                                        <div class="float-left w-32 mr-5 border-l-4">
                                            <label class='w-40 p-2 truncate'>部屋</label>
                                        </div>    
                                         <h2>{{ $my_reserve['room']->number }}</h2>
                                </div>
                          
                            <!--キャンセル機能-->
                            <div class="text-right m-2">
                            <form action="/4_cancel/{{ $my_reserve->id }}" id="form_{{ $my_reserve->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="border border-solid border-gray-800 rounded-sm shadow-md text-gray-800 bg-gray-100" type="button" onclick="cancel({{ $my_reserve->id }})">キャンセル</button> 
                            </form>
                            </div>
                        </div>
                        
                      @else
                       <div class='mt-10 border border-blue-600 bg-white'>
                               <div class="flex-row py-2 px-5">
                                        <div class="float-left w-32 mr-5 border-l-4">
                                            <label class='w-40 p-2 truncate'>日時</label>
                                        </div>          
                                        <h2>{{ $my_reserve->date }}　{{ $my_reserve->startTime }}〜</h2>
                                </div>
                                
                                 <div class="flex-row py-2 px-5">
                                        <div class="float-left w-32 mr-5 border-l-4">
                                            <label class='w-40 p-2 truncate'>部屋</label>
                                        </div>    
                                         <h2>{{ $my_reserve['room']->number }}</h2>
                                </div>
                         </div>    
                       @endif
                      @endforeach
                 </div>
                 
                  
                <script>
                    function cancel(id) {
                        'use strict'
                
                        if (confirm('キャンセルすると元に戻せません。キャンセルしますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
              
         </div>                
        
        
   </x-app-layout>