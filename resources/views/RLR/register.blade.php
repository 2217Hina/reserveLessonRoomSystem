<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2>ユーザー情報登録</h2>
         <form action="/rlr/register/confirm" method="POST">
            @csrf
            <div class="name">
                <h2>氏名</h2>
                <input type="text" name="user[name]" placeholder="山田花子"/>
            </div>
            
            <div class="studentNum">
                <h2>学籍番号</h2>
                <input type="text" name="user[student_num]" placeholder="21180122">
            </div>
            
             <div class="mail">
                <h2>メールアドレス</h2>
               <input type="text" name="user[email]" placeholder="test@test">
            </div>
            
             <div class="major">
                <h2>専攻</h2>
               <select name="user[major]">
                  <option value="0">ピアノ</option>
                  <option value="1">オルガン</option>
                  <option value="2">ヴァイオリン</option>
                  <option value="0">ヴィオラ</option>
                  <option value="1">チェロ</option>
                  <option value="2">コントラバス</option>
                  <option value="0">ハープ</option>
                  <option value="1">フルート</option>
                  <option value="2">オーボエ</option>
                  <option value="0">クラリネット</option>
                  <option value="1">ファゴット</option>
                  <option value="2">サクソフォーン</option>
                  <option value="0">ホルン</option>
                  <option value="1">トランペット</option>
                  <option value="2">トロンボーン</option>
                  <option value="0">ユーフォニアム</option>
                  <option value="1">チューバ</option>
                  <option value="2">打楽器</option>
                  <option value="0">古楽</option>
                  <option value="1">邦楽</option>
                  <option value="2">楽理</option>
               </select>
            </div>
            
             <div class="professor">
                <h2>門下</h2>
               <input type="text" name="user[professor]" placeholder="〇〇教授">
            </div>
            
             <div class="password">
                <h2>パスワード</h2>
               <input type="text" name="user[password]" >
            </div>
            
             <div class="mail">
                <h2>パスワード確認</h2>
                <input type="text" name="user[confirmPassword]">
            </div>
            
            <input type="submit" value="登録"/>
            
            
        </form>

    </body>
</html>