<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubItem;
use App\Models\SubItemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $data["products"] = Product::with('category')->get();
        return view("admin.products.list", $data);
    }


    public function create()
    {
        $data["categories"] = Category::whereStatus(1)->get();
        return view("admin.products.create", $data);
    }

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            notify()->error('Please fill all the required fields');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $slug = Str::slug($request->name);
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $slug;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products/'), $filename);
            $product->image = $filename;
        }
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status ?? 1;
        $product->save();

        if ($request->has('manual_extra_section_count') && is_array($request->manual_extra_section_count)) {
            foreach ($request->manual_extra_section_count as $index) {
                $category = SubItemCategory::create([
                    'section_order' => $request->manual_extra_section_order[$index],
                    'section_title' => $request->manual_extra_section_title[$index],
                    'section_type'  => $request->manual_extra_type[$index],
                    'product_id'    => $product->id,
                ]);

                foreach ($request->manual_extra_details_count[$index] as $key => $item) {
                    if ($request->manual_extra_image[$index][$key]) {
                        $file = $request->file('manual_extra_image')[$index][$key];
                        
                        $filename = time() . '_' . $index . '_' . $key . '.' . $file->getClientOriginalExtension();
                        $file->move(public_path('uploads/products/sub_items/'), $filename);
                        $image = $filename;
                    }
                    SubItem::create([
                        'sub_item_category_id' => $category->id,
                        'sub_items_title'     => $request->manual_extra_title[$index][$key],
                        'sub_items_price'      => $request->manual_extra_price[$index][$key],
                        'sub_items_image'     => $image ?? "",
                        'product_id'           => $product->id,
                    ]);
                }
            }
        }

        notify()->success('Product created successfully');
        return redirect()->route('admin.products.index');
    }
    public function edit($id)
    {
        $data["product"] = Product::with('subItemCategory','subItemCategory.subItem')->find($id);
        $data["categories"] = Category::whereStatus(1)->get();
        return view("admin.products.edit", $data);
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            notify()->error('Please fill all the required fields');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            if ($product->image) {
                unlink(public_path('uploads/products/' . $product->image));
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products/'), $filename);
            $product->image = $filename;
        }
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status ?? 1;
        $product->save();
        notify()->success('Product updated successfully');
        return redirect()->route('admin.products.index');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            unlink(public_path('uploads/products/' . $product->image));
        }
        $product->delete();
        notify()->success('Product deleted successfully');
        return redirect()->route('admin.products.index');
    }

    public function status($id)
    {
        $product = Product::findOrFail($id);
        $product->status = $product->status == 1 ? 0 : 1;
        $product->save();
        notify()->success('Product status updated successfully');
        return response()->json(['success' => true]);
    }
}
