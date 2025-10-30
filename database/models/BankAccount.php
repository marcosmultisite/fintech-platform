<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bank_name',
        'agency',
        'account_number',
        'balance',
        'open_finance_id'
    ];

    // Uma conta bancária pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Uma conta bancária pode ter vários pagamentos
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
