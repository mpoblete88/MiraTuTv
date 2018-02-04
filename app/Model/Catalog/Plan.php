<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';
    protected $fillable = ['name', 'description', 'code'];

    public function channels()
    {

        return $this->belongsToMany(Channel::class, 'plan_channels', 'plan_id', 'channel_id');
    }
}
