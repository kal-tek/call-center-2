<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNo',
        'comment',
        'department',
        'status',
        'last_update_by',
        'user_id',
    ];
}
