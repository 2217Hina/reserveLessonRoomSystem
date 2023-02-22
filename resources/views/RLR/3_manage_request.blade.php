<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
 
        
        <h1>いくつの施設を追加しますか？</h1>
          <form action="/3_manage_add" method="POST">
                     @csrf          
                             <div class="request">
                               
                                <input type="text" name="request" placeholder="数字を入力してください" value="{{ old('request') }}">
                                 <p class="request__error" style="color:red">{{ $errors->first('request') }}</p>
                            </div>
                            
                            
                             <div class=" text-4xl  text-right mt-36 ">
                       
                                <input type="submit" value="施設登録へ"/>
                             
                       
                            </div>
         </form>
    </x-app-layout>