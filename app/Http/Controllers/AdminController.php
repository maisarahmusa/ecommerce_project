<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;

        $category->save();

        toastr()->timeOut(10000)->closeButton()->success("Category Added Successfully.");

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);

        $data->category_name = $request->category_name;

        $data->save();

        toastr()->timeOut(10000)->closeButton()->success("Category Updated Successfully.");

        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = Category::all();

        return view('admin.add_product', compact('category'));
    }

    public function add_product_detail(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $image = $request->image;

        if($image){
            $image_name = time().'.'.$image->
            getClientOriginalExtension();

            $request->image->move('products', $image_name);

            $product->image = $image_name;
        }

        $product->save();

        toastr()->timeOut(10000)->closeButton()->success("Product Added Successfully.");

        return redirect()->back();

    }

    public function product_list()
    {
        $productList = Product::with('category')->get();

        //dd($productList);
        return view('admin.product_list', compact('productList'));
    }

}
