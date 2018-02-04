<?php

namespace App\Model\Catalog;

use App\Model\Catalog\Country;
use Illuminate\Database\Eloquent\Model;

class CompanyBranchOfficeAddressPhone extends Model
{
    protected $fillable = ['company_branch_office_address_id', 'country_code_id', 'phone', 'type_id'];

    public function branch_office_address()
    {
        return $this->belongsTo(CompanyBranchOfficeAddress::class, 'company_branch_office_address_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_code_id');
    }
    public function type()
    {
        return $this->belongsTo(CompanyBranchOfficeAddressPhoneType::class, 'type_id');
    }
}
