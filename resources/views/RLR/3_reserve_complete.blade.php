<x-app-layout>
    <x-slot name="header">
        　練習室予約
    </x-slot>
 
 
 <div class="h-full w-full flex items-center justify-center">
           
         <div class="m-auto text-2xl">
                        <div class="w-96 border border-solid pt-14 px-8 mt-20 mb-20 bg-white rounded-xl">
                            <div class="text-center text-xl mb-5 font-bold">
                            <h1 class="title">この内容で登録しました</h1>
                        </div>
                
            <div class="m-auto">
                  <div class="mb-5 flex-col">
                
                                     <div class="flex-row py-5 px-5">
                                         <div class="float-left w-32 mr-5 border-l-4">
                                            <label>日付</label>
                                         </div>
                                        <h2 class="truncate">{{ $reserve["date"] }}</h2>
                                       
                                    </div>
                                    
                                   
                                    <div class="flex-row py-5 px-5">
                                         <div class="float-left w-32 mr-5 border-l-4">
                                            <label>時間</label>
                                         </div>
                                        <h2 class="truncate">{{ $reserve["startTime"] }}~</h2>
                                      
                                    </div>
                                    
                                   <div class="flex-row py-5 px-5">
                                         <div class="float-left w-32 mr-5 border-l-4">
                                            <label>部屋</label>
                                         </div>
                                        <h2 class="truncate">{{$number}}</h2>
                                      
                                      
                                    </div>
                                    
                                    
                        
            
                                     
                        <div class="mt-10 mx-auto text-center">
                            <span class="text-2xl text-blue-500 rounded-xl ">
                                <h2 class='myPage'>
                                    <a href="/mypage" class="mt-36 text-blue-500">トップページに戻る</a>
                    　           </h2>   
                        　　</span>
                        </div>
              
                       
                        </div>
                   </div> 
            </div>
      
        </div>
        
        </x-app-layout>