<?php

namespace App\Http\Controllers;

use App\Models\Miner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MinerTrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trashedMiners = Miner::onlyTrashed()->get();
        return view('admin.miners.trash', compact('trashedMiners'));
    }

    /**
     * Restore form Miner table.
     */
    public function restore($id)
    {
        $Miner = Miner::onlyTrashed()->findOrFail($id);
        $Miner->restore();

        return redirect()->route('trashminers.index')->with('success', 'The Miner has been restored successfully.');
    }

    /**
     * forceDelete Miner form table.
     */
    public function forceDelete($id)
    {

        $Miner = Miner::onlyTrashed()->findOrFail($id);
        if ($Miner->image && Storage::exists('public/' . $Miner->image)) {
            Storage::delete('public/' . $Miner->image);
        }
        $Miner->forceDelete();

        return redirect()->route('trashminers.index')->with('success', 'تم حذف السجل نهائيًا');
    }
}
