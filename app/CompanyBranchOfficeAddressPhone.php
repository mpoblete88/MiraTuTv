<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyBranchOfficeAddressPhone extends Model
{
  protected $fillable = ['company_branch_office_address_id', 'country_code_id', 'phone', 'type'];
}
