<?php

use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return redirect('/items');
});

Route::resource('items', ItemController::class);