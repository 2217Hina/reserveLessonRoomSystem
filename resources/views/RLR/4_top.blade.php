<x-app-layout>
    <x-slot name="header">
        　TOP
    </x-slot>
    @csrf
      <div class="h-full w-full flex items-center justify-center mt-20">   
         <div class=" text-2xl">
                     <h2>
                        <div class="mt-10 ml-5">
                            <span class="border rounded-xl bg-red-100 px-5 py-2 shadow-md">
                                 <a href=/g_reserve_conditions>練習室の予約</a>
                            </span>
                        </div>
            　      　</h2> 
                     <h2>
                        <div class="mt-5 ml-5">
                            <span class="border rounded-xl bg-red-100 px-5 py-2 shadow-md">
                                 <a href=/g_history >予約履歴確認</a>
                             </span>
                        </div>
            　      　</h2> 
          </div>
      </div>
        
</x-app-layout>