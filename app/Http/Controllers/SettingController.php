<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\UpdateSettingRequest;
use App\Helpers\SettingsHelper;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = SettingsHelper::all();
        return view('admin.settings.index', compact('settings'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateAll(UpdateSettingRequest $request)
    {
        SettingsHelper::updateAll($request->except('_token'));
        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
