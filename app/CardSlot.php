<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardSlot extends Model
{
    protected $fillable = ['id', 'user_id', 'card_id'];
}
