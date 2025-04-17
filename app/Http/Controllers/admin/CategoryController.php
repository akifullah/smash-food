<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        return view('admin.categories.list');
    }

    // SHOW CREATE PAGE
    public function create(){
        return view("admin.categories.create");
    }
}