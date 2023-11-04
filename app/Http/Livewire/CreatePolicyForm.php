<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\Policy;
class CreatePolicyForm extends Component
{
    
    public $policy_number;
    public $client_id;
    public $coverage;
    public $amount_insured;
    public $premium;
    public $start_date;
    public $end_date;
    public $deductible;

    public function render()
    {
        $clients = Client::all();

        return view('livewire.create-policy-form', compact('clients'));
    }

    public function create()
    {
        // Valider les données du formulaire de création

        Policy::create([
            'policy_number' => $this->policy_number,
            'client_id' => $this->client_id,
            'coverage' => $this->coverage,
            'amount_insured' => $this->amount_insured,
            'premium' => $this->premium,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'deductible' => $this->deductible,
        ]);

        session()->flash('success', 'La police a été créée avec succès.');

        return redirect()->route('policies.index');
    }
}
