<?php

namespace App\Model\Catalog;
use App\Model\Catalog\Country;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    protected $casts = [
        'countries_id' => 'int',
        'zone_regions_id' => 'int'
    ];

    protected $fillable = [
        'name',
        'ISO_3166_2_CL',
        'countries_id',
        'zone_regions_id'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'countries_id');
    }


    public function provinces()
    {
        return $this->hasMany(Province::class, 'regions_id');
    }
}
