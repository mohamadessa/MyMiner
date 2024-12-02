<?php

namespace App\Helpers;

use App\Models\Setting;

class SettingsHelper
{
    /**
     * Get all settings as key-value pairs.
     *
     * @return array
     */
    public static function all()
    {
        return Setting::pluck('value', 'key')->toArray();
    }

    /**
     * Bulk update multiple settings.
     *
     * @param array $settings
     * @return void
     */
    public static function updateAll(array $settings)
    {
        foreach ($settings as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }
    }
}
