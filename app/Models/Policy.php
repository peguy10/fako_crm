<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;
    protected $fillable=[
            'client_id',
            'business_type',
            'class',
            'insurer',
            'insurer_branch',
            'insurance_plan',
            'source',
            'user_id',
            'client_num_ref',
            'note_num',
            'policy_number',
            'start_date',
            'expery_date',
            'date_due',
            'renewable_flag',
            'sum_insurer',
            'discount',
            'claim_bonus',
            'base_premium',
            'other_premium',
            'total_premium',
            'gst',
            'premium_gst',
            'issue_date',
            'POS',
            'location',
            'previous_insurer',
            'previous_source',
            'co_generation',
            'payment_type',
            'ref_num',
            'bank_name',
            'payment_date',
            'amount',
            'collected_date',
            'immatriculation',
            'mark',
            'power',
            'genre',
            'nb_place',
            'cat',
            'zone',
            'serie',
            'date_mc',
            'val_neuve',
            'val_venale',
            'val_acc',
            'attestation',
            'carte_rose',
            'ptac',
            'inscription_number',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
