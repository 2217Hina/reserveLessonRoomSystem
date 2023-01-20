<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class RLRController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function top()
    {
        return view('RLR/top');
        
    }
    
    public function register()
    {
        return view('RLR/register');
    }
    
    public function myPage()
    {
        return view('RLR/myPage');
    }
        

}