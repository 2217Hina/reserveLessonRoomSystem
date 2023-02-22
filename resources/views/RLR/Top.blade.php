<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body　class="bg-blue-50">
       
       
       
   
        <div class="text-blue-500 mt-10">
            <h2>・ユーザー登録をして、ログイン後のマイページから予約を行なってください</h2>
            <h2>・予約のキャンセルは、『予約履歴一覧』から行います</h2>
        </div>
       
       
        <div class="block text-center leading-10 w-96 h-10 rounded-md bg-blue-50　duration-75">
                 <div class="text-gray-800 inline-block mt-2 mb-2 text-xl">
                    <h1>
                          <a href="/register">ユーザー登録</a>
        　           </h1> 
　               </div>
　               <div class="text-gray-800 inline-block mt-2 mb-2 text-xl">
            　       <h1>
            　           <a class="text-left" href="/login">ログイン</a>
            　       </h1>
　       
　               </div>
        </div>
    
   </body>
    
</html>