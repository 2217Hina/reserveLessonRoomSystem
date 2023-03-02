<x-app-layout>
    <x-slot name="header">
        　施設登録
    </x-slot>
 
        
        <div class="h-full w-full flex items-center justify-center">
            <div class="m-auto text-2xl  ">
               
        
                             
                    
                             <form action="/3_manage_add" method="POST">
                                 <div class="border border-solid pt-14 px-8 mt-10 mb-10 bg-white rounded-xl text-center">  
                                  @csrf          
                                      <div class="text-center text-xl mb-5 font-bold">
                                         <h2>いくつの施設を追加しますか？</h2>
                                     </div>
                                     <div class="my-5">
                                       
                                        <input type="text" name="request" placeholder="半角数字を入力" value="{{ old('request') }}">
                                         <div class="text-xs">
                                            <p class="request__error" style="color:red">{{ $errors->first('request') }}</p>
                                         </div>   
                                    </div>
                                
                            
                              </div>
                              
                             <div class="text-center text-xl mb-5">
                                <input type="submit" class="text-xs border rounded-xl my-5 bg-red-100 px-5 py-2 shadow-md" value="施設登録へ" />
                             
                              </div>
                           
                         </form>
                         
                      </div>
               </div>
            </div>
    </x-app-layout>