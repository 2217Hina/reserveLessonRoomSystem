<x-app-layout>
    <x-slot name="header">
        　管理者情報登録
    </x-slot>
 
        
        <div class="h-full w-full flex items-center justify-center bg-blue-50">
           
         <div class="m-auto text-2xl">
                <div class="w-96 border border-solid pt-14 px-8 mt-20 mb-20 bg-white rounded-xl">
                    <div class="text-center text-xl mb-5 font-bold">
                    <h1 class="title">この内容で登録しました</h1>
                </div>
             
              <div class="m-auto">
                  <div class="mb-5 flex-col">
                      
          
                            
                                  <div class="flex-row py-5 px-5">
                                     <div class="float-left w-32 mr-5 border-l-4">
                                      <label>氏名</label>
                                     </div>
                                        <h2 class="truncate">{{ $user["name"] }}</h2>
                                     
                                    </div>
                                
                                <div class="flex-row py-5 px-5">
                                    <div class="float-left w-32 mr-5 border-l-4">
                                      <label>教授番号</label>
                                    </div>
                                       <h2 class="truncate">{{ $user["number"] }}</h2>
                                    </div>
                                    
                                <div class="flex-row py-5 pl-5">
                                   <div class="float-left w-32 mr-5 border-l-4">
                                      <label>メール</label>
                                  </div>
                                        <h2 class="truncate">{{ $user["email"] }}</h2>
                                </div>
                                
                               
                               
                                
                              
                                
                                
                                
                    
                                 
                      </div>
                              
                          
                  
               
                 
         
                       <div class="mt-10 mx-auto text-center">
                            <span class="text-2xl text-blue-500 rounded-xl ">
                                <h2 class='myPage'>
                                 <a href="/1_top">Topページに移動</a>
                            　　</h2>   
                        　　</span>
                        </div>
                    　
                
               
   </x-app-layout>