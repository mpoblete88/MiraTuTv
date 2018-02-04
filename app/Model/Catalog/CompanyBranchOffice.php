<?php

namespace App\Model\Catalog;
use Illuminate\Database\Eloquent\Model;

class CompanyBranchOffice extends Model
{
    protected $fillable = ['name', 'rut', 'current', 'status'];
    protected $appends = ['status_color', 'status_label'];

    public function getStatusLabelAttribute ()
    {
        $label = 'Inactivo';
        if ($this->attributes['status'] == 'active')
            $label = 'Activo';

        return $label;
    }

    public function getStatusColorAttribute()
    {
        $color = 'danger';
        if ($this->attributes['status'] == 'active')
            $color = 'success';

        return $color;
    }


    public function company()
    {
        return $this->belongsTo(\App\Model\Catalog\Company::class, 'company_id');
    }

    public function address()
    {
        return $this->hasOne(\App\Model\Catalog\CompanyBranchOfficeAddress::class, 'company_branch_office_id');
    }

    public function socials()
    {
        return $this->hasMany(\App\Model\Catalog\CompanyBranchOfficeSocial::class, 'company_branch_office_id');
    }

    public function contacts()
    {
        return $this->hasMany(\App\Model\Catalog\CompanyBranchOfficeContact::class, 'company_branch_office_id');
    }
}
