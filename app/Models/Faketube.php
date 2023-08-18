<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faketube extends Model
{
    use HasFactory;
    protected $primarykey = 'channerlId';
    public $timestamps = false;

    protected $fillable =[
        'channerlID' ,'channerlName','decription','subscribersCount','URL','Create_At','Update_At'
    ];
}
