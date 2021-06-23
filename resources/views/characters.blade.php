@extends('layouts.main')

@section('content')
<main>

  <section class="section-jumbo">
    <div class="container">
      <button class="btn-brand">CURRENT SERIES</button>
    </div>
  </section>

  <div class="container">
    @foreach ($products as $product)
      
    <div class="box">

      <div class="box-img">
        <img src="{{ $product['thumb'] }}" alt="">
      </div>
      <p>{{ $product['series'] }}</p>
  
    </div>
    @endforeach

    <button class="btn-brand">LOAD MORE</button>


  </div>
  {{-- <div class="container"> --}}

    <section class="section-option">
      <div class="container">
  
        <div>
          <img src="../img/buy-comics-digital-comics.png" alt="digital comics">
          <p>digital comics</p>
        </div>
  
        <div>
          <img src="../img/buy-comics-merchandise.png" alt="merchandise">
          <p>merchandise</p>
        </div>
  
        <div>
          <img src="../img/buy-comics-subscriptions.png" alt="subscriptions">
          <p>subscription</p>
        </div>
  
        <div>
          <img src="../img/buy-comics-shop-locator.png" alt="comic shop locator">
          <p>comic shop locator</p>
        </div>
  
        <div>
          <img src="../img/buy-dc-power-visa.svg" alt="dc power visa">
          <p>dc power visa</p>
        </div>
  
      </div>
    </section>

 

</main>


@endsection