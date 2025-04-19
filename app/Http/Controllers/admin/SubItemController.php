<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SubItem;
use App\Models\SubItemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SubItemController extends Controller
{
    public function index()
    {
        // Fetch all sub items from the database
        $data["subItems"] = SubItem::with("SubItemCategory")->get();
        $data["subItemCategories"] = SubItemCategory::whereStatus(1)->get();
        // Pass the sub items data to the view
        return view('admin.sub_items.list', $data);
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'sub_item_category_id' => 'required|exists:sub_item_categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            if ($request->id) {
                $existingSubItem = SubItem::find($request->id);
                if ($existingSubItem && $existingSubItem->image) {
                    // Check if the image path already contains the uploads path
                    if (strpos($existingSubItem->image, 'uploads/sub_items/') === 0) {
                        // Image already has the path, use it directly
                        File::delete(public_path($existingSubItem->image));
                    } else {
                        // Image just has the filename, add the path
                        File::delete(public_path('uploads/sub_items/' . $existingSubItem->image));
                    }
                }
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/sub_items'), $imageName);
            $imagePath = 'uploads/sub_items/' . $imageName;
        }

        // Create or update the sub item
        $subItem = SubItem::updateOrCreate(
            ['id' => $request->id],
            [
                'sub_item_category_id' => $request->sub_item_category_id,
                'name' => $request->name,
                'price' => $request->price,
                'image' => $request->hasFile('image') ? $imagePath : ($request->id ? SubItem::find($request->id)->image : null),
                'status' => $request->has('status') ? 1 : 0,
            ]
        );

        // Return response
        return response()->json([
            'success' => true,
            'message' => 'Sub Item saved successfully',
            'data' => $subItem
        ]);
    }

    public function edit($id)
    {
        $subItem = SubItem::findOrFail($id);
        $subItemCategories = SubItemCategory::whereStatus(1)->get();

        return response()->json([
            'success' => true,
            'data' => [
                'subItem' => $subItem,
                'subItemCategories' => $subItemCategories
            ]
        ]);
    }


    public function delete(Request $request)
    {
        try {
            $subItem = SubItem::findOrFail($request->id);
            
            // Delete the image if it exists
            if ($subItem->image) {
                if (strpos($subItem->image, 'uploads/sub_items/') === 0) {
                    // Image already has the path, use it directly
                    File::delete(public_path($subItem->image));
                } else {
                    // Image just has the filename, add the path
                    File::delete(public_path('uploads/sub_items/' . $subItem->image));
                }
            }
            
            // Delete the sub item
            $subItem->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Sub Item deleted successfully'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting sub item: ' . $e->getMessage()
            ], 500);
        }
    }
    
}
