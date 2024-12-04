<?php

namespace App\Http\Controllers;

use App\Models\Miner;
use App\Http\Requests\StoreMinerRequest;
use App\Http\Requests\UpdateMinerRequest;
use Illuminate\Support\Facades\Storage;

class MinerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $miners = Miner::all();
        return view('admin.miners.index', compact('miners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.miners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMinerRequest $request)
    {

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        }
        Miner::create($validated);

        return redirect()->route('miners.index')->with('success', 'Miner created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Miner $miner)
    {
        // $miner = Miner::where('slug', $miner->slug)->firstOrFail();
        // return view('admin.miners.show', compact('miner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Miner $miner)
    {
        return view('admin.miners.edit', compact('miner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMinerRequest $request, Miner $miner)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {

            if ($miner->image && Storage::exists('public/' . $miner->image)) {
                Storage::delete('public/' . $miner->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        }
        $miner->update($validated);

        return redirect()->route('miners.index')->with('success', 'Miner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Miner $miner)
    {
        $miner->delete();
        return redirect()->route('miners.index')->with('success', 'Miner deleted successfully.');
    }
}
