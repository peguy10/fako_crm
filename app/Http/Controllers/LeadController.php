<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = Lead::all();
        return view('leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view('leads.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'name' => 'required',
            'adresse' => 'required',
            'phone' => 'required',
            'due_date' => 'required',
            'lead_value' => 'required',
            'city' => 'required',
            'source' => 'required',
            'user_id' => 'required',
            'description' => 'required',
            'audit_id' =>'required',
        ]);

        try {
            $save=New Lead();
            $save->status = $request->status;
            $save->name = $request->name;
            $save->adresse = $request->adresse;
            $save->phone = $request->phone;
            $save->source = $request->source;
            $save->lead_value = $request->lead_value;
            $save->city = $request->city;
            $save->user_id = $request->user_id;
            $save->due_date = $request->due_date;
            $save->description = $request->description;
            $save->audit_id = Auth()->user()->id;
            $save->save();
            return redirect()->route('leads.create')->with('success', 'Lead added successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
