<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable = ['role_type','name', 'email', 'password','confirm_password'];
    protected $hidden = ['password', 'remember_token'];
    // use HasFactory;

    // protected $primarykey='id';

    // protected $guarded=[];

    // protected $table = 'admin';
    // protected $fillable = [
    //     'role_type',
    //     'name',
    //     'email',
    //     'password',
    //     'confirm_password',
    //   ];
    //   protected $hidden = [
    //     'password',
    // ];

}
