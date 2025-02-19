<?php

use App\Models\Option;

// Set option function
if (!function_exists('set_option')) {
    function set_option(string $key, string $value): void
    {
        Option::updateOrCreate(['key' => $key, 'value' => $value]);
    }
}

// Get option function
if (!function_exists('get_option')) {
    function get_option(string $key): string
    {
        return  Option::where('key', $key)->value('value') ?? "";
    }
}

// Remove option function
if (!function_exists('remove_option')) {
    function remove_option(string $key): void
    {
        Option::where('key', '=', $key)->delete();
    }
}
