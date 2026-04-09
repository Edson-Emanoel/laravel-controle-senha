<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    // Relação entre user e company - um usuário só pode pertencer a uma empresa.
    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company');
    }
}
