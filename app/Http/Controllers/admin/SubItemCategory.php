<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SubItemCategory as SubItemCategoryModel;
use Illuminate\Http\Request;

class SubItemCategory extends Controller
{
    public function index()
    {
        $data["subItemCategories"] = SubItemCategoryModel::get();
        return view("admin.sub_item_categories.list", $data);
    }

    public function store(Request $request)
    {
        // return $request->all();
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update or create a sub item category
        if ($request->id != 0) {
            $subItemCategory = SubItemCategoryModel::find($request->id);
            if ($subItemCategory) {
                $subItemCategory->name = $request->name;
                $subItemCategory->status = $request->has('status') ? 1 : 0;
                if ($request->hasFile('image') && $subItemCategory->image) {
                    // Delete the previous image
                    $previousImagePath = public_path($subItemCategory->image);
                    if (file_exists($previousImagePath)) {
                        unlink($previousImagePath);
                    }
                }
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Sub Item Category not found',
                ], 404);
            }
        } else {
            $subItemCategory = new SubItemCategoryModel();
            $subItemCategory->name = $request->name;
            $subItemCategory->status = $request->has('status') ? 1 : 0;
        }

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

    // UPDATE STATUS
    public function status(Request $request)
    {
        // Find the sub item category by ID
        $subItemCategory = SubItemCategoryModel::findOrFail($request->id);

        // Toggle the status
        $subItemCategory->status = !$subItemCategory->status;

        // Save the updated status
        $subItemCategory->save();

        return response()->json([
            'success' => true,
            'message' => 'Sub Item Category status updated successfully',
            'data' => $subItemCategory
        ]);
    }


    public function edit($id)
    {
        // Find the sub item category by ID
        $subItemCategory = SubItemCategoryModel::find($id);

        // Check if the sub item category exists
        if (!$subItemCategory) {
            return response()->json([
                'success' => false,
                'message' => 'Sub Item Category not found',
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Sub Item Category',
            'data' => $subItemCategory
        ]);
    }

    // UPDATE ITEM
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        // Find the sub item category by ID
        $subItemCategory = SubItemCategoryModel::findOrFail($id);

        // Update the name and status
        $subItemCategory->name = $request->name;
        $subItemCategory->status = $request->has('status') ? 1 : 0;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($subItemCategory->image && file_exists(public_path($subItemCategory->image))) {
                unlink(public_path($subItemCategory->image));
            }

            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/sub_item_categories'), $imageName);
            $subItemCategory->image = 'uploads/sub_item_categories/' . $imageName;
        }

        // Save the updated sub item category
        $subItemCategory->save();

        return response()->json([
            'success' => true,
            'message' => 'Sub Item Category updated successfully',
            'data' => $subItemCategory
        ]);
    }

    // DELETE ITEM
    public function delete(Request $request)
    {
        // Find the sub item category by ID
        $subItemCategory = SubItemCategoryModel::findOrFail($request->id);

        // Delete the image if it exists
        if ($subItemCategory->image && file_exists(public_path($subItemCategory->image))) {
            unlink(public_path($subItemCategory->image));
        }

        // Delete the sub item category
        $subItemCategory->delete();

        return response()->json([
            'success' => true,
            'message' => 'Sub Item Category deleted successfully'
        ]);
    }
}
