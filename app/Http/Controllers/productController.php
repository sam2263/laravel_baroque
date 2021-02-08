<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategories= Category::all();
        $product=Product::all();
        return view('admin.product',compact('allCategories','product'));
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
    public function store(Request $req)
    {

        $product = new Product();
        $img = "";
        if ($req->hasfile('file')){
            $image_array = $req->file('file');
            $image_ext = $image_array->getClientOriginalExtension();
            $image = "img_".rand(123456,999999). "." . $image_ext;
            $destination_path = public_path('/uploads/products/');
            $image_array->move($destination_path, $image);
        }
        $product->title = $req->title;
        $product->regular_price = $req->rprice;
        $product->sale_price = $req->sprice;
        $product->purchase_price = $req->pprice;
        $product->image_url = $image;
        $product->description = $req->description;
        $product->cat_id = $req->categories;
        $product->save();
        return redirect('/product');

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
    public function productByCatId($id)
    {
//        echo "hey";
        $products= DB::table('products')->where('cat_id','=',$id)->get();

//        print_r($products);
        return view('baroque.sale')->with('products',$products);
    }
    public function cart()
    {
        return view('baroque.add');
    }


    public function addToCart(Product $product)
    {
        $cart=session()->get('cart');
        if (!$cart)
        {
            $cart=[
                    $product->id=>[
                        'title'=>$product->title,
                        'quantity' =>1,
                        'price'=>$product->regular_price,
                        'image'=>$product->image_url,
                    ]

            ];
                    session()->put('cart',$cart);
            return redirect()->route('add')->with('success'."Added to cart");
        }
        if (isset($cart[$product->id]))
        {
            $cart[$product->id]['quantity']++;
            session()->put('cart',$cart);
            return redirect()->route('add')->with('success'."Added to cart");
        }
        $cart[$product->id]=[
            'title'=>$product->title,
            'quantity' =>1,
            'price'=>$product->regular_price,
            'image'=>$product->image_url,
        ];
        session()->put('cart',$cart);
        return redirect()->route('add')->with('success'."Added to cart");
    }
    public function removeFromCart($id)
    {
        $cart=session()->get('cart');
        if (isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart',$cart);

        }
        return redirect()->back()->with('success'."Remove from cart");

    }


}
