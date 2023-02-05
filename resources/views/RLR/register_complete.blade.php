<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
  

        
       
         <main>
            <div class="flex flex-col w-1/2 mt-10 m-auto">
           
                <div class="text-3xl w-2/3">   
                <h1 class="title">この内容で登録しました</h1>
                </div>
             
               <div class="m-auto text-3xl w-1/3 mt-12 ">
        
                       
                        
                        <div class='student_num'>
                            <h2>学籍番号:{{ $user["student_num"] }}</h2>
                          
                        </div>
                        
                        
                        <div class='major'>
                            <h2>専攻:{{  $user["major"] }}</h2>
                          
                        </div>
                        
                        <div class='professor'>
                            <h2>門下:{{$user["professor"]}}</h2>
                          
                        </div>
           
                     
                     
                    <div class=" text-2xl mt-36 m-auto">
                        <span class=" text-blue-500 rounded-xl ">
                        <h2 class='myPage'>
                         <a href="/">マイページに移動</a>
                    　　</h2>   
                    </div>
           
       
            </div>
       
       </div>
    </main>
     
     </x-app-layout>