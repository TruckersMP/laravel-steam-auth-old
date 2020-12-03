<?php

return [

    /*
     * Redirect URL after login
     */
    'redirect_url' => '/',

    /*
     * Realm override. Bypass domain ban by Valve. Use alternative domain with redirection to main for authentication (banned by valve).
     */
    //'realm' => 'redirected.com',

    /*
     * API Key (set in .env file) [http://steamcommunity.com/dev/apikey]
     */
    'api_key' => env('STEAM_API_KEY', ''),

    /*
     * Steam Web API endpoint
     */
    'api_url' => env('STEAM_API_URL', 'http://api.steampowered.com'),

    /*
     * Is using https ?
     */
    'https' => false,
];
