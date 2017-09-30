<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Customer extends Authenticatable
    {
        use Notifiable;

        protected $guard ='customer ';


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
    }
