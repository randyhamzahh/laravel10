<?php

namespace App\Http\Controllers;

use App\Models\Campaigns;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Campaigns::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'story' => 'required',
            'begin' => 'required',
            'end' => 'required',
            'target' => 'required'
        ]);

        return Campaigns::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Campaigns::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $campaign = Campaigns::find($id);
        $campaign->update($request->all());
        return $campaign;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Campaigns::destroy($id);
    }
}
