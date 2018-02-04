<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name', 'short_name'];
    protected $dates = ['created_at', 'updated_at'];

    public function channel()
    {
        return $this->hasMany(Channel::class, 'type_id');
    }


}
