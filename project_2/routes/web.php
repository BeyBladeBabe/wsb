<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('wsb', function(){
    return view('wsb', ['firstName' => 'Franek', 'lastName' => 'Nowak']);
});

Route::get('pages/{page}', function(string $page){
    $pages = [
        'about' => 'Informacje o stronie',
        'contact' => 'jakiś e-mail',
        'home' => 'Strona domowa'
    ];
    return $pages[$page]??'Błędne dane wprowadzone przez użytkownika';
})->name('pages_site');

Route::get('/address/{city?}/{street?}/{postalCode?}', function(string $city = null, string $street = null, int $postalCode = null) {
    $postalCode = $postalCode ? substr($postalCode, 0, 2) . '-' . substr($postalCode, 2, 3) : 'brak kodu pocztowego';
    echo <<< SHOW
    Miasto: $city<br>
    Ulica: $street<br>
    Kod pocztowy: $postalCode<hr>
SHOW;
})-> name('adres');

Route::redirect('adres/{city?}/{street?}/{postalCode?}','/address/{city?}/{street?}/{postalCode?}');

//Route::get('show', [App\Http\Controllers\ShowController::class, 'show']);
Route::get('show', [ShowController::class, 'show']);
Route::get('showview', [ShowController::class, 'showView']);

Route::view('userform', 'forms.user_form');
Route::get('UserFormController', [App\Http\Controllers\UserFormController::class, 'showForm']);

Route::get('db', [App\Http\Controllers\ShowDbController::class,'showDbTable']);