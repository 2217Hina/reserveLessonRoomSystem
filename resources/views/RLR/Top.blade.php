<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body  class="bg-blue-50">
       
       <header class="w-full h-13 bg-blue-100 text-center">
                <div class="inline-block mt-2 mb-2 text-xl">
                    <h1>
                          <a href="/register">TOP</a></a>
        　           </h1> 
　               </div>
　               
        </header>
       <div class="h-full w-full flex items-center justify-center mt-20">   
         <div class=" text-2xl text-center justify-center items-center">
    
                     <h2>
                        <div class="mt-5 ml-5">
                            <span class="border rounded-xl bg-green-100 px-5 py-2 shadow-md">
                              <a  class="text-center" href="/register">ユーザー登録</a>
    　                     </span>
                        </div>
            　      　</h2> 
                     <h2>
                        <div class="mt-5 ml-5">
                            <span class="border rounded-xl bg-red-100 px-5 py-2 shadow-md">
                　                <a class="text-center" href="/login">ログイン</a>
            　                </span>
                        </div>
            　      　</h2> 
            </div>
      </div>
      
      
    <div class="h-full w-full flex items-center justify-center mt-20">   
         <div class=" text-2xl">
        
            <h2>・ユーザー登録をして、ログイン後のマイページから予約を行なってください</h2>
            <h2>・予約のキャンセルは、『予約履歴一覧』から行います</h2>
        </div>
      </div>  
       
        
    
   </body>
    
</html>