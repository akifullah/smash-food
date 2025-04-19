<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.index");
    }

    // ABOUT
    public function about()
    {
        return view("frontend.about");
    }
    // CONTACT
    public function contact()
    {
        return view("frontend.contact");
    }

    // SHOP 
    public function category()
    {
        $data["categories"] = Category::whereStatus(1)->get();
        // return $data;
        return view("frontend.category", $data);
    }

    public function categoryItems($id)
    {
        $data["category"] = Category::whereStatus(1)->select("id", "name")->get();
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
        $data["items"] = Product::with([
            "productSubItemCategory" => function ($query) {
                $query->select("id", "product_id", "sub_item_category_id", "is_required", "selection_type", "min_qty");
            },
            "productSubItemCategory.subItemCategory" => function ($query) {
                $query->select("id", "name", "image");
            },
            "productSubItemCategory.subItemCategory.subItem" => function ($query) {
                $query->select("id", "sub_item_category_id", "name", "price", "image");
            },

        ])->where("category_id", $id)->get();
        return view("frontend.category-items", $data);
    }
}
