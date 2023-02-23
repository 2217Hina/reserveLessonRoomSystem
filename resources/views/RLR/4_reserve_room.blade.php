<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
    <div class="h-full w-full flex items-center justify-center">
         <div class="m-auto text-2xl text-center">
            <div class="border border-solid pt-14 px-8 my-10 bg-white rounded-xl text-center flex-col">  

                 <form action="/g_reserve_comfirm" method="POST">
                     @csrf
                    
                                      <div class="text-center text-xl mb-5 font-bold">
                                         <h2>予約する部屋を選んでください</h2>
                                      </div>
                                        
                                    <div class="my-5">
                                        <select name="reserve[room]"> 
                                       
                                         @foreach( $empty_rooms as  $empty_room)
                                          <option value=" {{ $empty_room->number}}">
                                              
                                              {{ $empty_room->number}}(最大人数：{{ $empty_room->capacity}}人)
                                              
                                             
                                           </option>
                                           
                                         @endforeach
                                    
                                        </select>
                                     </div>
                                 </div>
                              <input class="text-xs border rounded-xl my-5 bg-red-100 px-5 py-2 shadow-md" type="submit" value="次へ（詳細）"/>
                         </form>
             </div>
                 
             </div>
         </div>
  </x-app-layout>