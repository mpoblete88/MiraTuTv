<?php

namespace App\Model\System;

use Illuminate\Database\Eloquent\Model;

class SystemMaintenance extends Model
{
    protected $table = 'system_maintenances';

    protected $casts = [
        'status' => 'int'
    ];

    protected $fillable = [
        'status',
        'title',
        'subtitle',
        'background_color',
        'description',
        'footer',
        'title_color',
        'subtitle_color',
        'footer_text_color',
        'font_family'
    ];
}
