<x-app-layout>
    <x-slot name="header">
        　施設管理
    </x-slot>
                <h2>
                    <div class="mt-5 ml-5">
                        <span class="border rounded-xl bg-indigo-100 px-5 py-2 shadow-md">
                            <a href="/mypage" class="mt-36 text-gray-900">トップページに戻る</a>
                        </span>
                    </div>
        　    　</h2> 
        　    　<h2>
                    <div class="mt-5 ml-5">
                        <span class="border rounded-xl bg-indigo-100 px-5 py-2 shadow-md">
                            <a href="/3_manage_rooms" class="mt-36 text-gray-900">施設管理画面に戻る</a>
                        </span>
                    </div>
        　    　</h2> 
        　    　<div class="mt-5 ml-5">
                     <h2>・【削除】ボタンから施設を削除できます</h2>              
                </div>
                
         <div class="flex flex-col w-1/2 mt-10 m-auto">
                 <div class='mt-5'>
                        @foreach ($infos as $info)
                     
                           <div class='my-5 border border-blue-600 bg-white'>
                               
                                   <div class="flex-row py-2 px-5">
                                        <div class="float-left w-32 mr-5 border-l-4">
                                            <label class='w-40 p-2 truncate'>部屋番号</label>
                                        </div>          
                                        <h2>{{ $info['number'] }}</h2>
                                     </div>
                                            
                                     <div class="flex-row py-2 px-5">
                                        <div class="float-left w-32 mr-5 border-l-4">
                                            <label class='w-40 p-2 truncate'>最大人数</label>
                                        </div>          
                                        <h2>{{ $info['capacity'] }}人</h2>
                                     </div>
                                     
                                    <div class="flex-row py-2 px-5">
                                        <div class="float-left w-32 mr-5 border-l-4">
                                            <label class='w-40 p-2 truncate'>ピアノ</label>
                                        </div>          
                                        <h2>{{ $info['piano'] }}</h2>
                                     </div>
                                 
                              
                                    <div class="text-right p-2">
                                    <form action="/3_delete/{{ $info['id'] }}" id="form_{{ $info['id'] }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="border border-solid border-gray-800 rounded-sm shadow-md text-gray-800 bg-gray-100" onclick="deleteRoom({{ $info['id'] }})">削除</button> 
                                    </form>
        
                                    </div>
                             </div>
                          @endforeach
                 </div>
         </div>
                 
                 
                   
                  
      
       
                <script>
                    function deleteRoom(id) {
                        'use strict'
                
                        if (confirm('削除すると復元できません。本当に削除しますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
    
    </x-app-layout>