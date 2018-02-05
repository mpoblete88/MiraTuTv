<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class Decoder extends Model
{
    protected $fillable = ['name', 'code', 'serial_number', 'plan_id'];

    protected $appends = ['status_label', 'status_color', 'created_at_format', 'updated_at_format'];

    public function getUpdatedAtFormatAttribute()
    {
        return $this->updated_at->format('d/m/Y');
    }

    public function getCreatedAtFormatAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    public function getStatusLabelAttribute()
    {
        $label = 'Inactivo';
        if ($this->attributes['status'] == 'active') {
            $label = 'Activo';
        }

        return $label;
    }

    public function getStatusColorAttribute()
    {
        $color = 'danger';
        if ($this->attributes['status'] == 'active') {
            $color = 'success';
        }

        return $color;
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
