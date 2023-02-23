<x-app-layout>
    <x-slot name="header">
        　全体の予約
    </x-slot>
 
        
                <h2>
                    <div class="mt-5 ml-5">
                        <span class="border rounded-xl bg-indigo-100 px-5 py-2 shadow-md">
                            <a href="/mypage" class="mt-36 text-gray-900">トップページに戻る</a>
                        </span>
                    </div>
        　    　</h2> 
        　    　
        　    　<h2 class='all_date'>
        　    　     <div class="mt-2 ml-5">
                        <span class="border rounded-xl bg-green-100 px-5 py-2 shadow-md">
                             <a href="/3_all_date">日付選択に戻る</a>
                         </span>
                    </div>
        　    　</h2>  
        　    
                          
       
                  
                <div class="flex flex-col w-1/2 m-auto">
       
                     <div class='mt-2'>
                   
                    
                             @foreach ($infos as $info)
                             
                                <div class='my-2 border border-blue-600 bg-white rounded-xl'>
                                      
                                        <div class=" border-l-4 my-2 ml-2">
                                            <h2 class='w-40 p-2 truncate'>{{ $info['user_name'] }}</h2>
                                         </div>
                                
                             
                                        <div class=" border-l-4 my-2 ml-2">
                                            <h2 class='w-40 p-2 truncate'>{{ $info['startTime'] }}〜</h2>
                                         </div>
                               
                                         <div class=" border-l-4 my-2 ml-2">
                                            <h2 class='w-40 p-2 truncate'>{{ $info['number'] }}</h2>
                                         </div>
                                        
                      
                                 </div>   
                              @endforeach
                    </div>
               </div>
                   
                     
                
    </x-app-layout>