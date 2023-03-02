<x-app-layout>
    <x-slot name="header">
        　管理者情報登録
    </x-slot>
 
         <div class="h-full w-full flex items-center justify-center bg-blue-50">
         
              
         <div class="m-auto text-2xl">
             <div class="w-96 border border-solid pt-14 px-8 mt-20 mb-20 bg-white rounded-xl">
        
               <div class="text-center text-xl mb-5 font-bold">
                     <h1 class="title">この内容で登録しますか？</h1>
                </div>
        
    　　　 <div class="m-auto">
                <form action="/1_add/complete" method="POST">
                     @csrf
                   
                        <div class="mb-5 flex-col">
                                 <div class="flex-row py-5 px-5">
                                     <div class="float-left w-32 mr-5 border-l-4">
                                      <label>氏名</label>
                                     </div>
                                    <h2 class="truncate">{{ $user["name"] }}</h2>
                                     <input name="user[name]" value={{ $user["name"] }} type="hidden">
                                 </div>
                        
                                 <div class="flex-row py-5 px-5">
                                    <div class="float-left w-32 mr-5 border-l-4">
                                      <label>教授番号</label>
                                    </div>
                                   <h2>{{ $user["number"] }}</h2>
                                     <input name="user[number]" value={{ $user["number"] }} type="hidden">
                                </div>
                                
                                <div class="flex-row py-5 pl-5">
                                   <div class="float-left w-32 mr-5 border-l-4">
                                      <label>メール</label>
                                  </div>
                                    <h2>{{ $user["email"] }}</h2>
                                     <input name="user[email]" value={{ $user["email"] }} type="hidden">
                                </div>
                                
                        </div>
                                 
                      
                              
                           <div class="text-center mb-10">
                                <span class="m-auto border rounded-xl mt-10 bg-yellow-400 px-5 py-2 shadow-md">
                                    <input type="submit" value="登録" />
                                </span>
                            </div>
                            <div class="text-center mb-10">
                                <span class="m-auto border rounded-xl mt-10 bg-red-200 px-5 py-2 shadow-md">
                                    <a href="/1_add">再度入力</a>
                                </span>
                            </div>
                  
               
                 
                </form>
                
                 
    </x-app-layout>