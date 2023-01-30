<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Room;


class Reserve extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "reserves";
    protected $fillable = [
        'user_id',
        'date',
        'startTime',
        'room',
        'numOfPeople',
       
    ];

}

