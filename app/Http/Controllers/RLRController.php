<?php








namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\RLRRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Reserve;
use App\Models\Room;
use Carbon\Carbon;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ManagerRequest;
use App\Http\Requests\ManageRoomsRequest;
use App\Http\Requests\ManageRoomsDetailRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;




class RLRController extends Controller
{
    //TOP画面
    public function TOP()
    {
        return view('RLR/Top');
    }
    
    //ユーザー登録
     public function register()
    {
        return view('RLR/2_register');
    }
    
    //登録情報確認画面
    public function return_register_comfirm()
    {
         return view('RLR/2_register_confirm')->with(['user'=>$user]);
    }
    
     //登録情報確認画面
    public function register_confirm(RegisterRequest $request, User $user)
    {
      
       
        $input = $request['user'];
        $password = $request['password'];
        $hash_password = Hash::make($password);
        $input['password']=$hash_password;
        return view('RLR/2_register_confirm')->with(['user'=>$input]);
    }
    
    //登録画面
    public function return_register_complete(Request $request, User $user)
    {
         return view('RLR/2_register_complete')->with(['user'=>$user]);
    }
    
    
    //登録画面
    public function register_complete(Request $request, User $user)
    {
        
        $input = $request['user'];
        $admin_flag = 2;
        $input['admin_flag']=$admin_flag;
       
        $user->fill($input)->save();
     
      
        return view('RLR/2_register_complete')->with(['user'=>$user]);
    }
    
    
    
    
    
    //管理者①画面TOP
    public function manage1_top()
    {
        return view("RLR/1_top");
    }
    
     //管理者①画面TOP
     public function manage1_add()
    {
        return view("RLR/1_add");
    }
    
    //管理者情報登録画面
    public function return_1_add_confirm()
    {
        return view("RLR/1_add_confirm")->with(['user'=>$user]);
    }
    
     //管理者情報登録画面
     public function manage1_add_confirm(Request $request, User $user)
    {
        $input = $request['user'];
        $password = $request['password'];
        $hash_password = Hash::make($password);
        $input['password']=$hash_password;
       
        return view('RLR/1_add_confirm')->with(['user'=>$input]);
    }
    
     public function return_1_add_complete(Request $request, User $user)
    {
         return view('RLR/1_add_complete')->with(['user'=>$user]);
    }
    
    //管理者登録情報確定
     public function manage1_add_complete(Request $request, User $user)
    {
        
        $input = $request['user'];
        $admin_flag = 1;
        $input['admin_flag']=$admin_flag;
        $user->fill($input)->save();
        return view('RLR/1_add_complete')->with(['user'=>$user]);
    }
    
    
    
    //管理者情報閲覧
     public function return_1_all(Request $request,User $user)
    {
           
            $details = $user->where('admin_flag',1)->get();
            $infos = array();
            foreach($details as $detail)
            {
              $id = $detail->id;
              $name = $detail->name;
              $number= $detail->number;
              $email = $detail->email;
              
              $infos[] = array(
                  "id" => $id,
                  "name" => $number,
                  "number" => $number,
                  "email" => $email
                  );
              
            }
          
           
            return view('RLR/1_all')->with(['infos'=>$infos]);
    }
    
    public function manage1_delete(User $user)
    {
      
        $user->delete();
        return redirect('/1_all');
    }
    
    //管理者②画面
    public function manage2_top()
    {
        return view('RLR/3_top');
    }
    
    //管理者②予約画面(日時）
    public function return_3_reserve_conditions()
    {
        return view('RLR/3_reserve_conditions');
    }
    
   //管理者②予約画面（部屋）
   public function return_3_reserve_rooms()
   {
       return view('RLR/3_reserve_room')->with(['empty_rooms'=>$empty_rooms]);
   }
    
