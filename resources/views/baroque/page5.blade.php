@extends('layouts.master')


@section('content')
    <!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .drp:hover{
            background-color: grey;
            color: white;
        }
        .drp{
            cursor: pointer;
        }
        .pointer{
            cursor: pointer;
        }
        .move{
            padding: 10px;
        }
        .move:hover{
            background: red;
            border-radius: 10px;
            padding: 5px 10px;
            text-decoration: none;
            transition: .3s;
        }
        .move1{
            margin-top: -20px;
        }
    </style>
    <title> AVINER - Baroque</title>
    <link rel="stylesheet" type="text/css" href="css\avi_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


<section class="container mt-3">
    <a href="#" style="text-decoration: none;" class="text-dark">Home</a>
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
    </svg>
    <span> Information</span>
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
    </svg>
    <span class="text-secondary"> Shipping</span>
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
    </svg>
    <span>Payment</span>
    <hr>
</section>

<section class=" container navbar-expand-lg navbar-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#imgcontent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span style="width: 100%;">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
      </svg>
      <span>Show oder summary</span>
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
      </svg>
      <span class="text-right">Rs.5,840.00</span>
    </span>
    </button>
    @php
        $total=0;
    @endphp


    @if(session('cart'))
        @foreach(session('cart') as $id => $product)
            @php
                $sub_total=$product['price']* $product['quantity'];
                $total +=$sub_total;
            @endphp
            <div class="collapse navbar-collapse flex-column col-12 col-sm-12 col-md-12 col-lg-5 bg-light w-100" id="imgcontent" style="float: right;">

        <div class="mr-auto" style="flex-direction: row;">

            <img src="/uploads/products/images/{{$product['image']}}" class="mt-4" style="float: left;">

            <p class="mt-5 pl-3" style="float: left;"><b>{{$product['title']}}</b><br>
                Unstitched / Default</p>
            <span style="float: right;" class="mt-5 pl-4 ml-5">Rs.{{$product['price']}}.00</span>
        </div>
        <section class="input-group pt-4">
            <input type="text" class="form-control" placeholder="Gift card or discount code" aria-label="" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn btn-outline-dark" type="button">Apply</button>
            </div>
        </section>
        <hr class="bg-dark">
        <section class="flex-row container pb-2">
            <p style="float: left;" class="mr-auto">Subtotal</p><br>
            <p style="float: right;" class="ml-auto">Rs.{{$total}}.00</p><br>
            <span style="float: left;">Shipping</span><br>
            <p style="float: right;">Calculated at next step</p>
        </section>
        <hr class="bg-dark">

        <section class="container flex-row" style="margin-top: -15px;">
            <p style="float: left;" class="mr-auto">Total</p>
            <h2 style="float: right;" class="ml-auto">Rs.{{$total}}.00</h2>
        </section>
        @endforeach
        @endif
    </div>

</section>

<section class="container pt-3">

    <span style="font-size: 20px;">Contact information</span>
    <span style="float: right;" class="pt-2 pb-4">Already have an account?<a href="#" class="text-dark pr-4" style="text-decoration: none;">log in</a></span>
    <form action="{{route('order.store')}}" method="post">
        @csrf
    <input type="email" class="col-12 col-sm-12 col-md-12 col-lg-6 p-2" placeholder="Email" name="email"><br>
    <div class="mt-2">
        <input type="checkbox" class="mr-2">Keep me up to date on news and exclusive offers
    </div>

    <p style="font-size: 20px;" class="mt-5">Shipping address</p>
    <input type="text" class="col-12 col-sm-12 col-md-12 col-lg-3 p-2" placeholder="First name" name="fname">
    <input type="text" class="col-12 col-sm-12 col-md-12 col-lg-3 p-2 mt-2" placeholder="Last name" name="lname">
    <input type="text" class="col-12 col-sm-12 col-md-12 col-lg-6 p-2 mt-2" placeholder="Address" name="address">
    <input type="text" class="col-12 col-sm-12 col-md-12 col-lg-6 p-2 mt-2" placeholder="Apartment, suite, etc. (optional)">
    <input type="text" class="col-12 col-sm-12 col-md-12 col-lg-6 p-2 mt-2" placeholder="city" name="city">
    <input type="text" class="col-12 col-sm-12 col-md-12 col-lg-3 p-2 mt-2" placeholder="Country/Region" name="country">
    <input type="text" class="col-12 col-sm-12 col-md-12 col-lg-3 p-2 mt-2" placeholder="Postal code"name="postal_code">
    <input type="number" class="col-12 col-sm-12 col-md-12 col-lg-6 p-2 mt-2" placeholder="Phone" name="phone">
    <div class="mt-2">
        <input type="checkbox" class="mr-2 mb-5">Save this information for next time
    </div>

    <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#staticBackdrop">Continue to shipping</button>
    </form>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-dark text" id="staticBackdropLabel">Thanks so much for shopping our product, You will get your product soon</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
{{--                <div class="modal-body">--}}
{{--                    <h5 class="text-dark text-center">ANVIER - Unstitched / Default</h5>--}}
{{--                    <img src="//cdn.shopify.com/s/files/1/2277/5269/products/ht_1_150x150.jpg?v=1597923532" style="margin-left: 38%;">--}}
{{--                </div>--}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark btn-block pt-3 pb-3" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>
    <hr class="bg-dark">
</section>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>
@endsection
