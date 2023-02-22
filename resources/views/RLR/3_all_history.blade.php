<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
 
        
         <div class='reserve'>
                    <div class=" text-2xl mt-10 m-auto">
                        <span class=" text-blue-500 rounded-xl ">
                      <a href="/mypage">マイページに戻る</a>
            　    　</h2> 
            　    　</span>
                     </div>
                   
                    
                     @foreach ($infos as $info)
                     
                        <h2 class='time'>{{ $info['user_name'] }}</h2>
                        <h2 class='time'>{{ $info['startTime'] }}〜</h2>
                        <h2 class='room'>{{ $info['number'] }}</h2>
                      
                           
                      @endforeach
                 </div>
                   
                    <h2 class='all_date'>
                      <a href="/3_all_date">日付選択に戻る</a>
            　    　</h2>   
                
    </x-app-layout>