<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_id',
        'bank_account_id',
        'amount',
        'payment_date',
        'status',
        'transaction_id'
    ];

    // Um pagamento pertence a um empréstimo
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    // Um pagamento pertence a uma conta bancária
    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class);
    }
}
