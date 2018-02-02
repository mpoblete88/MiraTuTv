<?php

namespace App\Catalog;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $table = 'channels';
    protected $fillable = ['name', 'code', 'type_id'];

    public function plans()
    {

        return $this->belongsToMany(Plan::class, 'plan_channels', 'channel_id', 'plan_id');
    }


    public function type()
    {

        return $this->belongsTo(Type::class, 'type_id');
    }

    public function category()
    {

        return $this->belongsToMany(Category::class, 'channel_categories', 'channel_id', 'category_id');
    }

}
