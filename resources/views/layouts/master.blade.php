
<html>
<head>
    <title>Baroque</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha
    384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2277/5269/t/36/assets/favicon.png?v=10340059679789340820
    " type="image/png"/>
</head>
<body>
<header>
    <div class="coustom_top">
        <span>FREE SHIPPING WITHIN PAKISTAN.</span>
        <span>HELPLINE : +92-340-4502225</span>
    </div>
    <!--    nav bar start from here-->
    <div>

        <nav class="navbar navbar-expand-md navbar-light bg-light p-4">
            <a href="{{url('/')}}" class="navbar-brand">
                <img src="https://cdn.shopify.com/s/files/1/2277/5269/t/36/assets/baroque_logo-01.svg?v=3325848057508312
                822" height="35px" alt="baroque logo">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('sale')}}"><span class="change pl-3 pr-3">SALE</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('sale')}}" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="change pl-3 pr-3">COLLECTION</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item c" href="{{url('sale')}}">CHANTELLE</a>
                            <a class="dropdown-item c" href="{{url('sale')}}">FUCHSIA</a>
                            <a class="dropdown-item c" href="{{url('sale')}}">SWISS</a>
                            <a class="dropdown-item c" href="{{url('sale')}}">LAWN</a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('sale')}}"><span class="change pl-3 pr-3">VELVET</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('sale')}}"><span class="change pl-3 pr-3">UNSTITCHED</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('sale')}}"><span class="change pl-3 pr-3">PRET</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('sale')}}"><span class="change pl-3 pr-3">BOTTOMS</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('sale')}}" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="change pl-3 pr-3">SHAWLS</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{url('sale')}}">SHAWL ADDONS</a>

                        </div>
                    </li>
                </ul>
                <div class="navbar-nav ml-auto">

                    <img src="http://cdn.shopify.com/s/files/1/2277/5269/t/35/assets/search.png?v=2598788294220288612"
                         class="img-fulid">
                    <select style="border: none">
                        <option>PKR</option>
                        <option>EUR</option>
                        <option>USD</option>
                        <option>GBP</option>
                        <option>CAD</option>
                    </select>
                    <img src="http://cdn.shopify.com/s/files/1/2277/5269/t/35/assets/account.png?v=7317479392246297238"
                         class="img-fluid">
                    <img
                        src="http://cdn.shopify.com/s/files/1/2277/5269/t/35/assets/custom-cart-logo.png?v=8505433968402341402"
                        class="img-fluid"><span>0</span>

                </div>
            </div>
        </nav>

    </div>
    <hr>
</header>

@yield('content')

<section class="pt-5 container">
    <h3 class="text-center" style="font-size: 18px"><b>SIGN UP FOR OUR NEWSLETTER</b></h3>
    <div class="input-group mb-3 pt-5">
        <input type="email" class="form-control in" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary bg-light" type="button" id="button-addon2">Subscribe</button>
        </div>
    </div>
    <div class="row pt-5 mx-auto">
        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
            <h6 class="fth">ABOUT US</h6>
            <li class="ft">History</li>
            <li class="ft">Careers</li>
            <li class="ft">LookBook</li>
        </div>
        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
            <h6 class="fth">SHOP WITH US</h6>
            <li class="ft">Privicy Policy</li>
            <li class="ft">Terms and Conditions</li>
        </div>
        <div class="col-12 col-md-4 col-lg-4 col-xl-4">
            <h6 class="fth">COUSTOMER SERVICE</h6>
            <li class="ft">Contact Us</li>
            <li class="ft">Delivery</li>
            <li class="ft">Returns</li>
            <li class="ft">FAQ</li>
        </div>

    </div>
    <div class="text-center">
        <img src="http://cdn.shopify.com/s/files/1/2277/5269/t/35/assets/visa-icon.svg?v=808579592377062436"
             height="35px">
        <img src="http://cdn.shopify.com/s/files/1/2277/5269/t/35/assets/mastercard-icon.svg?v=13912401171445626558"
             height="35px">
        <img src="http://cdn.shopify.com/s/files/1/2277/5269/t/35/assets/ssl.png?v=13384401467341871361" height="35px">
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>
