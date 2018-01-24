<?php

namespace App;

use Amelia\Rememberable\Rememberable;
use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class ModelAbstract extends Eloquent
{
    use Rememberable;

    /**
     * Remember _all_ queries on this model
     *
     * @var bool
     */
    protected static $rememberable = false;
}