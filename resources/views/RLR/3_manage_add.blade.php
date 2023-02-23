<x-app-layout>
    <x-slot name="header">
        　施設追加
    </x-slot>
        <div class="h-full w-full flex items-center justify-center mt-20">
             <div class="m-auto text-2xl  ">
                 <h1>施設情報を入力してください</h1>
             </div>
        
         </div>
         
         <form action="/3_manage_complete" method="POST">
                                     @csrf          
                                     
                                    @for($i=0;$i< $request ;$i++)
                                     <div class="flex items-center justify-center ">
                                        <div class="m-auto text-2xl  ">
                                            <div class="border border-solid pt-14 px-8 mt-10 mb-10 bg-white rounded-xl">
                                                
                                                     <div class="mb-5">
                                                         <div class="float-left w-32 mr-5 border-l-4">
                                                            <label>部屋番号</label>
                                                         </div>
                                                         <input type="text" name='room[{{$i}}][number]'  value="{{ old('room[number]') }}">
                                                          <div class="text-xs">
                                                             <p class="number__error" style="color:red">{{ $errors->first('user.number') }}</p>
                                                          </div>
                                                    </div>
                                                    
                                                     <div class="mb-5">                                              
                                                         <div class="float-left w-32 mr-5 border-l-4">
                                                            <label>最大人数</label>
                                                         </div>
                                                         <input type="text" name="room[{{$i}}][capacity]"  value="{{ old('room[capacity]') }}">
                                                          <div class="text-xs">
                                                                 <p class="capacity__error" style="color:red">{{ $errors->first('room.capacity') }}</p>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="mb-5">
                                                         <div class="float-left w-32 mr-5 border-l-4">
                                                            <label class=>ピアノ</label>
                                                         </div>
                                                            <select name="room[{{$i}}][piano]" value="{{ old('room[piano]') }}">
                                                                  <option value="グランド">グランド</option>
                                                                  <option value="アップライト">アップライト</option>
                                                                  <option value="無し">無し</option>
                                                             </select>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                         @endfor   
                                            
        
        
        
                        <div class="h-full w-full flex items-center justify-center">
                            <span class=" text-2xl rounded-xl  my-20">
                                 <input class="border rounded-xl bg-red-100 px-5 py-2 shadow-md" type="submit" value="施設を追加"/>
                             </span>
                        </div>
                    
            </form>
            
    </x-app-layout>