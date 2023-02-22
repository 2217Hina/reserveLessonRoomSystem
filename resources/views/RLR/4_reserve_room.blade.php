<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
    <div class="flex flex-col w-1/2 mt-10 m-auto">
         <form action="/g_reserve_comfirm" method="POST">
                    @csrf
                    
                     
                          <div class="text-2xl text-left">
                             <h2>予約する部屋を選んでください</h2>
                          </div>
                    
                           
                          
                                    
                                            <select name="reserve[room]"> 
                                           
                                             @foreach( $empty_rooms as  $empty_room)
                                              <option value=" {{ $empty_room->number}}">
                                                  
                                                  {{ $empty_room->number}}(最大人数：{{ $empty_room->capacity}}人)
                                                  
                                               
                                                  
                                               </option>
                                               
                                             @endforeach
                                        
                                    </select>
                                    
                                    
                                   
                                
                                
                                
                                  
                                    
                                             <input class="mt-20 text-xl border border-indigo-600 bg-blue-2" type="submit" value="次へ（詳細）"/>
                             
                                        
                                   
                               </div>
                   
                     </form>
              </div>
  </x-app-layout>