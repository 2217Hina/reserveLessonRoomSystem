<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
 
        
         <div class="flex flex-col w-1/2 mt-10 m-auto">
        
                <div class="text-3xl w-2/3">   
                     <h1 class="title">この内容で登録しました</h1>
                </div>
        
             
                        <div class="m-auto text-3xl w-1/3 mt-12 ">
                            
                                 <div class='name'>
                                    <h2>氏名:{{ $user["name"] }}</h2>
                                   
                                  
                                </div>
                                
                                <div class='number'>
                                    <h2>学籍番号:{{ $user["number"] }}</h2>
                                   
                                  
                                </div>
                                
                                <div class='email'>
                                    <h2>メールアドレス:{{ $user["email"] }}</h2>
                                   
                                 
                                </div>
                                
                               
                               
                                
                              
                                
                                
                                
                    
                                 
                      </div>
                              
                          
                  
               
                 
         
                        <h2 class='1_top'>
                         <a href="/1_top">Topページに移動</a>
                    　　</h2>   
                    　
                
               
   </x-app-layout>