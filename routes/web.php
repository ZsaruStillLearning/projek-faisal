
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;

// Define the route for the welcome page
Route::get('/', [WelcomeController::class, 'selamatDatang']);

// Define the route for the CRUD operations
Route::resource('contacts', ContactController::class);