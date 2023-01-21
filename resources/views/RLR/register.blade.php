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
                <input type="text" name="user[name]" placeholder="山田花子" value="{{ old('user.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('user.name') }}</p>
            </div>
            
            <div class="studentNum">
                <h2>学籍番号</h2>
                <input type="text" name="user[student_num]" placeholder="21180122" value="{{ old('user.student_num') }}">
                 <p class="student_num__error" style="color:red">{{ $errors->first('user.student_num') }}</p>
            </div>
            
             <div class="mail">
                <h2>メールアドレス</h2>
               <input type="text" name="user[email]" placeholder="test@test" value="{{ old('user.email') }}">
                <p class="email__error" style="color:red">{{ $errors->first('user.email') }}</p>
            </div>
            
             <div class="major">
                <h2>専攻</h2>
               <select name="user[major]" value="{{ old('user.major') }}">
                  <option value="ピアノ">ピアノ</option>
                  <option value="オルガン">オルガン</option>
                  <option value="ヴァイオリン">ヴァイオリン</option>
                  <option value="ヴィオラ">ヴィオラ</option>
                  <option value="チェロ">チェロ</option>
                  <option value="コントラバス">コントラバス</option>
                  <option value="ハープ">ハープ</option>
                  <option value="フルート">フルート</option>
                  <option value="オーボエ">オーボエ</option>
                  <option value="クラリネット">クラリネット</option>
                  <option value="ファゴット">ファゴット</option>
                  <option value="サクソフォーン">サクソフォーン</option>
                  <option value="ホルン">ホルン</option>
                  <option value="トランペット">トランペット</option>
                  <option value="トロンボーン">トロンボーン</option>
                  <option value="ユーフォニアム">ユーフォニアム</option>
                  <option value="チューバ">チューバ</option>
                  <option value="打楽器">打楽器</option>
                  <option value="古楽">古楽</option>
                  <option value="邦楽">邦楽</option>
                  <option value="楽理">楽理</option>
               </select>
            </div>
            
             <div class="professor">
                <h2>門下</h2>
               <input type="text" name="user[professor]" placeholder="〇〇教授"  value="{{ old('user.professor') }}">
                <p class="profeddor__error" style="color:red">{{ $errors->first('user.professor') }}</p>
            </div>
            
             <div class="password" >
                <h2>パスワード</h2>
               <input type="text" name="user[password]" >
                <p class="password__error" style="color:red">{{ $errors->first('user.password') }}</p>
            </div>
            
             <div class="mail">
                <h2>パスワード確認</h2>
                <input type="text" name="user[password_confirmation]">
            </div>
            
            <input type="submit" value="登録"/>
            
            
        </form>

    </body>
</html>