<?php

namespace App\Catalog;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name', 'short_name'];

    public function channel(){

        return $this->hasMany(Channel::class, 'type_id');
    }
}
