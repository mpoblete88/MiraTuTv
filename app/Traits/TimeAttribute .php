<?php
/**
 * Created by PhpStorm.
 * User: jsDotx3
 * Date: 26/02/2018
 * Time: 22:52
 */

namespace App\Traits;


use Carbon\Carbon;

trait TimeAttribute
{

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y H:i:s');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y H:i:s');
    }

    public function getBirthdateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}