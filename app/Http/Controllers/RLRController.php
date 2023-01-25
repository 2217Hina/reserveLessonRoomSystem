<?php







namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\RLRRequest;
use App\Models\Reserve;

class RLRController extends Controller
{
    
    //予約
    
    public function reserveDate()
    {
        
        return view('RLR/reserveDate');
        
    }
    
    public function timeroom(Request $request, Reserve $reserve)
    {
        session(["test" . auth()->id()=>$request["reserve"]["date"]]);
        //dd(session("test" . auth()->id()));
        return view('RLR/reserveTimeRoom');
        
        
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