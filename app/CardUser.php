<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardUser extends Model
{
    protected $fillable = ['id', 'user_id', 'card_id'];
    public $timestamps = false;
}
