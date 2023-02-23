<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
   <div class="h-full w-full flex items-center justify-center">
         
              
         <div class="m-auto text-2xl">
             <div class="w-96 border border-solid pt-14 px-8 mt-20 mb-20 bg-white rounded-xl">
        
                       <div class="text-center text-xl mb-5 font-bold">
                             <h1 class="title">この内容で登録しますか？</h1>
                        </div>
        
                 <form action="/g_reserve_complete" method="POST">
                     @csrf
                        
                        <div class="mb-5 flex-col">
                
                                     <div class='user_id'>
                                        <input name="reserve[user_id]" value={{ Auth::id() }} type="hidden">
                                    </div>
                    
                    
                                     <div class="flex-row py-5 px-5">
                                             <div class="float-left w-24 mr-5 border-l-4">
                                                <label>日付</label>
                                             </div>
                                            <h2 class="truncate">{{ $reserve["date"] }}</h2>
                                            <input name="reserve[date]" value={{ $reserve["date"] }} type="hidden">
                                    </div>
                                    
                                   
                                     <div class="flex-row py-5 px-5">
                                             <div class="float-left w-24 mr-5 border-l-4">
                                                <label>時間</label>
                                             </div>
                                            <h2 class="truncate">{{ $reserve["startTime"] }}~</h2>
                                      
                                        <input name="reserve[startTime]" value={{ $reserve["startTime"] }} type="hidden">
                                    </div>
                                    
                                     <div class="flex-row py-5 px-5">
                                             <div class="float-left w-24 mr-5 border-l-4">
                                                <label>部屋</label>
                                             </div>
                                            <h2 class="truncate">{{$reserve["room"]}}</h2>
                                      
                                        <input name="reserve[number]" value={{$reserve["room"]}} type="hidden">
                                    </div>
                                    
                                     
                                
                    
                                 
                                <div class="text-center my-10">
                                        <span class="m-auto border rounded-xl mt-10 bg-yellow-400 px-5 py-2 shadow-md">
                                          
                                            <input  type="submit" value="予約を確定" />
                                        </span>
                                         <span class="text-xs m-auto border rounded-xl mt-10 bg-red-400 px-5 py-2 shadow-md">
                                             <a href="/3_reserve_conditions">再度入力</a>
                                         </span>
                                </div>
                         </div>
                     </form>
                         </div>
          </div>
       </div>
      </x-app-layout>