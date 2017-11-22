<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 */
class Card extends Model
{
    protected $fillable = ['name'];

    public function getName() {
        return $this->name;
    }

}
