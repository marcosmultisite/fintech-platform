<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'ip_address',
        'user_agent',
        'created_at'
    ];

    public $timestamps = false;

    // O log pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
