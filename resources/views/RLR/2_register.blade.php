<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body >
       
            
             <header class="w-full h-13 bg-blue-100 text-center">
                <div class="inline-block mt-2 mb-2 text-xl">
                    <h1>
                          <a href="/register">ユーザー登録</a>
        　           </h1> 
　               </div>
　               
            </header>
            
            
    <div class="h-full w-full flex items-center justify-center bg-blue-50">
       <div class="m-auto text-2xl  ">
           <div class="border border-solid pt-14 px-8 mt-20 mb-20 bg-white rounded-xl">
                                <div class="text-center text-xl mb-5 font-bold">
                                <h1>個人情報入力</h1>
                                </div>
                                
                                <div class="m-auto">
                                 <form action="/register/confirm" method="POST">
                                     @csrf     
                                     
                                    
                                             <div class="mb-5">
                                                 <div class="float-left w-32 mr-5 border-l-4">
                                                <label>氏名</label>
                                                </div>
                                                
                                                <input type="text" name="user[name]"  placeholder="例）山田太郎" value="{{ old('user.name') }}" >
                                                 <div class="text-xs">
                                                 <p class="name__error" style="color:red">{{ $errors->first('user.name') }}</p>
                                                 </div>
                                                 </div>
                                            </div>
                                            
                                            <div class="mb-5">
                                                <div class="float-left w-32 mr-5 border-l-4">
                                                 <label>学籍番号</label>
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
                                                <input type="text" name="user[email]"  placeholder="例）abc@xyz"　value="{{ old('user.email') }}">
                                                 <div class="text-xs">
                                                 <p class="email__error" style="color:red">{{ $errors->first('user.email') }}</p>
                                                 </div>
                                            </div>
                                             
                                            
                                              <div class="mb-5">
                                                  <div class="float-left w-32 mr-5 border-l-4">
                                                  <label>専攻</label>
                                                  </div>
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
                                            
                                            
                                              <div class="mb-5">
                                                  <div class="float-left w-32 mr-5 border-l-4">
                                                 <label >パスワード</label>
                                                 </div>
                                                <input type="text" name="password"  placeholder="パスワード"　value="{{ old('password') }}">
                                                  <div class="text-xs">
                                                 <p class="password__error" style="color:red">{{ $errors->first('password') }}</p>
                                                 </div>
                                            </div>
                                            
                                             <div class="mb-5">
                                                
                                                    <div class="float-left w-32 mr-5 border-l-4">
                                                  <label classs="w-32 mr-5 border border-solid border-l-4">パスワード（確認用）</label>
                                                 </div>
                                                <input name="password_confirmation" type="text"  placeholder="パスワード（確認用）"　value="{{ old('password') }}">
                                                
                                            </div>
                                            
                                            
                               
                                            
                        
                        <!--<div class=" text-4xl px-5 py-2 text-right mt-36 shadow-sm ">-->
                        <!--<span class="border border-indigo-600 rounded-xl bg-blue-200 shadow-sm">-->
                            <input class="border rounded-xl mt-10 bg-yellow-400 px-5 py-2 shadow-md" type="submit" value="登録"/>
                            
                        <!--</span>-->
                        <!--</div>-->
                        
                    </div>
                </form>
                
                </div>
        
            </div>    
            </div> 
     </div>
        </div>
    </body>
     
</html>