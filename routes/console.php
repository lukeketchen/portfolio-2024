<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('app:get-current-forecast', function () {
    dispatch(new \App\Jobs\Forecast\GetCurrentForecast());
})->purpose('Get the current forecast from the Bureau of Meteorology')->daily()->at('00:00');