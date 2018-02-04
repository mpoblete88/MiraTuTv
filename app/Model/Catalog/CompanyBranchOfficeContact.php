<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class CompanyBranchOfficeContact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'company_branch_office_id', 'created_at'];
    protected $appends = ['full_name', 'created_at_format'];

    public function getCreatedAtFormatAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }
    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function phones()
    {
        return $this->hasMany(CompanyBranchOfficeContactPhone::class, 'contact_id');
    }

    public function branch_office()
    {
        return $this->belongsTo(CompanyBranchOffice::class, 'company_branch_office_id');
    }


}
