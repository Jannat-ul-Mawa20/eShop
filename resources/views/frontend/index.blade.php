@extends('layouts.front')

@section('title')
Welcome to Jewelery Palace
@endsection

@section('content')
@include('layouts.inc.slider')


<div class="py-5">
    <div class="container">
        <div class="row gy-3">
            <h1 class="text-center">FEATURED PRODUCTS</h1>
            {{-- <div class="owl-carousel featured-carousel owl-theme"> --}}
                @foreach ($featured_products as $prod)
                <div class="col-md-3">
                    <a href="{{ url('category/'.$prod->category->slug.'/'.$prod->slug) }}">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" class="card-img" style="height:280px;"
                            alt="product image">
                        <div class="card-body">
                            <h5>{{ $prod->name }}</h5>
                            <span class="float-start">{{ $prod-> selling_price}}</span>
                            <span class="float-end"><s>{{ $prod-> original_price}}</s></span>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            {{-- </div> --}}
        </div>
    </div>
</div>



<div class="container">
    {{-- <div class="bg-image d-flex justify-content-center align-items-center"  style="background-image: url('{{ asset('assets/images/pexels-arthouse-studio-4618423.jpg') }}');
    height: 80vh;">
     
    </div> --}}
    <video autoplay muted loop height="40%" width="100%" id="myVideo">
        <source src="{{ asset('assets/images/3155090134.mp4') }}"  type="video/mp4">

    </video>
    <div class="overlay">
        <h1 class="text-center text-white display-1  justify-content-center align-items-center wow backInLeft">JEWELRY ALWAYS FITS</h1>
        <h3 class="text-white text-center justify-content-center align-items-center">Wear a Fabolous smile, great jewelry,<br> and know that you are totally and utterly in control. <br> GOOD Things comes in SMALL Packeges Espeacially when its JEWELRY</h3>
        <div class="text-center mt-3">
            <a href="{{ url('category')}}" class="btn btn-warning btn-lg p-2">Shop Now</a>
        </div>
        
    </div>

   
</div>


<div class="py-5">
    <div class="container">
        <div class="row gy-3">
            <h1 class="text-center text-bold">TRENDING CATEGORY</h1>
            <div class="owl-carousel treading-carousel owl-theme">
                @foreach ($trending_category as $tcategory)
                <div class="items">
                    <a href="{{ url('category/'.$tcategory->slug)}}">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" class="card-img" style="height:280px;"
                                alt="category image">
                            <div class="card-body">
                                <h5>{{ $tcategory->name }}</h5>
                                <p>{{ $tcategory->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- section below the cards --}}
  <div class="container background p-5 mb-5">
    <div class="container ">
      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-3">
          <i class="fa fa-inbox fa-2x d-flex justify-content-center text-secondary"></i><br />
          <h3 class="text-center">Chat With Us</h3>
          <p class="text-secondary text-center">Chat live with one <br>of our support specialists.</p>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3">
          <i class="fa fa-clock-o fa-2x d-flex justify-content-center text-secondary"></i><br />
          <h3 class="text-center">Get In Touch</h3>
          <p class="text-secondary text-center">Stay in touch with<br>our team members</p>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3">
          <i class="fa fa-truck fa-2x d-flex justify-content-center text-secondary"></i><br />
          <h3 class="text-center">Fast Home Delivery</h3>
          <p class="text-secondary text-center">Fast customer service<br> Delivery of the product is on Time</p>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3">
          <i class="fa fa-address-book fa-2x d-flex justify-content-center text-secondary"></i><br />
          <h3 class="text-center">Support Center</h3>
          <p class="text-secondary text-center">We are providing friendly<br> customer support to our customers</p>
        </div>
    </div>
    </div>      





@endsection


@section('scripts')
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    autoplay:true,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

  
</script>
@endsection