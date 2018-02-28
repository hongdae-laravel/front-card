<?php

namespace App;

use CardSlot;
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
        // TODO: User에 해당하는 카드 슬롯 가져오기. 현재 한 명의 유저당 하나의 슬롯만 가질 수 있으며 카드는 5장까지만 가질 수 있다.
        return count($this->cards);
    }

    public function getCards() {
        return $this->cards;
    }
}
