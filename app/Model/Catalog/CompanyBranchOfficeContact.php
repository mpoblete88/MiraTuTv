<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class CompanyBranchOfficeContact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'company_branch_office_id'];

    public function phones()
    {
        return $this->hasMany(CompanyBranchOfficeContactPhone::class, 'contact_id');
    }
}
