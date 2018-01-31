<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyBranchOfficeAddress extends Model
{
    protected $fillable = [
        'address',
        'number',
        'property_number',
        'latitude',
        'longitude',
        'property_id',
        'city_id',
        'company_branch_office_id'
    ];

    public function company_branch_office()
    {
        return $this->belongsTo(\App\CompanyBranchOffice::class, 'company_branch_office_id');
    }

    public function city()
    {
        return $this->belongsTo(\App\Catalog\City::class, 'city_id');
    }

    public function phones()
    {
        return $this->hasMany(\App\CompanyBranchOfficeAddressPhone::class, 'company_branch_office_address_id');
    }

}
