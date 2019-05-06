<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class phuhuynh_user extends Authenticatable
{
	use Notifiable;
    protected $table = 'phuhuynh_user';
 	public $timestamps = false;
 	protected $fillable = [
        'sdt', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
}
