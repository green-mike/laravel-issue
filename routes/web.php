<?php

use App\Models\Banner;
use App\Models\Score;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $banner = Banner::factory()->create();
    dd($banner->end_at);
});
