<?php

namespace App\Catalog;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';


    public function channels(){

        return $this->belongsToMany(Channel::class, 'plan_channels', 'plan_id', 'channel_id' );
    }
}
