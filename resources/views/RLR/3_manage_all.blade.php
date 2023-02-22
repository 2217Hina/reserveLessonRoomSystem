<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
 
        
       @foreach ($infos as $info)
                     
                        <h2 class='number'>部屋番号：{{ $info['number'] }}</h2>
                        <h2 class='capacity'>最大人数：{{ $info['capacity'] }}人</h2>
                        <h2 class='piano'>ピアノ：{{ $info['piano'] }}</h2>
                      
                            <div class="text-right">
                            <form action="/3_delete/{{ $info['id'] }}" id="form_{{ $info['id'] }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteRoom({{ $info['id'] }})">削除</button> 
                            </form>

                            </div>
                      @endforeach
                 </div>
                   
                   <div class="text-center">
                                  
                                   <h2 class='myPage'>
                                      <a href="/mypage" class="mt-36 text-blue-500">マイページに移動</a>
                            　    　</h2>   
                       
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