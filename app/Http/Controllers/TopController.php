<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Top;

class RLRController extends Controller
{
    public function top()
    {
        return view('RLR/top');
    }
}
