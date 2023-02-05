<x-app-layout>
    <x-slot name="header">
        　ユーザー登録
    </x-slot>
  

        
       
         <main>
             
             
        <div class="flex flex-col w-1/2 mt-10 m-auto">
        
                <div class="text-3xl w-2/3">   
                     <h1 class="title">この内容で登録しますか？</h1>
                </div>
        
                <form action="/rlr/register/complete" method="POST">
                     @csrf
                   
                        <div class="m-auto text-3xl w-1/3 mt-12 ">
                
                                
                                <div class='student_num'>
                                    <h2>学籍番号:{{ $user["student_num"] }}</h2>
                                   
                                     <input name="user[student_num]" value={{ $user["student_num"] }} type="hidden">
                                </div>
                                
                               
                                <div class='major'>
                                    <h2>専攻:{{ $user["major"] }}</h2>
                                  
                                    <input name="user[major]" value={{ $user["major"] }} type="hidden">
                                </div>
                                
                                <div class='professor'>
                                    <h2>門下:{{$user["professor"]}}</h2>
                                 
                                    <input name="user[professor]" value={{$user["professor"]}} type="hidden">
                                </div>
                                
                                
                    
                                 
                      </div>
                              
                            <div class=" w-1/6 text-3xl  mt-36 m-auto text-center">
                                <span class="border border-indigo-600 rounded-xl bg-blue-200">
                                    <input type="submit" value="登録" />
                                </span>
                            </div>
                  
               
                 
                </form>
                
                 <div class=" text-2xl m-auto">
                    <span class=" text-red-500 rounded-xl ">
                     <a href="/rlr/register">再度入力</a>
                </div>
                
    </main>
     
     </x-app-layout>