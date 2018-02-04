<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class CompanyBranchOfficeSocial extends Model
{
    protected $fillable = ['url', 'type_id', 'company_branch_office_id'];

    public function branch_office()
    {
        return $this->belongsTo(CompanyBranchOffice::class, 'company_branch_office_id');
    }
    public function type()
    {
        return $this->belongsTo(CompanyBranchOfficeSocialType::class, 'type_id');
    }
}
