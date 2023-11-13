<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Policy;
use App\Models\User;
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
        $users = User::all();

        return view('policies.create', compact('clients','users'));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire de création
        try {
            
            $longueur=2;
            $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $longueurMax = strlen($caracteres);
            $chaineAleatoire = '';
            for ($i = 0; $i < $longueur; $i++)
            {
            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
            
            }
            $num1 = mt_rand(10000, 99999);
            $num2= mt_rand(10000, 99999);

            $ref_num = $num1."".$chaineAleatoire."".$num2;
            
            $request->validate([
            'client_id' => 'required',
            'business_type' => 'required',
            'class' => 'required',
            'insurer' => 'required',
            'source' => 'required',
            'user_id' => 'required',
            //'client_num_ref' => 'required',
            //'note_num' => 'required',
            // 'policy_number' => 'required',
            'start_date' => 'required',
            'expery_date' => 'required',
            //'date_due' => 'required',
            // 'renewable_flag' => 'required',
            'sum_insurer' => 'required',
            'discount' => 'required',
            'claim_bonus' => 'required',
            'base_premium' => 'required',
            'other_premium' => 'required',
            'total_premium' => 'required',
            'gst' => 'required',
            'premium_gst' => 'required',
            'issue_date' => 'required',
            'location' => 'required',
            'previous_insurer' => 'required',
            'previous_source' => 'required',
            'co_generation' => 'required',
            'payment_type' => 'required',
            'ref_num' => 'required',
            'bank_name' => 'required',
            'payment_date' => 'required',
            'amount' => 'required',
            'collected_date' => 'required',
            'immatriculation' => 'required',
            'mark' => 'required',
            'power' => 'required',
            'genre' => 'required',
            'nb_place' => 'required',
            'cat' => 'required',
            'zone' => 'required',
            'serie' => 'required',
            'date_mc' => 'required',
            'val_neuve' => 'required',
            'val_venale' => 'required',
            'val_acc' => 'required',
            'attestation' => 'required',
            'carte_rose' => 'required',
            'ptac' => 'required',
            'inscription_number' => 'required',
            'insurer_branch' => 'required',
            'insurance_plan'=>'required'

        ]);

        $postData = [
            'client_id' => $request->client_id,
            'business_type' => $request->business_type,
            'class' => $request->class,
            'insurer' => $request->insurer,
            'insurer_branch' => $request->insurer_branch,
            'insurance_plan' => $request->insurance_plan,
            'source' => $request->source,
            'user_id' => $request->user_id,
            'remarks' => $request->remarks,
            // 'client_num_ref' => $request->client_num_ref,
            //'note_num' => $request->note_num,
            'policy_number' => $ref_num,
            'start_date' => $request->start_date,
            'expery_date' => $request->expery_date,
            //  'date_due' => $request->date_due,
            //'renewable_flag' => $request->renewable_flag,
            'sum_insurer' => $request->sum_insurer,
            'discount' => $request->discount,
            'claim_bonus' => $request->claim_bonus,
            'base_premium' => $request->base_premium,
            'other_premium' => $request->other_premium,
            'total_premium' => $request->total_premium,
            'gst' => $request->gst,
            'premium_gst' => $request->premium_gst,

            'issue_date' => $request->issue_date,
            'location' => $request->location,
            'previous_insurer' => $request->previous_insurer,
            'previous_insurance_plan' => $request->previous_insurance_plan,
            'previous_source' => $request->previous_source,

            'immatriculation' => $request->immatriculation,
            'mark' => $request->mark,
            'power' => $request->power,
            'genre' => $request->genre,
            'nb_place' => $request->nb_place,
            'cat' => $request->cat,
            'zone' => $request->zone,
            'serie' => $request->serie,
            'date_mc' => $request->date_mc,
            'val_neuve' => $request->val_neuve,
            'val_venale' => $request->val_venale,
            'val_acc' => $request->val_acc,
            'attestation' => $request->attestation,
            'carte_rose' => $request->carte_rose,
            'ptac' => $request->ptac,
            'inscription_number' => $request->inscription_number,

            'previous_POS' => $request->previous_POS,
            'co_generation' => $request->co_generation,
            'deductible_details' => $request->deductible_details,
            'additional_info' => $request->additional_info,
            'file_type' => $request->file_type,
            'payment_type' => $request->payment_type,
            'ref_num' => $ref_num,
            'bank_name' => $request->bank_name,
            'payment_date' => $request->payment_date,
            'amount' => $request->amount,
            'collected_date' => $request->collected_date,
            'user_id'=> Auth()->user()->id,
        ];
        Policy::create($postData);
            return redirect()->back()->with('success', 'La police d\'assurance a été créée avec succès.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors($e->getMessage());
        }
}

    public function show(Request $request, $id)
    {
        $policies = Policy::where('id',$id)->first();

        return view('policies.show', compact('policies'));
    }

    public function edit($id)
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
    public function billing($id){
        // $primes=Prime::where('policy_id',$id)->get();
        $policies=Policy::where('id',$id)->first();
        return view('policies.billing',compact('policies'));
    }
    public function policyPDF(Policy $policy)
    {
        $data = ['policy' => $policy];

        $pdf = PDF::loadView('policies.pdf', $data);

        return $pdf->download('police d\'assurance de '.$policy->client->user->full_name.'.pdf');
    }
}
