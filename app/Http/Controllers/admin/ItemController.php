<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        return view("admin.products.list");
    }


    public function create(){
        return view("admin.products.create");
    }
}