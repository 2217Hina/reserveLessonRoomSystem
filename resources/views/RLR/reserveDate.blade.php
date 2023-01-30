<?php
use Carbon\Carbon;

 $date = Carbon::now();
?>

<!DOCTYPE html>



<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RLR</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
          <form action="/rlr/reserve/time" method="POST">
            @csrf
            
        <h2>予約する日付を選択してくだい</h2>
        <p>１週間後まで予約できます</p>
                <div class=date>
                    
                     <select name="reserve[date]" >
                            <option value="{{$date->format('Y-m-d')}}">
                               {{$date->format('m月d日')}}
                            </option>
                           
                            <option value="{{ $date->copy()->addDay(1)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(1)->format('m月d日')}}
                            </option>
                            
                              <option value="{{ $date->copy()->addDay(2)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(2)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(3)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(3)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(4)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(4)->format('m月d日')}}
                            </option>
                              <option value="{{ $date->copy()->addDay(5)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(5)->format('m月d日')}}
                            </option>
                             <option value="{{ $date->copy()->addDay(6)->format('Y-m-d')}}">
                               {{ $date->copy()->addDay(6)->format('m月d日')}}
                            </option>
                     </select>
                </div>
              
 <a>時間の選択</a>
             <input type="submit" value="次へ"/>
             
             
             <!-- <input type="date"> -->
           
               </form>
           
           
           
       
    </body>
</html>