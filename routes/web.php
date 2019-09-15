<?php

use App\Order;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use BenSampo\Enum\Rules\EnumValue;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $order = Order::find(4);

    return view('welcome', [
        'order' => $order,
    ]);
});

Route::get('/enum', function () {
    Order::create([
        'status' => OrderStatus::Delivered
    ]);
});

Route::post('/updateStatus', function (Request $request) {
    $request->validate([
        'status' => ['required', new EnumValue(OrderStatus::class, false)],
    ]);

    dd('worked');
});
