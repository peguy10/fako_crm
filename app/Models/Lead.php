<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable=[
        'status',
        'name',
        'adresse',
        'phone',
        'due_date',
        'lead_value',
        'city',
        'source',
        'user_id',
        'description',
        'audit_id,'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
