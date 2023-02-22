 <x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
 
 <div class="flex flex-col w-1/2 mt-10 m-auto">
        
            
             
               <div class="text-4xl text-left">
                    <h1 class="title">以下の内容で予約しました</h1>
                </div>
                
                <div class="text-left">
                               <div class="m-auto text-2xl w-1/3 mt-12 ">
        
                                     <div class='date'>
                                        <h2>日付:{{ $reserve["date"] }}</h2>
                                     
                                        
                                    </div>
                                    
                                   
                                    <div class='time'>
                                        <h2>時間:{{ $reserve["startTime"] }}~</h2>
                                      
                                      
                                    </div>
                                    
                                    <div class='room'>
                                        <h2>部屋:{{$number}}</h2>
                                      
                                      
                                    </div>
                                    
                                    
                        
            
                                     
                        <div class="text-center">
                                  
                                   <h2 class='myPage'>
                                      <a href="/mypage" class="mt-36 text-blue-500">マイページに移動</a>
                            　    　</h2>   
                       
                        </div>
                   
            </div>
      
        </div>
        
       </x-app-layout>