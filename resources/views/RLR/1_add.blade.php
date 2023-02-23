<x-app-layout>
    <x-slot name="header">
        　管理者情報登録
    </x-slot>
 
        
         <div class="h-full w-full flex items-center justify-center bg-blue-50">
            <div class="m-auto text-2xl  ">
                 <div class="border border-solid pt-14 px-8 mt-20 mb-20 bg-white rounded-xl">
                            <div class="text-center text-xl mb-5 font-bold">
                                <h1>管理者情報登録</h1>
                            </div>
               
                            <div class="m-auto">
                                <form action="/1_add/confirm" method="POST">
                                     @csrf          
                                     
                                             <div class="mb-5">
                                                <div class="float-left w-32 mr-5 border-l-4">
                                                    <label>氏名</label>
                                                </div>
                                                <input type="text" name="user[name]"  placeholder="例）山田太郎" value="{{ old('user.name') }}">
                                                 <div class="text-xs">
                                                     <p class="name__error" style="color:red">{{ $errors->first('user.name') }}</p>
                                                 </div>
                                            </div>
                                            
                                            <div class="mb-5">
                                                <div class="float-left w-32 mr-5 border-l-4">
                                                     <label>教授番号</label>
                                                </div> 
                                                <input type="text" name="user[number]" placeholder="半角数字" value="{{ old('user.number') }}">
                                                <div class="text-xs">
                                                     <p class="number__error" style="color:red">{{ $errors->first('user.number') }}</p>
                                                </div>
                                            </div>
                                            
                                             <div class="mb-5">
                                                 <div class="float-left w-32 mr-5 border-l-4">
                                                     <label>メール</label>
                                                 </div>
                                                <input type="text" name="user[email]"  placeholder="例）abc@xyz" value="{{ old('user.email') }}">
                                                 <div class="text-xs">
                                                     <p class="email__error" style="color:red">{{ $errors->first('user.email') }}</p>
                                                 </div>
                                            </div>
                                             
                                           
                                             <div class="mb-5">
                                                <div class="float-left w-32 mr-5 border-l-4">
                                                     <label>パスワード</label>
                                                </div>
                                                <input type="text" name="password"  placeholder="例）パスワード" value="{{ old('password') }}">
                                                 <div class="text-xs">
                                                     <p class="password__error" style="color:red">{{ $errors->first('password') }}</p>
                                                 </div>
                                            </div>
                                            
                                            
                                           
                                            
                                           
                                             
                                            
                                            </div>
                         <div class="text-center mb-10">
                            <span class="m-auto mt-10 px-5 py-2">
                                    <input class=" border rounded-xl mt-10 bg-yellow-400 px-5 py-2 shadow-md" type="submit" value="登録"/>
                            </span>
                        </div>
                                  
                       
                </form>
                
                
        
            </div>    
            </div> 
        
   </x-app-layout>