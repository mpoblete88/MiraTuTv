<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $timestamps = false;

    protected $casts = [
        'regions_id' => 'int'
    ];

    protected $fillable = [
        'name',
        'regions_id'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'regions_id');
    }

    public function communes()
    {
        return $this->hasMany(Commune::class, 'provinces_id');
    }
}
