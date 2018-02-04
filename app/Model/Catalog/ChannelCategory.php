<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class ChannelCategory extends Model
{
    protected $fillable = ['channel_id', 'category_id'];
}
