<?php

namespace App\Catalog;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $table = 'channels';


    public function plans(){

        return $this->belongsToMany(Plan::class, 'plan_channels', 'channel_id', 'plan_id');
    }

}
