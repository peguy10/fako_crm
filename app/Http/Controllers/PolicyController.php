<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use App\Models\Client;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PoliciesExport;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index()
    {
        $policies = Policy::with('client')->get();

        return view('policies.index', compact('policies'));
    }

    public function create()
    {
        $clients = Client::all();

        return view('policies.create', compact('clients'));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire de création
        try {
            $validatedData = $request->validate([
                'client_id' => 'required|integer',
                'policy_number' => 'required|unique:policies',
                'coverage' => 'required',
                'beneficiaries' => 'required',
                'amount_insured' => 'required|numeric',
                'premium' => 'required|numeric',
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'deductible' => 'nullable|numeric',
                'special_conditions' => 'nullable|string'
            ]);
    
            $policy = Policy::create($validatedData);
            return redirect()->back()->with('success', 'La police d\'assurance a été créée avec succès.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors($e->getMessage());
        }
}

    public function show(Policy $policy)
    {
        $policy->load('client');

        return view('policies.show', compact('policy'));
    }

    public function edit(Policy $policy)
    {
        $clients = Client::all();

        return view('policies.edit', compact('policy', 'clients'));
    }

    public function update(Request $request, Policy $policy)
    {
        // Valider les données du formulaire de modification

        $policy->update($request->all());
        return redirect()->back()->with('edit', 'La police d\'assurance a été modifiée avec succès.');


        // Rediriger ou retourner une réponse appropriée
    }

    public function destroy(Policy $policy)
    {
        $policy->delete();
        return redirect()->route('policies.index')->with('success1', 'La police d\'assurance a été supprimée avec succès.');

        // Rediriger ou retourner une réponse appropriée
    }
    public function exportPolicies()
    {
        return Excel::download(new PoliciesExport, 'policies.xlsx');
    }
}
