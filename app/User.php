<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $cards = [ 'card1', 'card2', 'card3' ];

    public function cardCount() {
        $user = Auth::user();

        // TODO: User에 해당하는 카드 슬롯 가져오기.
        $cardSlot = $user->cards()->get();

        return count($cardSlot);
    }

    public function getCards() {
        $cardSlot = $user->cards()->get();

        return $cardSlot;
    }

    public function cards()
    {
        return $this->belongsToMany('App\Card');
    }
}
