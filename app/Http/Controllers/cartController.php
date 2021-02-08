<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allimages= Image::all();
        $allproducts=Product::all();
        return view('admin.cart',compact('allimages','allproducts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = new Image();
        $img = "";
        if ($request->hasfile('file')){
            $images = $request->file('file');
//            foreach ($images as $image)
//            {
                $image_ext = $images->getClientOriginalExtension();
                $image = "img_".rand(123456,999999). "." . $image_ext;
                $destination_path = public_path('/uploads/products/images');
                $images->move($destination_path, $image);
//                $img.=$imagee.',';
            }





        if ($request->hasfile('file2')){
            $image_array2 = $request->file('file2');
            $image_ext2 = $image_array2->getClientOriginalExtension();
            $image2 = "img_".rand(123456,999999). "." . $image_ext2;
            $destination_path = public_path('/uploads/products/images');
            $image_array2->move($destination_path, $image2);
        }
        if ($request->hasfile('file3')){
            $image_array3 = $request->file('file3');
            $image_ext3 = $image_array3->getClientOriginalExtension();
            $image3 = "img_".rand(123456,999999). "." . $image_ext3;
            $destination_path = public_path('/uploads/products/images');
            $image_array3->move($destination_path, $image3);
        }
        if ($request->hasfile('file4')){
            $image_array4 = $request->file('file4');
            $image_ext4 = $image_array4->getClientOriginalExtension();
            $image4 = "img_".rand(123456,999999). "." . $image_ext4;
            $destination_path = public_path('/uploads/products/images');
            $image_array4->move($destination_path, $image4);
        }

        $cart->title = $request->title;
        $cart->price = $request->price;
        $cart->image1 = $image;
        $cart->image2 = $image2;
        $cart->image3 = $image3;
        $cart->image4 = $image4;
        $cart->qty = $request->qty;
        $cart->size = $request->size;
        $cart->status = $request->status;
        $cart->product_id = $request->products;
        $cart->save();
        return redirect('/cart');

        echo "your data inserted into database";



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
        //
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
        //
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
    public function CartByCatId($id)
    {

//        echo "hey";

        $cart=DB::table('products')
            ->join('images','products.id','=','images.product_id')
            ->where('product_id','=',$id)
            ->get();
//        $cart=DB::table('images')->where('product_id','=',$id)->get();
//
//        print_r($cart);
        return view('baroque.chart')->with('cart',$cart);
    }
}
