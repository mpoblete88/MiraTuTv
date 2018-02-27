<?php

namespace App\Model\Catalog;

use App\Traits\TimeAttribute;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use TimeAttribute;

    protected $table = 'categories';

    protected $fillable = ['name', 'description'];

}
