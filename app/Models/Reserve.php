<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;



class Reserve extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    
    protected $table = "reserves";
    protected $fillable = [
        'user_id',
        'date',
        'startTime',
        'room',
        'numOfPeople',
       
    ];
    
    public function getByLimit(int $limit_count = 10)
    {
        $me = Auth::user()->id;
        return $this->where('user_id',$me)->orderBy('date', 'DESC')->get();

    }

    // public function getPastReserve(int $limit_count = 10)
    // {
    //     $me = Auth::user()->id;
    //     return $this->where('user_id',$me)->orderBy('date', 'DESC')->get();

    // }
}

