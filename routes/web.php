<?php

use FlashVps\Docs\Http\Controllers\IndexController;

Route::middleware(['web'])
    ->prefix('docs')
    ->as('docs.')
    ->group(function () {
        Route::get('{path?}', [IndexController::class, 'index'])->name('index')->where('path', '.*');
    });
