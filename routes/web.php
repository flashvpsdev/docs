<?php

use FlashVps\Docs\Http\Controllers\IndexController;

Route::middleware([
    'web',
    \Spatie\ResponseCache\Middlewares\CacheResponse::class,
])
    ->prefix('docs')
    ->as('docs.')
    ->group(function () {
        Route::get('{path?}', [IndexController::class, 'index'])->name('index')->where('path', '.*');
    });
