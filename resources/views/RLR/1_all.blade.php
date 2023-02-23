<x-app-layout>
    <x-slot name="header">
        　管理者情報管理
    </x-slot>
            
               
                             
                <h2>
                    <div class="mt-5 ml-5">
                        <span class="border rounded-xl bg-indigo-100 px-5 py-2 shadow-md">
                            <a href="/mypage" class="mt-36 text-gray-900">トップページに戻る</a>
                        </span>
                    </div>
        　    　</h2> 
        　    　<div class="mt-5 ml-5">
                <h2>・【削除】ボタンから管理者を削除できます</h2>              
           
   <div class="flex flex-col w-1/2 mt-10 m-auto">
       
        <div class='mt-10'>
                        @foreach ($infos as $info)
                   
                            <div class=' mt-10 border border-pink-900 bg-white rounded-sm'>
                               
                                        <div class="flex-row py-2 px-5">
                                            <div class="float-left w-32 mr-5 border-l-4">
                                                <label class='w-40 py-2 truncate'>氏名</label>
                                            </div>
                                           
                                            <h2>{{ $info['name'] }}</h2>
                                        </div>
                                       
                                         <div class="flex-row py-2 px-5">
                                             <div class="float-left w-32 mr-5 border-l-4">
                                                <label class='w-40 py-2 truncate'>教授番号</label>
                                              </div>
                                            <h2>{{ $info['number'] }}</h2>
                                        </div>
                                        <div class="flex-row py-2 px-5">
                                            <div class="float-left w-32 mr-5 border-l-4">
                                             <label class='w-40 py-2 truncate'>メールアドレス</label>
                                              </div>
                                            <h2>{{ $info['email'] }}</h2>
                                        </div>
                                      
                                        <div class="text-right p-2">
                                            <form action="/1_delete/{{ $info['id'] }}" id="form_{{ $info['id'] }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="border border-solid border-gray-800 rounded-sm shadow-md text-gray-800 bg-gray-100" onclick="deleteUser({{ $info['id'] }})">削除</button> 
                                            </form>
                                        </div>
                            </div>
                        
                        @endforeach
                 </div>
                 
             </div>
                   
                  
                 </div>
       </div>
       
                <script>
                    function deleteUser(id) {
                        'use strict'
                
                        if (confirm('削除すると復元できません。本当に削除しますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
    
    </x-app-layout>