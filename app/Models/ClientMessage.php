<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMessage extends Model
{
    use HasFactory;

    protected $table = 'client_messages';
    protected $fillable = [
        'status',
        'client_id',
        'client_name',
        'message'
    ];


    public function client()
    {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }
}
