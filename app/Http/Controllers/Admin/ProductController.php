<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Image;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('id', '!=', 1)->get();
        $brands = Brand::all();
        return view('backend.product.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_data = array(
            'product_name' => $request->product_name,
            'product_sku' => $request->product_sku,
            'product_category_id' => $request->cat_id,
            'product_brand_id' => $request->brand_id,
            'homepage_priority' => 0,
            'product_price' => $request->price,
            'product_description' => $request->desc,
        );
        $product = Product::create($product_data);

        $file = $request->file('image');
        $name = $file->getClientOriginalName();

        if ($file->move('assets/images', $name)) {
            $image_data = array(
                'product_id' => $product->id,
                'image_url' => $name,
                'featured_image' => 1,
            );
            Image::create($image_data);
        } else {
            echo "Error Adding Product";
        }
        return redirect(route('admin.product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('id', '!=', 1)->get();
        $brands = Brand::all();
        return view('backend.product.edit', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, $id)
    {
        $success = false;

        $image = Image::where('product_id', '=', $id)->first();
        $product = Product::findOrFail($id);

        $product_data = array(
            'product_name' => $request->product_name,
            'product_sku' => $request->product_sku,
            'product_category_id' => $request->cat_id,
            'product_brand_id' => $request->brand_id,
            'homepage_priority' => 0,
            'product_price' => $request->price,
            'product_description' => $request->desc,
        );

        if ($product->update($product_data)) {
            $success = true;
            $file = $request->file('image');
            if ($file){
                $name = $file->getClientOriginalName();
                $image_data = array(
                    'product_id' => $id,
                    'image_url' => $name,
                    'featured_image' => 1,
                );
                if ($file->move('assets/images', $name)) {
                    if ($image){
                        File::delete('assets/images/' . $image->image_url);
                        if ($image->update($image_data)){
                            $success = true;
                        } else {
                            $success = false;
                        }
                    } else {
                        Image::create($image_data);
                    }
                }
            }
            return redirect(route('admin.product.index'));
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
