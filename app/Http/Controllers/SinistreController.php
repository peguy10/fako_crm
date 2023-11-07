<?php

namespace App\Http\Controllers;

use App\Models\Sinistre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SinistreController extends Controller
{
    public function index()
    {
        $sinistres = Sinistre::all();
        return view('sinistres.index', compact('sinistres'));
    }

    public function create()
    {
        return view('sinistres.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'policy_id' => 'required',
            'user_id' => 'required',
            'sinistre_num' => 'required',
            'immatriculation' => 'required',
            'mark' => 'required|string',
            'power' => 'required|string',
            'usage' => 'required|string',
            'zone' => 'required|string',
            'ptac' => 'required|integer',
            'date_visite' => 'required|date',
            'immatriculation_adv' => 'required',
            'mark_adv' => 'required|string',
            'police_num' => 'required|string',
            'insure_adv' => 'required|string',
            'zone_adv' => 'required|string',
            'date_v_adv' => 'required|date',
            'name_c' => 'required|string',
            'link_insure' => 'required|string',
            'age_c' => 'required|string',
            'cat' => 'required|string',
            'num_date' => 'required|string',
            'capacity' => 'required|string',
            'name_c2' => 'required|string',
            'activity' => 'required|string',
            'age_c2' => 'required|string',
            'passager' => 'required|string',
            'date_h' => 'required|date',
            'lieu' => 'required|string',
            'venant' => 'required|string',
            'allant' => 'required|string',
            'circonstance' => 'required|string',
            'croquis' => 'required|string',
            'temoins' => 'required|string',
            'name_adv' => 'required|string',
            'adresse' => 'required|string',
            'name_c_adv' => 'required|string',
            'permis' => 'required|string',
            'del_date_adv' => 'required|date',
            'capacity_adv' => 'required|string',
            'corporeil' => 'required|string',
            'corporeil_adv' => 'required|string',
            'materiel' => 'required|string',
            'materiel_adv' => 'required|string',
            'vehicule_v' => 'required|string',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        try {
            $sinistre = new Sinistre;
            $sinistre->fill($request->all());
            $sinistre->save();

            return redirect()->back()->with('success', 'Sinistre enregistré avec succès.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function show(Sinistre $sinistre)
    {
        return view('sinistres.show', compact('sinistre'));
    }

    public function edit(Sinistre $sinistre)
    {
        return view('sinistres.edit', compact('sinistre'));
    }

    public function update(Request $request, Sinistre $sinistre)
    {
        $sinistre->update($request->all());
        return redirect()->route('sinistres.show', $sinistre->id);
    }

    public function destroy(Sinistre $sinistre)
    {
        $sinistre->delete();
        return redirect()->route('sinistres.index');
    }
}
