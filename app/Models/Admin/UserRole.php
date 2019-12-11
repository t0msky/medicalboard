<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_roles';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\Admin\User','id');
    }

    public function createUserRole($request){

        $assignUserRole = $this->create([
            'user_id' => isset($request['user_id']) ? $request['user_id'] : NULL,
            'operid' => isset($request['operid']) ? $request['operid'] : NULL,
            'role' => isset($request['role']) ? $request['role'] : NULL,
            'user_group' => isset($request['user_group']) ? $request['user_group'] : NULL,
        ]);

        return $assignUserRole;
    }
}
