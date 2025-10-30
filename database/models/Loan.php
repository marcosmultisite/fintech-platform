<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'interest_rate',
        'installments',
        'status',
        'approved_at'
    ];

    // Um empréstimo pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Um empréstimo pode ter vários pagamentos
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
