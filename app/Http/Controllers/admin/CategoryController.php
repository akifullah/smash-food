<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $data["categories"] = Category::get();
        return view('admin.categories.list', $data);
    }

    // SHOW CREATE PAGE
    public function create()
    {
        return view("admin.categories.create");
    }

    // STORE CATEGORY
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "image" => "image|mimes:jpeg,png,jpg,gif,webp"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $category = new Category();
        $category->name = $request->name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $imageName);
            $category->image = $imageName;
        }

        $save = $category->save();
        if ($save) {
            notify()->success('Category created successfully!');
            return redirect()->route('admin.categories')->with("success", "Category Added");
        }
    }
    // SHOW EDIT CATEGORY PAGE
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        if (!$category) {
            notify()->error('Category not found!');
            return redirect()->back()->with("success", "Category Added");
        }
        return view('admin.categories.edit', compact('category'));
    }

    // UPDATE CATEGORY
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $category = Category::findOrFail($id);
        $category->name = $request->name;

        if ($request->hasFile('image')) {
            File::delete(public_path('uploads/categories/' . $category->image));
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $imageName);
            $category->image = $imageName;
        } else {
            $category->image = $category->image;
        }
        $save = $category->update();

        if ($save) {
            notify()->success('Category updated successfully!');
            return redirect()->route('admin.categories')->with("success", "Category Updated");
        }
    }

    // DELETE CATEGORY
    public function delete($id)
    {
        $category = Category::findOrFail($id);

        $delete = $category->delete();
        File::delete(public_path('uploads/categories/' . $category->image));

        if ($delete) {
            notify()->success('Category deleted successfully!');
            return redirect()->route('admin.categories')->with("success", "Category Deleted");
        }
    }

    public function status($id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status;
        $category->update();
        return response()->json(['success' => true]);
    }
}
