<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TagController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Tags/Index');
    }

    public function create()
    {
        return Inertia::render('Admin/Tags/CreateTag');
    }
}
