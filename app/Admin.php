<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard ='admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password',
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

    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }


    public function getStatusLabelAttribute()
    {
        $label = 'Inactivo';
        if($this->attributes['status'] == 'active')
            $label = 'Activo';

        return $label;
    }
    public function getStatusColorAttribute()
    {
        $color = 'danger';
        if($this->attributes['status'] == 'active')
            $color = 'success';

        return $color;
    }
}
