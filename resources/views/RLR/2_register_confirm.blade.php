<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    
<body>
        
    <header class="w-full h-13 bg-blue-100 text-center">
            <div class="inline-block mt-2 mb-2 text-xl">
                <h1>
                      <a href="/register">ユーザー登録</a>
    　           </h1> 
　               </div>
　               
    </header>
        
    <div class="h-full w-full flex items-center justify-center bg-blue-50">
         
              
         <div class="m-auto text-2xl">
             <div class="w-96 border border-solid pt-14 px-8 mt-20 mb-20 bg-white rounded-xl">
        
               <div class="text-center text-xl mb-5 font-bold">
                     <h1 class="title">この内容で登録しますか？</h1>
                </div>
        
                         <div class="m-auto">
                                <form action="/register/complete" method="POST">
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
                                                      <label>学籍番号</label>
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
                                                
                                               
                                                <div class="flex-row py-5 px-5">
                                                     <div class="float-left w-32 mr-5 border-l-4">
                                                      <label>専攻</label>
                                                      </div>
                                                   <h2 class="truncate">{{ $user["major"] }}</h2>
                                                    <input name="user[major]" value={{ $user["major"] }} type="hidden">
                                                </div>
                                                
                                                <div class='password'>
                                               
                                                    <input name="user[password]" value={{ $user["password"] }} type="hidden">
                                                </div>
                                                
                                                
                                                
                                                
                                    
                                                 
                                      </div>
                                              
                                           <div class="text-center mb-10">
                                                <span class="m-auto border rounded-xl mt-10 bg-yellow-400 px-5 py-2 shadow-md">
                                                    <input type="submit" value="登録" />
                                                </span>
                                            </div>
                                             <div class="text-center mb-10">
                                                 <span class="m-auto border rounded-xl mt-10 bg-red-200 px-5 py-2 shadow-md">
                                                    <a href="/register">再度入力</a>
                                                </span>
                                            </div>
                                  
                               
                              </div>
                        </form>
                                
                
                </div>
    </body>
    
</html>