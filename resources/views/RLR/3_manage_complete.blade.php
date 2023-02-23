<x-app-layout>
    <x-slot name="header">
        　施設追加
    </x-slot>
 
      
                                  
   <div class="h-full w-full flex items-center justify-center">
           
         <div class="m-auto text-2xl">
                        <div class="w-96　pt-14 px-8 mt-20 mb-20 ">
                            <div class="text-center text-xl mb-5 font-bold">
                            <h1 class="title">以下の施設を追加しました</h1>
                        </div>
                        
             <div class="m-auto">
                  <div class="mb-5 flex-col">
                        @foreach($rooms as $room)
                         <div class='mt-10 border border-blue-600 bg-white rounded-xs'>
                             <div class="flex-row py-2 px-5">
                                <div class="float-left w-32 mr-5 border-l-4">
                                    <label class='w-40 p-2 truncate'>部屋番号</label>
                                </div>          
                                <h2　class="truncate">{{$room['number']}}</h1>
                             </div>
                            <div class="flex-row py-2 px-5">
                                    <div class="float-left w-32 mr-5 border-l-4">
                                        <label class='w-40 p-2 truncate'>最大人数</label>
                                    </div>          
                                <h2　class="truncate">{{$room['capacity']}}</h1>
                             </div>
                             <div class="flex-row py-2 px-5">
                                    <div class="float-left w-32 mr-5 border-l-4">
                                        <label class='w-40 p-2 truncate'>ピアノ</label>
                                    </div>          
                                    <h2　class="truncate">{{$room['piano']}}</h1>
                            </div>
                        </div>
                        @endforeach
                        
            
            
            <div class="mt-10 mx-auto text-center">
                    <span class="text-2xl text-blue-500 rounded-xl ">
                        <h2 class='myPage'>
                             <a href="/3_top">Topページに移動</a>
                    　 </h2>   
                　　</span>
                
                   <span class="text-2xl text-blue-500 rounded-xl ">
                        <h2>
                            <a href="/3_manage_rooms" class="mt-36 text-gray-900">施設管理画面に戻る</a>
                         </h2>  
                    </span>
                      
        　    
            </div>
   </x-app-layout>