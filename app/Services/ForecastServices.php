<?php

namespace App\Services;

use App\Models\Forecast;
use Carbon\Carbon;

class ForecastServices
{
    public static function createForecastFromBomData(): void
    {
        // https://api.weather.bom.gov.au/v1/locations/r1pxp10/forecasts/daily

        $url = 'https://api.weather.bom.gov.au/v1/locations/r1pxp10/forecasts/daily';

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url, [
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
                'Accept' => 'application/json',
            ],
        ]);

        $response = json_decode($response->getBody()->getContents(), true);

        $forecast = new Forecast();
        $forecast->location = 'Drouin, Victoria';
        $forecast->extended_text = $response['data'][0]['extended_text'];
        $forecast->short_text = $response['data'][0]['short_text'];
        $forecast->fire_danger = $response['data'][0]['fire_danger'];
        $forecast->temp_high = $response['data'][0]['temp_max'];
        $forecast->temp_low = $response['data'][0]['temp_min'];
//        $forecast->sunrise_time = $response['data'][0]['astronomical']['sunrise_time'];
//        $forecast->sunset_time = $response['data'][0]['astronomical']['sunset_time'];
        $forecast->save();

    }
}
