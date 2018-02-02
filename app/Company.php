<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name', 'short_name', 'web_site', 'favicon_path', 'logo_path', 'logo_dark_path', 'logo_light_path'];

    public function branch_offices()
    {
        return $this->hasMany(CompanyBranchOffice::class, 'company_id');
    }
}
