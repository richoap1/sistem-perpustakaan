<?php

// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Bisa kirim data yang dibutuhkan ke view admin
        return view('admin.index');
    }
}
