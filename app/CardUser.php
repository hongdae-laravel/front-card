<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardUser extends Model
{
    protected $fillable = ['id', 'user_id', 'card_id'];
    public $timestamps = false;
}
