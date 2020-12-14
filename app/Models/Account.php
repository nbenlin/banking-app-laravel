<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Account extends Model
{
    use HasFactory;

    protected $table = "account";

    protected $fillable = [
        'user_id',
        'current_balance',
        'account_number'
    ];
}
