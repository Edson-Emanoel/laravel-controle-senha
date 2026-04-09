<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    // Relação de empresa para usuários. Uma empresa pode ter vários usuários.
    public function users()
    {
        return $this->hasMany(User::class, 'id_company');
    }

    // Relação de empresa para filas de espera. Uma empresa pode ter várias filas de espera.
    public function queues()
    {
        return $this->hasMany(Queue::class, 'id_company');
    }
}
