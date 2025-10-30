<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'rg',
        'phone',
        'address',
        'birth_date'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Um usuário pode ter várias contas bancárias
    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }

    // Um usuário pode ter vários empréstimos
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    // Um usuário pode ter vários registros de auditoria
    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class);
    }
}
