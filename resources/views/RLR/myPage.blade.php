


<x-app-layout>
    <x-slot name="header">
        マイページ
    </x-slot>
  

        
       
         <main>
        @csrf
        
        
       

        <!--<div class=.f-container { justify-content: space-around; }}>-->
           
           
           
           <div class="flex flex-col text-2xl w-40 mt-20 ml-10 p-1" >
                <div class="py-1.5">
                    <h2 class='resreve'>
                    <a href="/rlr/reserve">練習室を予約</a>
                    </h2>
                 </div>
                 
                <div class="py-1.5">
                    <h2 class='reserve'>
                    <a href="/rlr/history">予約履歴</a>
                    </h2>
                </div>
                
                <div class="py-1.5">
                    <h2 class='register'>
                    <a href="/rlr/register">ユーザー登録</a>
                    </h2>
                 </div>
                 
            </div> 
    

        
        <!--<h1 class='reserve'>-->
        <!--    <a href="/rlr/reserve">練習室を予約</a>-->
        <!--</h1>-->
        <!-- <h2 class='reserve'>-->
        <!--    <a href="/rlr/history">予約履歴</a>-->
        <!--</h2>-->
        <!--<h2 class='register'>-->
        <!--    <a href="/rlr/register">ユーザー登録</a>-->
        <!--</h2>-->

        <!--</div>-->
       
     </main>
     
     </x-app-layout>