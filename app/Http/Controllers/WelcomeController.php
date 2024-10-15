<?php
// Rename the controller to WelcomeController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends \Illuminate\Routing\Controller
{
    public function selamatDatang()
    {
        return view('welcome');
    }
}