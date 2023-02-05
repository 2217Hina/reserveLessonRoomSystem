<x-app-layout>
    <x-slot name="header">
        　ユーザー登録
    </x-slot>
  

        
       
    <main>
            
            <div class="flex flex-col w-1/2 mt-10 m-auto">
                    
                <div class="text-4xl w-72 ">
                     
                     <h1>ユーザー情報登録</h1>
                 
                </div>
              
           
                <form action="/rlr/register/confirm" method="POST">
                        @csrf
                       
                            <div class="m-auto text-2xl w-1/3 mt-12 ">
                                <div class="studentNum">
                                    <h2>学籍番号</h2>
                                    <input type="text" name="user[student_num]" placeholder="21180122" value="{{ old('user.student_num') }}">
                                     <p class="student_num__error" style="color:red">{{ $errors->first('user.student_num') }}</p>
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
                                
                                </div>
                        
                        <div class=" text-4xl  text-right mt-36 ">
                        <span class="border border-indigo-600 rounded-xl bg-blue-200">
                            <input type="submit" value="登録"/>
                            
                        </span>
                        </div>
                    
                </form>
                
                
        
            </div>    
            </div> 
    </main>
     
     </x-app-layout>