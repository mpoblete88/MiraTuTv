<?php

namespace App\Catalog;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{


    public function channel(){

        return $this->hasMany(Channel::class, 'type_id');
    }
}
