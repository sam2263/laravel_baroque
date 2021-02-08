@extends('layouts.master')
@section('content')
{{--<html>--}}
{{--<head>--}}
{{--    <title>Baroque</title>--}}
{{--    <link rel="stylesheet" href="style.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha--}}
{{--    384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">--}}
{{--    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2277/5269/t/36/assets/favicon.png?v=10340059679789340820--}}
{{--    " type="image/png" />--}}
{{--    <script src="jquery.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>--}}

{{--</head>--}}
{{--<body>--}}
<div class="container">

    <!--Section: Block Content-->
    <section>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-7">

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4 wish-list">

                        <h5 class="mb-4">Cart (<span>2</span> items)</h5>
                            @php
                            $total=0;
                            @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $product)
{{--                                @php--}}
{{--                                    $sub_total=$product['price']* $product['quantity'];--}}
{{--                                   $total +=$sub_total;--}}
{{--                                @endphp--}}
                                <div class="row mb-4">
                                    <div class="col-md-5 col-lg-3 col-xl-3">
                                        <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                            <img class="img-fluid w-75"
                                                 src="uploads/products/{{$product['image']}}" alt="{{$product['title']}}">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-9 col-xl-9">
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h5>{{$product['title']}}</h5>
                                                </div>
                                                <div>
                                                    <div class="def-number-input number-input safari_only mb-0 w-100">
                                                        <button class="minus decrease btn-dark btn">-</button>
                                                        <input class="quantity  p-1 pb-2" min="0" id="quantity" value="{{$product['quantity']}}" type="number">
                                                        <button class="plus increase btn btn-dark">+</button>
                                                    </div>
                                                    <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                                        (Note, 1 piece)
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="{{route('remove',[$id])}}" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                            class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                                </div>
                                                <p class="mb-0"><strong id="summary">{{$product['price']}}</strong><strong>/-</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <hr class="mb-4">



                            @endforeach

                        @endif
                        <div class="btn btn-dark"><a href="{{url('/')}}" class="text-white">Continue Shoping</a></div>
                    </div>

                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-4 ml-5 mt-5" style="border: 1px solid grey">

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-5 mt-3">

                        <h5 class="mb-3">The total amount of</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Sub Total
                                <span id="temp">{{$total}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>Pakistan, Lahore</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>The total amount of</strong>
                                    <strong>
                                        <p class="mb-0">(including VAT)</p>
                                    </strong>
                                </div>
                                <p class="total-price"><strong><span id="total">{{$total}}</span><strong>/-</strong></strong></p>
                            </li>
                        </ul>

                        <a href="{{url('check')}}" class="btn btn-dark btn-block">go to checkout</a>

                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4">

                        <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                           aria-expanded="false" aria-controls="collapseExample">
                            Add a discount code (optional)
                            <span><i class="fas fa-chevron-down pt-1"></i></span>
                        </a>

                        <div class="collapse" id="collapseExample">
                            <div class="mt-3">
                                <div class="md-form md-outline mb-0">
                                    <input type="text" id="discount-code" class="form-control font-weight-light"
                                           placeholder="Enter discount code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Block Content-->
<script>
document.querySelector(".minus").setAttribute("disabled","disabled");
var valueCount

var price=document.getElementById("summary").innerText;
function pricetotal(){
    var total= valueCount * price;
    document.getElementById("total").innerText=total;
    document.getElementById("temp").innerText=total;
}

document.querySelector(".plus").addEventListener("click",function (){
    valueCount=document.getElementById("quantity").value;
    valueCount++;
    document.getElementById("quantity").value=valueCount;
    if (valueCount>1)
    {
        document.querySelector(".minus").removeAttribute("disabled");
        document.querySelector(".minus").classList.remove("disabled");
    }
    pricetotal();
})
document.querySelector(".minus").addEventListener("click",function (){
    valueCount=document.getElementById("quantity").value;
    valueCount--;
    document.getElementById("quantity").value=valueCount;
    if (valueCount==1)
    {
        document.querySelector(".minus").setAttribute("disabled","disabled");
    }
    pricetotal();
})

</script>




</div>



{{--</body>--}}
{{--</html>--}}
@endsection
