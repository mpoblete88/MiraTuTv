<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class CompanyBranchOfficeContactPhone extends Model
{
    protected $fillable = ['phone'];

    public function type()
    {
        return $this->belongsTo(CompanyBranchOfficeAddressPhoneType::class, 'type_id');
    }
    public function contact()
    {
        return $this->belongsTo(CompanyBranchOfficeContact::class, 'contact_id');
    }
}
