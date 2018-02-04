<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class CompanyBranchOfficeSocialType extends Model
{
    protected $fillable = ['id', 'name'];

    public function socials()
    {
        return $this->hasMany(CompanyBranchOfficeSocial::class, 'type_id');
    }
}
