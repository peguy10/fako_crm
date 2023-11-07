<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinistre extends Model
{
    use HasFactory;
    protected $fillable = [
        'policy_id',
        'user_id',
        'sinistre_num',
        'immatriculation',
        'mark',
        'power',
        'usage',
        'zone',
        'ptac',
        'date_visite',
        'immatriculation_adv',
        'mark_adv',
        'police_num',
        'insure_adv',
        'zone_adv',
        'date_v_adv',
        'name_c',
        'link_insure',
        'age_c',
        'cat',
        'num_date',
        'capacity',
        'name_c2',
        'activity',
        'age_c2',
        'passager',
        'date_h',
        'lieu',
        'venant',
        'allant',
        'circonstance',
        'croquis',
        'temoins',
        'name_adv',
        'adresse'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function policy()
    {
        return $this->belongsTo(Policy::class);
    }
}
