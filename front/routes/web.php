<?php

use GuzzleHttp\Promise\Create;
use App\Http\Livewire\ClientesEdit;
use App\Http\Livewire\ClientesShow;
use App\Http\Livewire\DetallesEdit;
use App\Http\Livewire\DetallesShow;
use App\Http\Livewire\FacturasEdit;
use App\Http\Livewire\FacturasShow;
use App\Http\Livewire\IndexClientes;
use App\Http\Livewire\IndexDetalles;
use App\Http\Livewire\IndexFacturas;
use App\Http\Livewire\IndexUsuarios;
use App\Http\Livewire\ClientesCreate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AUController;
use App\Http\Livewire\DetallesCreated;
use App\Http\Livewire\FacturasCreated;
use App\Http\Controllers\AUsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AmiiboController;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PlantillaController;

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
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'LoginFC']);

Route::get('/amiibos',[AmiiboController::class, "obtener"]);

//Route::get('/usuarios',[AUController::class, "obtenerU"]);

Route::get('/plantilla', [PlantillaController::class, "index"]);

Route::get('/usuario', IndexUsuarios::class );



//EXAMEN

//Clientes
Route::get('/clientes', IndexClientes::class, "index" );
Route::get('/clientes/crear', ClientesCreate::class  );
Route::get('/clientes/{id}/show', ClientesShow::class );
Route::get('clientes/{id}/edit', ClientesEdit::class );

//FACTURAS
Route::get('/facturas', IndexFacturas::class, "index" );
Route::get('/facturas/crear', FacturasCreated::class);
Route::get('/facturas/{id}/edit', FacturasEdit::class);
Route::get('/facturas/{id}/show', FacturasShow::class);

//DETELLAES
Route::get('/detalles', IndexDetalles::class, "index" );
Route::get('/detalles/crear', DetallesCreated::class);
Route::get('/detalles/{id}/edit', DetallesEdit::class);
Route::get('/detalles/{id}/show', DetallesShow::class);



