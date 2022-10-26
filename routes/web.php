<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'     ])->name('dashboard' );
    Route::get('/analytics', [DashboardController::class, 'analytics' ])->name('analytics' );
    Route::get('/customers', [DashboardController::class, 'customers' ])->name('customers' );
    Route::get('/orders',    [DashboardController::class, 'orders'    ])->name('orders'    );
    Route::get('/invoices',  [DashboardController::class, 'invoices'  ])->name('invoices'  );
    Route::get('/shop',      [DashboardController::class, 'shop'      ])->name('shop'      );
    Route::get('/shop_2',    [DashboardController::class, 'shop_2'    ])->name('shop_2'    );
    Route::get('/product',   [DashboardController::class, 'product'   ])->name('product'   );
    Route::get('/cart',      [DashboardController::class, 'cart'      ])->name('cart'      );
    Route::get('/cart_2',    [DashboardController::class, 'cart_2'    ])->name('cart_2'    );
    Route::get('/pay',       [DashboardController::class, 'pay'       ])->name('pay'       );
    Route::get('/campaigns', [DashboardController::class, 'campaigns' ])->name('campaigns' );
    Route::get('/team_tabs', [DashboardController::class, 'team_tabs' ])->name('team_tabs' );
    Route::get('/team_tiles',[DashboardController::class, 'team_tiles'])->name('team_tiles');
    Route::get('/profile',   [DashboardController::class, 'profile'   ])->name('profile'   );
    Route::get('/messages',  [DashboardController::class, 'messages'  ])->name('messages'  );
    Route::get('/tasks',     [DashboardController::class, 'tasks'     ])->name('tasks'     );
    Route::get('/inbox',     [DashboardController::class, 'inbox'     ])->name('inbox'     );


    Route::fallback(function() {
        return view('pages/utility/404');
    });


});
