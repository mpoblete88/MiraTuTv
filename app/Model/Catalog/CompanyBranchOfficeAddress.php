<?php

namespace App\Model\Catalog;

use App\Model\Catalog\Property;
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


    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function company_branch_office()
    {
        return $this->belongsTo(CompanyBranchOffice::class, 'company_branch_office_id');
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }

    public function phones()
    {
        return $this->hasMany(\App\CompanyBranchOfficeAddressPhone::class, 'company_branch_office_address_id');
    }

    public function getCoordination($address)
    {
        $client = new \GuzzleHttp\Client();
        $geocoder = new \Spatie\Geocoder\Geocoder($client);
        return $geocoder->getCoordinatesForAddress($address);
    }

}
