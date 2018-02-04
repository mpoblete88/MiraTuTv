<?php

namespace App\Model\Modules\Slider;

use Illuminate\Database\Eloquent\Model;

class SliderAttachment extends Model
{
    public function slider()
    {
        return $this->belongsTo(Slider::class,'slider_id');
    }
}
