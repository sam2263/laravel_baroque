@extends('layouts.master')


@section('content')
    <section class="container-fluid">
        <a href="{{url('sale')}}" target="_blank">
            <img
                src="http://cdn.shopify.com/s/files/1/2277/5269/files/main_slider_desktop_84e91952-1c91-4dd6-9193-ee6b3e5848df.jpg?v=1606561174"
                class="img-fluid w-100" style="margin: 0;padding: 0;height: 95%; ">
        </a>
    </section>
    <br>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-12 col-lg-4 col-xl-4 pt-5">
                <img src="http://cdn.shopify.com/s/files/1/2277/5269/files/Mask_Group.png?v=1593280728"
                     class="img-fluid po">
                <h3 class="h33">CUSTOMIZED STITCHING</h3>
                <p class="cp">You can use perfect size to be stitched to your perfect fit by using our custom
                    stitching.</p>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 pt-5">
                <img src="http://cdn.shopify.com/s/files/1/2277/5269/files/shipment-icon.png?v=1539256230"
                     class="img-fluid po">
                <h3 class="h33">CUSTOMIZED STITCHING</h3>
                <p class="cp">You can use perfect size to be stitched to your perfect fit by using our custom
                    stitching.</p>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 pt-5">
                <img src="http://cdn.shopify.com/s/files/1/2277/5269/files/stiching-icon.png?v=1539255938"
                     class="po img-fluid">
                <h3 class="h33">CUSTOMIZED STITCHING</h3>
                <p class="cp">You can use perfect size to be stitched to your perfect fit by using our custom
                    stitching.</p>
            </div>

        </div>
    </section>
    <section class="container">



        <div class="row">
            @foreach($categories as $cat)

            <div class="col-12 col-lg-6 col-xl-6 col-md-6">
                <a href="products/{{$cat->id}}">
                <img src="/uploads/categories/{{$cat->image_url}}" class="img-fluid pt-5" alt="...">
                </a>
                <h2 class="text-center pt-3 c">{{$cat->title}}</h2>
                <a href="products/{{$cat->id}}" class="a"style="margin-left:230px; "  >SHOP NOW</a>
            </div>
            @endforeach
        </div>
    </section>

    <section class="pt-5">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="text-center">FREE SHIPPING</h1>
                <p class="lead text-center"><b>*ON ALL INTERNATIONAL ORDER ABOVE PKR 60,000/-</b></p>
            </div>
        </div>
    </section>
@endsection
