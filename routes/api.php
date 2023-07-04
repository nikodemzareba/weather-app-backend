<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

Route::get('/weather/{location}', function (Request $request, $location) {
    $apiKey = 'c86b08421627449fb73200103232506';
    $url = "https://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$location}";

    $response = Http::get($url);
    return $response->json();
});

// AIzaSyAXwHWvvYlGz9rarjPyXZHh8O8ZMAQhMNs google api maps key.
// AIzaSyAOPxASpgWb4e9yGMw3svuFXTcSTTFdk6o key two.
// OLEwcp1nhFlVIE7_XyCqDDMYZzJdhdHbITLodkU1sak unsplash api key.





