<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSubItemCategory;
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
        // $data['products'] = Product::with([
        //     'category:id,name',
        //     'productSubItemCategory' => function ($query) {
        //         $query->select('id', 'product_id', 'sub_item_category_id', 'is_required', 'selection_type');
        //     },
        //     'productSubItemCategory.subItemCategory' => function ($query) {
        //         $query->select('id', 'name', 'image');
        //     },
        //     'productSubItemCategory.subItemCategory.subItem' => function ($query) {
        //         $query->select('id', 'sub_item_category_id', 'name', 'price', 'image');
        //     },
        // ])->get();
        // return $data;
        return view("admin.products.list", $data);
    }


    public function create()
    {
        $data["categories"] = Category::whereStatus(1)->get();
        $data["subCategories"] = SubItemCategory::whereStatus(1)->get();
        return view("admin.products.create", $data);
    }

    public function store(Request $request)
    {
        // return $request->all();
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

        if ($request->has('sub_item_category_id')) {

            foreach ($request->sub_item_category_id as $key => $subItemCategoryId) {
                $productSubItemCategory =  ProductSubItemCategory::create(
                    [
                        'product_id' => $product->id,
                        'sub_item_category_id' => $subItemCategoryId,
                        'selection_type' => $request->selection_type[$key],
                        'is_required' => $request->is_required[$key],
                        'min_qty' => $request->min_qty[$key]
                    ]
                );
            };
        };



        notify()->success('Product created successfully');
        return redirect()->route('admin.products.index');
    }
    public function edit($id)
    {
        $data["product"] = Product::with("category", "productSubItemCategory.subItemCategory")->find($id);
        // Get all active sub categories except ones already used by this product
        $data["subCategories"] = SubItemCategory::whereStatus(1)
            ->whereNotIn('id', $data["product"]->productSubItemCategory->pluck('sub_item_category_id'))
            ->get();
        // return $data;
        $data["categories"] = Category::whereStatus(1)->get();

        return view("admin.products.edit", $data);
    }


    public function update(Request $request, $id)
    {
        // return $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            notify()->error('Please fill all the required fields');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        
        // Delete existing product sub item categories
        ProductSubItemCategory::where('product_id', $id)->delete();

        // Create new product sub item categories
        if ($request->has('sub_item_category_id')) {
            foreach ($request->sub_item_category_id as $key => $subItemCategoryId) {
                ProductSubItemCategory::create([
                    'product_id' => $id,
                    'sub_item_category_id' => $subItemCategoryId,
                    'selection_type' => $request->selection_type[$key],
                    'is_required' => $request->is_required[$key],
                    'min_qty' => $request->min_qty[$key]
                ]);
            }
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
        // Delete all product sub item categories
        ProductSubItemCategory::where('product_id', $id)->delete();
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
