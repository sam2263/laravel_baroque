@extends('layouts.master')
@section('content')


    <div class="container-fluid position-absolute pt-5 pl-5 ml-5">
        <div class="row">
            <div class="col">
                <!-- Section: Size -->

                <section class="mb-4" filter="size">

                    <a
                        class="text-muted p-0 text-decoration-none"
                        data-toggle="collapse"
                        href="#collapseExample"
                        aria-expanded="false"
                        aria-controls="collapseExample"
                    >
                        <h6 class="font-weight-bold mb-3">Size</h6>
                    </a>
                    <div class="collapse pt-3" id="collapseExample">
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="42"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id="42"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for="42"
                            >S</label
                            >
                        </div>
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="44"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id="44"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for="44"
                            >M</label
                            >
                        </div>
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="46"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id="46"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for="46"
                            >L</label
                            >
                        </div>
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="50"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id="50"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for="50"
                            >XL</label
                            >
                        </div>
                    </div>
                </section>

                <!-- Section: Size -->
                <!-- Section: piece -->

                <section class="mb-4" filter="size">

                    <a
                        class="text-muted p-0 text-decoration-none"
                        data-toggle="collapse"
                        href="#collapseExampl"
                        aria-expanded="false"
                        aria-controls="collapseExample"
                    >
                        <h6 class="font-weight-bold mb-3">PIECE</h6>
                    </a>
                    <div class="collapse pt-3" id="collapseExampl">
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="42"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id=" thre_piece"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for=" thre_piece">3 Piece</label>
                        </div>
                    </div>
                </section>

                <!-- Section: piece -->
                <!-- Section: fabric type -->

                <section class="mb-4" filter="size">

                    <a
                        class="text-muted p-0 text-decoration-none"
                        data-toggle="collapse"
                        href="#collapseExamp"
                        aria-expanded="false"
                        aria-controls="collapseExample"
                    >
                        <h6 class="font-weight-bold mb-3">FABRIC TYPE</h6>
                    </a>
                    <div class="collapse pt-3" id="collapseExamp">
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="42"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id="fabric_type"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for="fabric_type"
                            >Chiffon</label
                            >
                        </div>
                    </div>
                </section>

                <!-- Section: fabric type -->
                <!-- Section: Size -->

                <section class="mb-4" filter="size">

                    <a
                        class="text-muted p-0 text-decoration-none"
                        data-toggle="collapse"
                        href="#collapseExa"
                        aria-expanded="false"
                        aria-controls="collapseExample"
                    >
                        <h6 class="font-weight-bold mb-3">PRICE</h6>
                    </a>
                    <div class="collapse pt-3" id="collapseExa">
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="42"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id="80_99"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for="80_99"
                            >Rs 80000 - Rs 9999</label
                            >
                        </div>
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="44"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id="10-11"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for="10-11"
                            >Rs 10000 - Rs 11999</label
                            >
                        </div>
                        <div class="form-check pl-0 mb-3">
                            <input
                                size="46"
                                type="checkbox"
                                class="filter-option form-check-input filled-in"
                                id="12-a"
                            />
                            <label
                                class="form-check-label small text-uppercase card-link-secondary"
                                for="12-a"
                            >Rs 12000 - Above</label
                            >
                        </div>
                    </div>
                </section>

                <!-- Section: Price -->

            </div>
        </div>
    </div>



    <div class="container">

        <div class="col ml-5 pl-5">

            <div class="row">
                @foreach($products as $product)
                <div class="col-12 col-lg-4 col-xl-4 col-md-">
                    <a href="/cart/{{$product->id}}">
                        <img src="/uploads/products/{{$product->image_url}}" class="img-fluid pt-5   " alt="...">
                    </a>
                    <h6 class="text-center pt-3 c">{{$product->title}}</h6>
                    <a href="/cart/{{$product->id}}" class="a pl-5" style="color: grey;margin-left: 65px;font-size: 18px">Rs.{{$product->regular_price}}/-</a>

                </div>
                @endforeach

            </div>


        </div>
    </div>
@endsection
