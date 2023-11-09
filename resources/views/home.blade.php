@extends('layouts.header')
@section('title', 'Home')
@section('content')
<!-- 광고 -->
<div class="container mt-4 d-flex justify-content-center">
  <div class="ads">
    <div class="ads-slide">
      <img src="{{asset('images/ads1.PNG')}}" class="img-fluid" alt="ads">
    </div>
    <div class="ads-slide">
      <img src="{{asset('images/ads1.PNG')}}" class="img-fluid" alt="ads">
    </div>
    <div class="ads-slide">
      <img src="{{asset('images/ads1.PNG')}}" class="img-fluid" alt="ads">
    </div>
    <div class="ads-slide">
      <img src="{{asset('images/ads1.PNG')}}" class="img-fluid" alt="ads">
    </div>
  </div>
</div>

<!-- 인기상품 -->
<div class="container mt-4">
  <p class="fs-5 mb-4"><i class="bi bi-heart-fill text-danger me-2"></i>인기상품 TOP5</p>
  <!-- 상품 리스트 -->
  <div class="d-flex justify-content-around">
    <div class="products-top5 col-2">
      <div>
        <img src="{{asset('images/top-products.jpeg')}}" class="img-fluid" alt="">
      </div>
      <p class="category">스티커</p>
      <p class="product-title">다양한 굿노트 꽃 스티커</p>
      <p class="price">3,000원</p>
    </div>
    <div class="products-top5 col-2">
      <img src="{{asset('images/top-products.jpeg')}}" class="img-fluid" alt="">
      <p class="category">다이어리/템플릿</p>
      <p class="product-title">2023 심플 그린 굿노트 다이어리 (스티커 선택)</p>
      <p class="price">2,000원</p>
    </div>
    <div class="products-top5 col-2">
      <img src="{{asset('images/top-products.jpeg')}}" class="img-fluid" alt="">
      <p class="category">노트</p>
      <p class="product-title">그리드 격자 노트 (색상 선택)</p>
      <p class="price">1,000원</p>
    </div>
    <div class="products-top5 col-2">
      <img src="{{asset('images/top-products.jpeg')}}" class="img-fluid" alt="">
    </div>
    <div class="products-top5 col-2">
      <img src="{{asset('images/top-products.jpeg')}}" class="img-fluid" alt="">
    </div>
  </div>
</div>

<!-- 전체상품 -->
<div class="container mt-5">
  <p class="total-product fs-5 mb-4"><i class="bi bi-star-fill me-2 text-warning"></i></i>전체 상품 <a href="#" class="fs-6 text-secondary">더보기</a></p>
  <!-- 전체 상품 리스트 -->
  <div class="d-flex justify-content-around flex-wrap">
    @for($i = 0; $i < 10; $i++)
    <div class="products-top5 mx-1 col-2">
      <div>
        <img src="{{asset('images/top-products.jpeg')}}" class="img-fluid" alt="">
      </div>
      <p class="category">스티커</p>
      <p class="product-title">다양한 굿노트 꽃 스티커</p>
      <p class="price">3,000원</p>
    </div>
    @endfor
  </div>
</div>

<script>
  $('.ads').slick({
    dots : true,
    infinite : true,
    speed : 300,
    slidesToShow : 1,
    slideToScroll : 1,
    arrows : true,
    autoplay: true,
    autoplaySpeed : 3000,
    draggable : true,
    centerMode: true,
    centerPadding: '140px',
    prevArrow : "<button type='button' class='slick-prev' style='color : red;'>Previous</button>"
  });
</script>
<style>
  .ads {
    width: 95%;
  }

  .ads-slide{
    margin-right: 30px;
    margin-left: 30px;
  }

  .slick-prev:before,
  .slick-next:before {
    color: red;
  }

  .products-top5 {
    height: 350px;
    position: relative;
  }

  .products-top5 img {
    border-radius: 10px;
  }

  .category {
    margin-top: 10px;
    font-size: small;
    color: gray;
  }
  .product-title {
    margin-top: -15px;
  }
  .price {
    position: absolute;
    bottom: 1px;
  }

  .total-product {
    position: relative;
  }

  .total-product a {
    position: absolute;
    right: 25px;
  }

  @media screen and (max-width: 1400px) {
    .products-top5 {
      height: 300px;
    }
  }

  @media screen and (max-width: 1200px) {
    .products-top5 {
      height: 270px;
    }
  }
</style>

@endsection



