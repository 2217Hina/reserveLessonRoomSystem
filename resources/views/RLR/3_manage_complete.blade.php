<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
 
      
                                  
            <h1>以下の施設を追加しました</h1>
            
            @foreach($rooms as $room)
            <h1>部屋番号：{{$room['number']}}</h1>
            <h1>最大人数：{{$room['capacity']}}</h1>
            <h1>ピアノ：{{$room['piano']}}</h1>
            @endforeach
            
            
            
             <h2 class='3_top'>
                 <a href="/3_top">Topページに移動</a>
        　　</h2>   
      
   </x-app-layout>