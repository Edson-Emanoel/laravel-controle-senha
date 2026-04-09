<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QueueTicket extends Model
{
    use SoftDeletes;

    public function queue()
    {
        // Relação de ticket com fila de espera. Um ticket só pode pertencer a uma fila de espera.
        return $this->belongsTo(Queue::class, 'id_queue');
    }
}
