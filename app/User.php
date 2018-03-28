<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function setCard($cards)
    {
        DB::table('card_user')->where('user_id', Auth::user()->id)->delete();

        foreach ($cards as $card) {
            DB::table('card_user')->insert([
                'user_id' => Auth::user()->id,
                'card_id' => $card->id,
            ]);
        }

    }

    public function cards()
    {
        return $this->belongsToMany('App\Card');
    }
}
