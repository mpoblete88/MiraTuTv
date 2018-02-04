<?php

namespace App\Model\Catalog;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    public $timestamps = false;

    protected $casts = [
        'provinces_id' => 'int'
    ];

    protected $fillable = [
        'name',
        'provinces_id'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'provinces_id');
    }

    public function address()
    {
        return $this->hasMany(CompanyBranchOfficeAddress::class, 'communes_id');
    }
}
