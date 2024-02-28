<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Facade;
 
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}