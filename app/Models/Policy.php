<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;
    protected $fillable = [
        'policy_number',
        'coverage',
        'beneficiaries',
        'amount_insured',
        'premium',
        'start_date',
        'end_date',
        'deductible',
        'special_conditions',
        'client_id',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
