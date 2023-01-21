<?php







namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Http\Requests\RLRRequest;

class RLRController extends Controller
{
    
    
    public function top()
    {
        return view('RLR/top');
        
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