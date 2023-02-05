<x-app-layout>
    <x-slot name="header">
        　練習室予約
    </x-slot>
  

        
       
         <main>
              
            <div class="flex flex-col w-1/2 mt-10 m-auto">
                  <form action="/rlr/reserve/detail" method="POST">
                    @csrf
                      <div class="text-4xl text-left">
                         <h2>予約する部屋を選んでください</h2>
                      </div>
                
                        <div class="text-center">
                               <div class="m-auto text-2xl w-1/3 mt-12 ">
                      
                                
                                        <select name="reserve[room]"> 
                                       
                                         @foreach( $empty_rooms as  $empty_room)
                                          <option value=" {{ $empty_room->room_num}}">
                                              
                                              {{ $empty_room->room_num}}(最大人数：{{ $empty_room->capacity}}人)
                                              
                                           
                                              
                                           </option>
                                           
                                         @endforeach
                                    
                                </div>
                                
                            
                            
                            
                              
                                
                                         <input class="mt-20 text-xl border border-indigo-600 bg-blue-2" type="submit" value="次へ（詳細）"/>
                         
                                    
                               
                           </div>
                   
                     </form>
           
           
             </div>
       
    </main>
     
     </x-app-layout>