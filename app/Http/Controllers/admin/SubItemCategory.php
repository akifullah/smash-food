<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubItemCategory extends Controller
{
    public function index(){
        return view("admin.sub_item_categories.list");
    }

    public function store(Request $request){
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new sub item category
        $subItemCategory = new \App\Models\SubItemCategory();
        $subItemCategory->name = $request->name;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/sub_item_categories'), $imageName);
            $subItemCategory->image = 'uploads/sub_item_categories/' . $imageName;
        }

        $subItemCategory->save();

        return response()->json([
            'success' => true,
            'message' => 'Sub Item Category created successfully',
            'data' => $subItemCategory
        ]);
    }
}
