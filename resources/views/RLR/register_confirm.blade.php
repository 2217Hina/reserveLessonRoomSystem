<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
         <form action="/rlr/register/complete" method="POST">
             @csrf
            <h1 class="title">この内容で登録しますか？</h1>
                <div class="content">
        
                        
                        <div class='student_num'>
                            <h2>学籍番号</h2>
                            <h3>{{ $user["student_num"] }}</3>
                             <input name="user[student_num]" value={{ $user["student_num"] }} type="hidden">
                        </div>
                        
                       
                        <div class='major'>
                            <h2>専攻</h2>
                           <h3>{{ $user["major"] }}</h3>
                            <input name="user[major]" value={{ $user["major"] }} type="hidden">
                        </div>
                        
                        <div class='professor'>
                            <h2>門下</h2>
                           <h3>{{$user["professor"]}}</h3>
                            <input name="user[professor]" value={{$user["professor"]}} type="hidden">
                        </div>
                        
                        
            
                         
           
                      
                       <input type="submit" value="登録" />
           
       
            </div>
        </form>
        <a href="/rlr/register">再度入力</a>
    </body>
</html>