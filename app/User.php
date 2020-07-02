<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /* Hieronder zijn de veriabalen opgenomen die worden toegevoegd aan de database. Ook zie je dat er verschil word gemaakt tussen fillable, hidden en casts */

    public $timestamps = false;
    protected $fillable = [
        'naam', 'email', 'password', 'rekeningNummer', 'adres'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
