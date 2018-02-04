<?php

namespace App\Model\Modules\Slider;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['title', 'subtitle', 'text_button', 'url', 'status', 'description'];

    public function attachment()
    {
        return $this->hasOne(SliderAttachment::class, 'slider_id');
    }
}
