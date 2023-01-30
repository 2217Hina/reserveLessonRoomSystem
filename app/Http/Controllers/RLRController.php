<?php








namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\RLRRequest;
use App\Models\Reserve;
use App\Models\Room;
use Carbon\Carbon;



class RLRController extends Controller
{
    
    //予約(日付選択)
    public function reserveDate()
    {
        
        return view('RLR/reserveDate');
        
    }
    //予約（時間選択）
    public function time(Request $request, Reserve $reserve)
    {
       
       
        session(["date" . auth()->id()=>$request["reserve"]["date"]]);
      
        return view('RLR/reserveTime');
        
        
    }
    
    
    //予約（部屋選択）
    public function room(Request $request,Reserve $reserve,Room $room)
    {
        
        session(["startTime" . auth()->id()=>$request["reserve"]["startTime"]]);
        //dd(session("startTime" . auth()->id()));
        //$dateに入力されたdateを格納
        $date = $request->session()->get("date" . auth()->id());
         
        //$timeに入力されたstartTimeを格納
        $startTime =  $request->session()->get("startTime" . auth()->id());
        
        //$dateと$startTimeに一致するreserveテーブルのidを取得して $reserved_dateTimesに配列で格納
        $reserved_rooms = $reserve->whereDate('date',$date)->where('startTime',$startTime)->get(['room_id']);
       
    
        $reserved_room_id = [];
           foreach ($reserved_rooms as $reserved_room){
               array_push($reserved_room_id, $reserved_room->room_id);
           }
       // $reserved_roomsにreserve[room_id]を配列で格納
       // foreach($reserved_dateTimes as $reserved_dateTime);
        //$reserved_rooms[] = $reserved_dateTime->{'room_id'};
        //$reservedsのroom_idと一致しないroom_idをroomテーブルから取得して$empty_roomに格納
        
        $empty_rooms= $room-> whereNotIn ('id',$reserved_room_id)->get(['room_num','capacity']);
       
       
        return view('RLR/reserveRoom')->with(['empty_rooms'=>$empty_rooms]);
        
        
    }
    
    //予約（詳細）
    public function detail(Request $request)
    {
        
        session(["room" . auth()->id()=>$request["reserve"]["room"]]);
      
        
        $date = $request->session()->get("date" . auth()->id());
        $startTime =  $request->session()->get("startTime" . auth()->id());
        $room =  $request->session()->get("room" . auth()->id());
    
        $reserve = array('date'=>$date,'startTime'=>$startTime,'room_num'=>$room,'capacity'=>Room::where('room_num',$room)->first()->capacity);
        
       
       
        return view('RLR/reserveDetail')->with(['reserve'=>$reserve]);
    }
    
    public function reserve_confirm(Request $request)
    {
        session(["numOfPeople" . auth()->id()=>$request["reserve"]["numOfPeople"]]);
        $date = $request->session()->get("date" . auth()->id());
        $startTime =  $request->session()->get("startTime" . auth()->id());
        $room =  $request->session()->get("room" . auth()->id());
        $numOfPeople = $request->session()->get("numOfPeople" . auth()->id());
        $reserve = array('date'=>$date,'startTime'=>$startTime,'room'=>$room,'numOfPeople'=>$numOfPeople);
        
        return view('RLR/reserve_comfirm')->with(['reserve'=>$reserve]);
    }
    
    
    public function reserve_complete(Request $request,Reserve $reserve)
    {
       
       $input = $request['reserve'];
     
      
      // dd($reserved_room);
      
      $reserve["room_id"]= Room::where('room_num',$input["room_id"])->first()->id;
       
       $reserve->fill($input)->save();
       
       return view('RLR/reserve_complete')->with(['reserve'=>$reserve]);
    }
    
    public function history()
    {
        return view('RLR/history');
        
    }
    
    public function register()
    {
        return view('RLR/register');
    }
    
        
       public function confirm(RLRRequest $request, User $user)
    {
      
        $input = $request['user'];
        //$user->fill($input)->save();
        return view('RLR/register_confirm')->with(['user'=>$input]);
    }
    
    public function confirmUserInfo(User $user)
    {
       return view('RLR/register_confirm')->with(['user'=>$user]);
    }
    
    public function complete(Request $request,User $user)
    {
         
       
         $input = $request['user'];
        
        $user->fill($input)->save();
        return view('RLR/register_complete')->with(['user'=>$user]);
    }
    
    
     public function myPage()
    {
        return view('RLR/myPage');
    }
}