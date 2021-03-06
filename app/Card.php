<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 */
class Card extends Model
{
    protected $fillable = ['name', 'attackPower', 'defensePower', 'typeId'];

    public function getName() {
        return $this->name;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function getDefensePower() {
        return $this->defensePower;
    }

    public function getTypeId() {
        return $this->typeId;
    }

    public function getFiveCards()
    {
        $fCards = Card::inRandomOrder()->take(5)->get();
        return $fCards;
    }

    public function users()
    {
        return $this->belongsToMany('App\Card');
    }
}
