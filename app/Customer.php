<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'customer ';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'birthdate',
        'nick_name', 'status',
        'rut', 'email', 'password',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['full_name', 'status_label', 'status_color'];


    public function getStatusLabelAttribute()
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

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }


}