     public function manage2_reserve_rooms(Request $request,Reserve $reserve,Room $room)
    {
        
        
        session(["date" . auth()->id()=>$request["reserve"]["date"]]);
        session(["startTime" . auth()->id()=>$request["reserve"]["startTime"]]);
        $date = $request->session()->get("date" . auth()->id());
        $startTime =  $request->session()->get("startTime" . auth()->id());
        $reserved_rooms = $reserve->whereDate('date',$date)->where('startTime',$startTime)->get(['room_id']);
        $reserved_room_id = [];
           foreach ($reserved_rooms as $reserved_room){
               array_push($reserved_room_id, $reserved_room->room_id);
           }
        $empty_rooms= $room-> whereNotIn ('id',$reserved_room_id)->get(['number','capacity']);
       
        return view('RLR/3_reserve_room')->with(['empty_rooms'=>$empty_rooms]);
    }
    
    
    //管理者②予約内容確認
     public function return_3_reserve_comfirm()
    {
        return view('RLR/3_reserve_comfirm')->with(['reserve'=>$reserve]);
    }
    
    public function manage2_reserve_comfirm(Request $request,Reserve $reserve)
    {
        
        session(["room" . auth()->id()=>$request["reserve"]["room"]]);
        $date = $request->session()->get("date" . auth()->id());
        $startTime =  $request->session()->get("startTime" . auth()->id());
        $room =  $request->session()->get("room" . auth()->id());
        $reserve = array('date'=>$date,'startTime'=>$startTime,'room'=>$room);
        return view('RLR/3_reserve_confirm')->with(['reserve'=>$reserve]);
    }
    
    //管理者②予約完了
     public function return_3_reserve_complete()
    {
        return view('RLR/3_reserve_complete');
    }
    
    public function manage2_reserve_complete(Request $request,Reserve $reserve,Room $room)
    {
        
       $input = $request['reserve'];
    
        $reserve["room_id"]= Room::where('number',$input["number"])->first()->id;
   
        $reserve->fill($input)->save();
    
       return view('RLR/3_reserve_complete')->with(['reserve'=>$reserve,'number'=>$input['number']]);
    }
    
    
    //管理者②予約履歴一覧へ
     public function manage2_history(Reserve $reserve)
    {
      
      
        $my_reserves = $reserve->getByLimit();
        return view('RLR/3_history')->with(['my_reserves'=>$my_reserves]);
        
    }
    
    //キャンセル機能
     public function manage2_cancel(Reserve $reserve)
    {
      
        $reserve->delete();
        return redirect('/3_history');
    }
    
    //管理者②全体予約履歴閲覧
     public function return_3_all_date(Reserve $reserve)
    {
      
      return view("RLR/3_all_date");
    }
     
     public function return_3_all_history(Reserve $reserve)
    {
      
      return view("RLR/3_all_history");
    }
    
     public function manage2_all_history(Request $request,Reserve $reserve,User $user,Room $room)
    {
            $date = $request['date'];
            $details = $reserve->where('date',$date)->get();
            $infos = array();
            foreach($details as $detail)
            {
              $user_id = $detail->user_id;
              $user_name = $user->find($user_id)->name;
              
              $room_id = $detail->room_id;
              $number = $room->find($room_id)->number;
              
              $infos[] = array(
                  "user_name" => $user_name,
                  "startTime" => $detail->startTime,
                  "number" => $number
                  );
              
            }
      
      
      
      return view('RLR/3_all_history')->with(['infos'=>$infos]);
    }
    
    
    
    //管理者②施設情報管理画面へ
     public function return_3_manage_rooms()
    {
        return view('RLR/3_manage_rooms');
    }
     public function manage2_manage_request()
    {
        return view('RLR/3_manage_request');
    }
    
    public function return_3_manage_add()
    {
        return view('RLR/3_manage_add');
    }
    
    public function manage2_manage_add(Request $request)
    {
        $input = $request['request'];
        return view('RLR/3_manage_add')->with(['request'=>(int)$input]);
    }
    
    //施設情報追加完了
    public function return_3_manage_complete()
    {
        return view('RLR/3_manage_complete');
    }
    
    public function manage2_manage_complete(Request $request,Room $room)
    {
        $inputs = $request['room'];
       
      
      foreach($inputs as $input)
        {
        $room = new Room;
        $room->fill($input)->save();
        }
        
        return  view('RLR/3_manage_complete')->with(['rooms'=>$inputs]);
    }
    
