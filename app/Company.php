<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';


    public function branch_offices(){

        return $this->hasMany(CompanyBranchOffice::class, 'company_id');
    }
}
