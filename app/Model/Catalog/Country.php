<?php

namespace App\Model\Catalog;

use App\Model\Catalog\CompanyBranchOfficeAddressPhone;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    protected $casts = [
        'numcode' => 'int',
        'phonecode' => 'int'
    ];

    protected $fillable = [
        'iso',
        'name',
        'nicename',
        'iso3',
        'numcode',
        'phonecode'
    ];

    public function address_phones()
    {
        return $this->hasMany(CompanyBranchOfficeAddressPhone::class, 'countries_id');
    }

    public function regions()
    {
        return $this->hasMany(Region::class, 'countries_id');
    }
}
