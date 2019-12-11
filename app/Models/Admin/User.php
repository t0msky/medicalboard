<?php

namespace App\Models\Admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userRole()
    {
        return $this->hasMany('App\Models\Admin\UserRole','user_id','id');
    }

    public function createUser($request){

        $createUser = $this->create([
            'operid' => isset($request['operid']) ? $request['operid'] : NULL,
            'branchcode' => isset($request['branchcode']) ? $request['branchcode'] : NULL,
            'name' => isset($request['name']) ? $request['name'] : NULL,
            'password' => isset($request['password']) ? Hash::make($request['password']) : NULL,
            'email' => isset($request['email']) ? $request['email'] : NULL,
            'appind' => isset($request['appind']) ? $request['appind'] : NULL,
            'activests' => isset($request['activests']) ? $request['activests'] : NULL,
        ]);

        return $createUser;
    }

}
