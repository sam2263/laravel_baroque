@extends('layouts.master')
@section('content')
<div class="container">
<!--Section: Block Content-->
<section class="mb-5">
    @foreach($cart as $chart)

    <div class="row">

        <div class="col-md-6 mb-4 mb-md-0">
                <div class="row product-gallery mx-1">
                    <div class="col-9 mb-0">
                        <figure class="view overlay rounded z-depth-1 main-img" id="magnifying_area" style="max-width: 100%;min-width: 100%;height: 650px;overflow: hidden;border:3px solid #fff;position: relative;">
                                <img src="/uploads/products/images/{{$chart->image1}}"
                                     class="img-fluid z-depth-1 border" id="main_pic" style="position: absolute;left:50%;top:40%;
                                      transform: translate(-50%,-50%);pointer-events: none;">

                        </figure>
                    </div>
{{--@php if (!empty($chart->image1)){ @endphp--}}
                    <div class="col btn">
                        <div class="view overlay rounded z-depth-1 gallery-item" onclick="document.getElementById('main_pic').src='/uploads/products/images/{{$chart->image1}}'">
{{--                            <img src="/uploads/products/images/{{$chart->image1}}"--}}
                            <img src="/uploads/products/images/{{$chart->image1}}"
                                 class="img-fluid" style="height:100px;">
                        </div>

{{--                    @php } else{@endphp--}}
{{--                    <h3>Image not found</h3>--}}
{{--                    @php } @endphp--}}


                                            <div class="col btn pt-4">
                            <div class="view overlay rounded z-depth-1 gallery-item" onclick="document.getElementById('main_pic').src='/uploads/products/images/{{$chart->image2}}'">
                                <img src="/uploads/products/images/{{$chart->image2}}"
                                     class="img-fluid" style="height:100px;">
                            </div>
                        </div>

                        <div class="col btn pt-4">
                            <div class="view overlay rounded z-depth-1 gallery-item" onclick="document.getElementById('main_pic').src='/uploads/products/images/{{$chart->image3}}'">
                                <img src="/uploads/products/images/{{$chart->image3}}"
                                     class="img-fluid" style="height:100px;">
                            </div>
                        </div>
                        <div class="col btn pt-4">
                            <div class="view overlay rounded z-depth-1 gallery-item" onclick="document.getElementById('main_pic').src='/uploads/products/images/{{$chart->image4}}'">
                                <img src="/uploads/products/images/{{$chart->image4}}"
                                     class="img-fluid" style="height:100px;">
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        <div class="col-md-6" style="border: 1px solid grey;">
            <form action="{{url('add')}}" method="POST" class="pl-4 mt-4" enctype="multipart/form-data">
            @CSRF
                @method('PUT')

           <h5>{{$chart->title}}</h5>
                <p><span class="mr-1"><strong>Rs{{$chart->price}}/-</strong></span></p>
            <ul class="rating pl-3">
                <li>
                    Type
                </li>
                <li>
                    Addon
                </li>
                <li>
                    {{$chart->status}}
                </li>

            </ul>

                <div class="table-responsive mb-2">
                   <table class="table table-sm table-borderless">
                        <tbody>
                        <tr>
                            <td class=" w-25"><b>Quantity</b></td>
                        </tr>
                        <tr>
                            <td class="pl-0">
                                <div class="def-number-input number-input safari_only mb-0">
                                    <a onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                            class="btn-dark btn">-</a>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                    <a onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                            class="btn btn-dark">+</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Select size</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mt-1">
                                    <div class="form-check form-check-inline pl-0">
                                        <input type="radio" class="form-check-input" id="small" name="materialExampleRadios"
                                               checked>
                                        <label class="form-check-label small text-uppercase card-link-secondary"
                                               for="small">Small</label>
                                    </div>
                                    <div class="form-check form-check-inline pl-0">
                                        <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                                        <label class="form-check-label small text-uppercase card-link-secondary"
                                               for="medium">Medium</label>
                                    </div>
                                    <div class="form-check form-check-inline pl-0">
                                        <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                                        <label class="form-check-label small text-uppercase card-link-secondary"
                                               for="large">Large</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{route('add-cart',[$chart->id])}}" class="btn btn-dark btn-md mb-2 w-100">Add to cart</a>

            <div class="table-responsive pt-4">
                <table class="table table-sm table-borderless mb-0">
                    <tbody>
                    <tr>
                        <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                        <td>Pakistan, Lahore</td>
                    </tr>
                    </tbody>
                </table>
                <p class="pt-4">{{$chart->description}}</p>

            </div>
                <hr>
            </form>
        </div>
    </div>
    @endforeach
</section>
    <hr>
<!--Section: Block Content-->
    <h5 class="text-center">YOU MAY ALSO LIKE</h5>

    <div class="row">
        <div class="col-12 col-lg-4 col-xl-4 col-md-">
            <a href="{{url('sale')}}">
            <img src="http://cdn.shopify.com/s/files/1/2277/5269/products/2F6A7423_600x_crop_center.jpg?v=1603540854" class="img-fluid pt-5   " alt="...">
            </a>
                <h6 class="text-center pt-3 c">EVER NIGHT</h6>
            <a href="{{url('sale')}}" class="a">Rs.1,190.00</a>
        </div>
        <div class="col-12 col-lg-4 col-xl-4 col-md-">
            <a href="{{url('sale')}}">
            <img src="http://cdn.shopify.com/s/files/1/2277/5269/products/jhhb_600x_crop_center.jpg?v=1599718426" class="img-fluid pt-5   " alt="...">
            </a>
                <h6 class="text-center pt-3 c">SPRING BLING</h6>
            <a href="{{url('sale')}}" class="a">Rs.7,490.00</a>
        </div>
        <div class="col-12 col-lg-4 col-xl-4 col-md-4">
            <a href="{{url('sale')}}">
            <img src="http://cdn.shopify.com/s/files/1/2277/5269/products/2F6A7312_600x_crop_center.jpg?v=1603540647" class="img-fluid pt-5" alt="...">
            </a>
                <h6 class="text-center pt-3 c">TANGY PINK</h6>
            <a href="{{url('sale')}}" class="a">Rs.1,390.00</a>
        </div>
    </div>

</div>
<script>
    var margnifying_area= document.getElementById("magnifying_area");
    var main_pic= document.getElementById("main_pic");
    margnifying_area.addEventListener("mousemove", function (event){

        clientX=event.clientX - margnifying_area.offsetLeft
        clientY=event.clientY - margnifying_area.offsetTop

        mWidth= margnifying_area.offsetWidth
        mHeight= margnifying_area.offsetHeight

        clientX= clientX / mWidth * 60
        clientY=clientY / mHeight * 100

        main_pic.style.transform='translate(-'+clientX+'%,-'+clientY+'%) scale(3)'
    });
    margnifying_area.addEventListener("mouseleave", function (){
        main_pic.style.transform='translate(-50%,-50%) scale(1)'
    });
</script>

@endsection
