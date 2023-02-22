<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
 
        
       @foreach ($infos as $info)
                     
                        <h2 class='name'>氏名：{{ $info['name'] }}</h2>
                        <h2 class='number'>教授番号：{{ $info['number'] }}人</h2>
                        <h2 class='email'>メールアドレス：{{ $info['email'] }}</h2>
                      
                            <div class="text-right">
                            <form action="/1_delete/{{ $info['id'] }}" id="form_{{ $info['id'] }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteUser({{ $info['id'] }})">削除</button> 
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
                    function deleteUser(id) {
                        'use strict'
                
                        if (confirm('削除すると復元できません。本当に削除しますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
    
    </x-app-layout>