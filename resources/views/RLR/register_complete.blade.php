<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
     
            <h1 class="title">この内容で登録しました</h1>
                <div class="content">
        
                        <div class='name'>
                            <h2>氏名</h2>
                            <h3>{{  $user["name"] }}</h3>
                        </div>
                        
                        <div class='student_num'>
                            <h2>学籍番号</h2>
                            <h3>{{ $user["student_num"] }}</3>
                        </div>
                        
                        <div class='email'>
                            <h2>メールアドレス</h2>
                          <h3>{{  $user["email"]}}</h3>
                        </div>
                        <div class='major'>
                            <h2>専攻</h2>
                           <h3>{{  $user["major"] }}</h3>
                        </div>
                        <div class='professor'>
                            <h2>門下</h2>
                           <h3>{{$user["professor"]}}</h3>
                        </div>
           
                     
                    <h2 class='myPage'>
                     <a href="/rlr/myPage">マイページに移動</a>
                　　</h2>   
           
       
            </div>
       
    </body>
</html>