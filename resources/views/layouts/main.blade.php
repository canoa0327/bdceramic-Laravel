@extends('layouts.app')

@section ('content')

<!-- <div class="main_product">

  <div class="owl-carousel owl-theme">
    <div class="item">
      <img class="main_img" src="./img/main/main_cover1.jpg" alt="메인이미지">
    </div>
    <div class="item">
      <img class="main_img" src="./img/main/main_cover2.jpg" alt="메인이미지">
    </div>
    <div class="item">
      <img class="main_img" src="./img/main/main_cover3.jpg" alt="메인이미지">
    </div>
    <div class="item">
      <img class="main_img" src="./img/main/main_cover4.jpg" alt="메인이미지">
    </div>
  </div>
</div> -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="padding-top: 96px">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="main_img" src="{{ URL::asset('assets/img/main/main_cover1.jpg') }}" alt="메인이미지">
      <div style="padding: 20px 0">
        <div class="carousel-caption" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="800">
          <h1 class="main-title1">최고의 품질로 모든 공종을 책임 시공하는</h1>
          <h1 class="main-title2">건축 내·외장재 유통 전문 기업</h1>
          <h1 class="main-title3">백두세라믹</h1>
        </div>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <img class="main_img" src="./img/main/main_cover2.jpg" alt="메인이미지">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div> -->
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>

<div class="main-container">
  <section class="con_product">
    <div>
      <h3 class="prod_title">백두세라믹 대표 시공사례</h3>
    </div>

    @for($i = 1; $i <= 20; $i++)
    @if($i==1 || $i==5 || $i==9 || $i==13 || $i==17) 
      <div class="prod_content" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1200">
    @endif
      <div class="prod_link">
        <a href="javascript:void(0)"><img src="{{ URL::asset('assets/img/main/main_img' .$i. '.jpg')}}" /></a>
      </div>
    @if($i == 4 || $i == 8 || $i == 12 || $i == 16 || $i == 20)
      </div>
    @endif
    @endfor

</section>
<section style="padding-bottom: 140px; overflow-x: hidden">
  <h3 class="prod_title" style="text-align: center">전시장 및 제품문의</h3>
  <div class="row">
    <div class="col-6 gallery-info" style="background:#efe9e4" data-aos="fade-right"
      data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
      <div class="row">
        <div class="col-6">
          <div id="map" style="width:100%;height:300px;margin:0 auto;"></div>
        </div>
        <div class="col-6" style="display: flex;flex-direction: column;justify-content: center;">
          <h1>하남전시장</h1>
          <p>경기 하남시 하남대로 308</p>
          <p>(구) 경기도 하남시 하산곡동 426-4</p>
          <p>대표전화 | 031-794-1016</p>
          <p>시공문의 | 010-2347-8507</p>
          <p>자재문의 | 010-5091-8994</p>
        </div>
      </div>

    </div>
    <div class=" col-6 text-center p-0" data-aos="fade-left" data-aos-anchor-placement="center-bottom"
      data-aos-duration="1000">
      <img src="{{ URL::asset('assets/img/main/second_cover.png') }}" alt="백두세라믹_전시장" width="100%">
    </div>
  </div>

</section>
</div>

<script type="text/javascript"
  src="//dapi.kakao.com/v2/maps/sdk.js?appkey=95f510c803bf9882142bbf877c290959&libraries=services"></script>

<script>
  AOS.init();

  var geocoder = new kakao.maps.services.Geocoder();

  geocoder.addressSearch('경기도 하남시 하남대로 308',
    function(result, status) {
      if (status === kakao.maps.services.Status.OK) {

        var mapContainer = document.getElementById('map'), // 지도를 표시할 div 

          mapOption = {
            center: new kakao.maps.LatLng(result[0].y, result[0].x), // 지도의 중심좌표
            draggable: false,
            level: 9 // 지도의 확대 레벨
          };

        var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

        // 마커가 표시될 위치입니다 
        var markerPosition = new kakao.maps.LatLng(result[0].y, result[0].x);

        // 마커를 생성합니다
        var marker = new kakao.maps.Marker({
          map: map,
          position: markerPosition
        });

        // 마커가 지도 위에 표시되도록 설정합니다
        marker.setMap(map);

        iwPosition = new kakao.maps.LatLng(result[0].y, result[0].x); //인포윈도우 표시 위치입니다

        var content = '<div class="customoverlay">' + '<a href="https://place.map.kakao.com/263718448">' + '<span class="title">' + '백두세라믹' + '</span>' + '</a>' + '</div>';

        // 인포윈도우를 생성합니다
        var customOverlay = new kakao.maps.CustomOverlay({
          map: map,
          position: iwPosition,
          content: content,
          yAnchor: 1
        });

        // 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
      }

    });
</script>

<style>
  .customoverlay {
    position: relative;
    bottom: 60px;
    border-radius: 6px;
    border: 1px solid #ccc;
    border-bottom: 2px solid #ddd;
    float: left;
  }

  .customoverlay:nth-of-type(n) {
    border: 0;
    box-shadow: 0px 1px 2px #888;
  }

  .customoverlay a {
    display: block;
    text-decoration: none;
    color: #000;
    text-align: center;
    border-radius: 6px;
    font-size: 14px;
    font-weight: bold;
    overflow: hidden;
    background: #d95050;
    background: #d95050 url(https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/arrow_white.png) no-repeat right 14px center;
  }

  .customoverlay .title {
    display: block;
    text-align: center;
    background: #fff;
    margin-right: 35px;
    padding: 10px 15px;
    font-size: 14px;
    font-weight: bold;
  }

  .customoverlay:after {
    content: '';
    position: absolute;
    margin-left: -12px;
    left: 50%;
    bottom: -12px;
    width: 22px;
    height: 12px;
    background: url('https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/vertex_white.png')
  }

  .carousel-caption {
    bottom: 6rem;
  }

  .main-title1 {
    font-weight: 600;
    color: #fff;
    font-size: 52px;
    margin-bottom: 50px;
  }

  .main-title2 {
    font-weight: 600;
    margin-bottom: 12px;
    font-size: 38px;
    color: #ffd544;
  }

  .main-title3 {
    font-weight: 600;
    color: #ffd544;
    font-size: 32px;
  }
</style>

@endsection