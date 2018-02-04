<?php

namespace App\Model\System;

use App\ModelAbstract;
use Illuminate\Database\Eloquent\Model;

class Menu extends ModelAbstract
{
    protected $fillable = [
        'title', 'route', 'icon',
        'parent_id', 'hierarchy'];

    public function parent()
    {
        return $this->belongsTo(Menu::class,'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class,'parent_id');
    }
}
