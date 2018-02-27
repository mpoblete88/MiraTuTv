<?php

namespace App\Model\Catalog;

use App\Traits\TimeAttribute;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use TimeAttribute;
    protected $fillable = ['name', 'short_name'];
    protected $dates = ['created_at', 'updated_at'];

    public function channel()
    {
        return $this->hasMany(Channel::class, 'type_id');
    }


}