    //施設管理ページ
    
    
    public function manage2_manage_all(Request $request,Reserve $reserve,User $user,Room $room)
    {
           
            $details = $room->all();
            $infos = array();
            foreach($details as $detail)
            {
              $id = $detail->id;
              $number = $detail->number;
              $capacity = $detail->capacity;
              $piano= $detail->piano;
              
              $infos[] = array(
                  "id" => $id,
                  "number" => $number,
                  "capacity" => $detail->capacity,
                  "piano" => $piano
                  );
              
            }
           
            return view('RLR/3_manage_all')->with(['infos'=>$infos]);
    }
    
     public function manage2_delete(Room $room)
    {
      
        $room->delete();
        return redirect('/3_manage_all');
    }
    
    
    //一般ユーザー画面
    public function g_top()
    {
        return view('RLR/4_top');
    }
    
    //一般ユーザー予約画面（日時）
    public function return_g_reserve_conditions()
    {
        return view('RLR/4_reserve_conditions');
    }
    
   //一般ユーザー予約画面（部屋）
   public function return_g_reserve_rooms()
   {
       return view('RLR/4_reserve_room')->with(['empty_rooms'=>$empty_rooms]);
   }
    
     public function g_reserve_rooms(Request $request,Reserve $reserve,Room $room)
    {
        
        
        session(["date" . auth()->id()=>$request["reserve"]["date"]]);
        session(["startTime" . auth()->id()=>$request["reserve"]["startTime"]]);
        $date = $request->session()->get("date" . auth()->id());
        $startTime =  $request->session()->get("startTime" . auth()->id());
        $reserved_rooms = $reserve->whereDate('date',$date)->where('startTime',$startTime)->get(['room_id']);
        $reserved_room_id = [];
           foreach ($reserved_rooms as $reserved_room){
               array_push($reserved_room_id, $reserved_room->room_id);
           }
        $empty_rooms= $room-> whereNotIn ('id',$reserved_room_id)->get(['number','capacity']);
       
        return view('RLR/4_reserve_room')->with(['empty_rooms'=>$empty_rooms]);
    }
    
      //一般ユーザー予約内容確認
     public function return_g_reserve_comfirm()
    {
        return view('RLR/4_reserve_comfirm')->with(['reserve'=>$reserve]);
    }
    
    public function g_reserve_comfirm(Request $request,Reserve $reserve)
    {
        
        session(["room" . auth()->id()=>$request["reserve"]["room"]]);
        $date = $request->session()->get("date" . auth()->id());
        $startTime =  $request->session()->get("startTime" . auth()->id());
        $room =  $request->session()->get("room" . auth()->id());
        $reserve = array('date'=>$date,'startTime'=>$startTime,'room'=>$room);
        return view('RLR/4_reserve_confirm')->with(['reserve'=>$reserve]);
    }
     
     //一般ユーザー予約完了
     public function return_g_reserve_complete()
    {
        return view('RLR/4_reserve_complete');
    }
    
    public function g_reserve_complete(Request $request,Reserve $reserve,Room $room)
    {
        
       $input = $request['reserve'];
    
        $reserve["room_id"]= Room::where('number',$input["number"])->first()->id;
   
        $reserve->fill($input)->save();
    
       return view('RLR/4_reserve_complete')->with(['reserve'=>$reserve,'number'=>$input['number']]);
    }
    
    
    
     //一般ユーザー予約履歴一覧へ
      public function g_history(Reserve $reserve)
    {
      
      
        $my_reserves = $reserve->getByLimit();
        
        
        
       
        return view('RLR/4_history')->with(['my_reserves'=>$my_reserves]);
        
    }
    
    //キャンセル機能
     public function g_cancel(Reserve $reserve)
    {
      
        $reserve->delete();
        return redirect('/g_history');
    }
  
    
    
    
    
     public function mypage()
    {
        if( Auth::user()->admin_flag==0){
            return redirect("/1_top");
        }elseif(Auth::user()->admin_flag==1){
             return redirect("/3_top");
        }elseif( Auth::user()->admin_flag==2){
             return redirect("/4_top");
        }
        
       
      
       
    }
    
    
}
