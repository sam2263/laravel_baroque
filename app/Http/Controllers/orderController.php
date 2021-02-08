<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order= new Order();
        $orders=Order::all();
        return view('admin.order',compact('orders'));
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
        $order = new Order();

        $order->email = $request->email;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->postal_code = $request->postal_code;
        $order->country = $request->country;
        $order->phone = $request->phone;

        $order->save();
        return redirect('/check');

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
    public function check()
    {
        return view('baroque.page5');
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
                    'image'=>$product->image_url
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
}
