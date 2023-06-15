<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>백두세라믹</title>

  <script type="text/javascript" src="{{ URL::asset('assets/smarteditor/js/HuskyEZCreator.js') }}" charset="utf-8">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>

  <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  {{--
  <link rel="stylesheet" href="{{ URL::asset('assets/css/carousel.css') }}"> --}}
  <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/mobile.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/products.css') }}">
  <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.png') }}">

</head>

<body>
  <div class="overlay"></div>
  <div class="m_header">
    <div class="m_logo">
      <a href="/?m_main" class="main_logo header_link"><img src="./img/logo.png" width="110px;" height="60px"></a>
      <div class="m_icon" style="min-height: 34px;">
        <span class="icon-menu h3" style="font-size: 30px"></span>
      </div>
    </div>
    <div class="sidebar">
      <nav class="sidebar_menus">
        <div class="m_logo">
          <a href="/?m_main" class="main_logo header_link"><img src="./img/logo.png" width="110px"></a>
          <div class="sitebar_close">
            <a role="button" href="javascript:void(0);" class="header_link"></a>
          </div>
        </div>
        <div class="member_area">
          <span style="font-weight: 400; letter-spacing: -1px; font-size: 24px;">(주)백두세라믹</span>
        </div>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="javascript:void(0);">점토벽돌
              <span class="sidebar_arrow_down"></span>
            </a>
          </li>
          <li style="display: none"><a class="header_link" href="/?m_product01/list/&detail_idx=1">점토벽돌</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product01/list/&detail_idx=2">와이드벽돌</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product01/list/&detail_idx=3">전돌</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product01/list/&detail_idx=4">수입벽돌</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product01/list/&detail_idx=5">내화벽돌</a></li>
        </ul>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="javascript:void(0);">고벽돌
              <span class="sidebar_arrow_down"></span>
            </a>
          </li>
          <li style="display: none"><a class="header_link" href="/?m_product02/list/&detail_idx=1">적고벽돌</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product02/list/&detail_idx=2">청고벽돌</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product02/list/&detail_idx=3">백고벽돌</a></li>
        </ul>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="/?m_product03/list/&detail_idx=1">모노벽돌
              <!-- <span class="sidebar_arrow_down"></span> -->
            </a>
          </li>
          <!-- <li style="display: none"><a class="header_link" href="/?m_product03/list/&detail_idx=1">모노벽돌</a></li> -->
        </ul>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="javascript:void(0);">벽돌타일
              <span class="sidebar_arrow_down"></span>
            </a>
          </li>
          <li style="display: none"><a class="header_link" href="/?m_product04/list/&detail_idx=1">점토타일</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product04/list/&detail_idx=2">롱점토타일</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product04/list/&detail_idx=3">세라믹타일</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product04/list/&detail_idx=4">전돌타일</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product04/list/&detail_idx=5">현무암타일</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product04/list/&detail_idx=5">천연석</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product04/list/&detail_idx=5">인조석</a></li>
        </ul>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="javascript:void(0);">고벽돌타일
              <span class="sidebar_arrow_down"></span>
            </a>
          </li>
          <li style="display: none"><a class="header_link" href="/?m_product05/list/&detail_idx=1">적고타일</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product05/list/&detail_idx=2">청고타일</a></li>
          <li style="display: none"><a class="header_link" href="/?m_product05/list/&detail_idx=3">백고타일</a></li>
        </ul>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="/?m_product06/list/&detail_idx=1">모노타일
              <!-- <span class="sidebar_arrow_down"></span> -->
            </a>
          </li>
        </ul>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="/?m_product07/list/&detail_idx=1">디자인블럭
              <!-- <span class="sidebar_arrow_down"></span> -->
            </a>
          </li>
        </ul>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="/?m_product08/list/&detail_idx=1">바닥재
              <!-- <span class="sidebar_arrow_down"></span> -->
            </a>
          </li>
        </ul>
        <ul>
          <li class="sidebar_titles">
            <a role="button" class="en header_link" href="/?m_product06">시공과정
            </a>
          </li>
        </ul>
      </nav>
    </div>

  </div>

  <ul class="m_menu">
    <li><a href="/?m_main" class="header_link">홈</a></li>
    <li style="min-width:30%; border-left: 1px solid #7c7c7c"><a href="/?m_product01/list/&detail_idx=1"
        class="header_link">점토벽돌</a></li>
    <li style="min-width:25%; border-left: 1px solid #7c7c7c"><a href="/?m_product02/list/&detail_idx=1"
        class="header_link">고벽돌</a></li>
    <li style="min-width:30%; border-left: 1px solid #7c7c7c"><a href="/?m_product03/list/&detail_idx=1"
        class="header_link">모노벽돌</a></li>
    <li style="min-width:30%; border-left: 1px solid #7c7c7c"><a href="/?m_product04/list/&detail_idx=1"
        class="header_link">벽돌타일</a></li>
    <li style="min-width:35%; border-left: 1px solid #7c7c7c"><a href="/?m_product05/list/&detail_idx=1"
        class="header_link">고벽돌타일</a></li>
    <li style="min-width:30%; border-left: 1px solid #7c7c7c"><a href="/?m_product06/list/&detail_idx=1"
        class="header_link">모노타일</a></li>
    <li style="min-width:35%; border-left: 1px solid #7c7c7c"><a href="/?m_product07/list/&detail_idx=1"
        class="header_link">디자인블럭</a></li>
    <li style="min-width:25%; border-left: 1px solid #7c7c7c"><a href="/?m_product08/list/&detail_idx=1"
        class="header_link">바닥재</a></li>
    <li style="min-width:30%; border-left: 1px solid #7c7c7c"><a href="/?m_product09" class="header_link">시공과정</a></li>
  </ul>

  <style>
    .site-wrap {
      max-width: 1024px;
      margin: 0 auto;
    }

    .header_link {
      color: #fff;
    }
  </style>

  <script>
    $(document).ready(function() {
    /* $('.sidebar_list').hide(); */
  });

  $('.sidebar_menus ul li.sidebar_titles a').click(function(e) {
    $(this).parent().siblings().stop(true, true).slideToggle();
    $(this).children('span').toggleClass('sidebar_arrow_up');
  });

  $('.icon-menu').on('click', function() {
    $('.sidebar').addClass('active');
    $('.overlay').fadeIn();
  });

  $('.icon-close').on('click', function() {
    $('.sidebar').removeClass('active');
    $('.overlay').fadeOut();
  });

  $('.sitebar_close a').on('click', function() {
    $('.sidebar').removeClass('active');
    $('.overlay').fadeOut();
  });
  </script>



  <div class="m_container">
    <section class="product" style="min-height: 310px">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
        style="background-size:cover; min-height:310px">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner text-center" style="min-height: 310px">
          <div class="carousel-item active" style="min-height: 310px">
            <img src="./img/main/m_main_cover1.png" width="100%" height="310px">
          </div>
        </div>
      </div>
    </section>

    <div class="contentBox" style="padding: 10px 0px; margin-bottom: 10px;">
      <h4 style="font-size: 18px; padding:10px 10px 0px 10px; margin: 0px 0px 14px 8px">백두세라믹 제품</h4>
      <div class="fav_menubox" style="padding-bottom: 10px;">

      </div>
    </div>

    <div class="m_view_contents" style="border-bottom: none">
      <section>

        <div class="photo_box">
          <h5><a class="box_title" href="/?m_product01/list/&detail_idx=1" style="font-size: 18px">점토벽돌</a></h5>
          <ul class="photoList">

            <li>
              <a href="/?m_product01/detail/&detail_idx=&product_idx=" class="photoImg">
                <img src="./data/file/product01/">
              </a>
              <a href="/?m_product01/detail/&detail_idx=&product_idx=" class="photoName">

              </a>
            </li>

            <li style="padding-right: 10px">
              <a href="/?m_product01/list/&detail_idx=1" class="photoImg">
                <h3 style="text-align: center"><span class="icon-arrow-right"></span></h3>
              </a>
              <a href="/?m_product01/list/&detail_idx=1" class="photoName">
                더보기
              </a>
            </li>
          </ul>
        </div>

      </section>
    </div>
  </div>

  <div class="m_footer">
    <img src="./img/logo.png" width="100px" style="margin-bottom: 18px;">
    <div>
      <span class="m_footer_content">(주)백두세라믹</span>
      <span class="m_footer_title">|</span>
      <span class="m_footer_title">사업자등록번호</span>
      <span class="m_footer_content">126-24-10510</span>
    </div>
    <div>
      <span class="m_footer_title">Tel ) 대표번호 031-794-1016</span>
    </div>
    <div>
      <span class="m_footer_content">시공담당 010-2347-8507 | 영업담당 010-5091-8994</span>
    </div>
    <div>
      <span class="m_footer_title">E-mail )</span>
      <span class="m_footer_content">71beak@hanmail.net</span>
    </div>
    <div>
      <span class="m_footer_title">주소 )</span>
      <span class="m_footer_content">경기도 하남시 하남대로 308</span>
    </div>
    <div>
      <p style="color: #959595; margin-bottom: 0">Copyright © www.백두세라믹.com All Rights Reserved </p>
    </div>
  </div>

  </div>
</body>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

<style>
  .m_footer div {
    margin: 4px 0px;
  }

  .m_container {
    padding-bottom: 10px;
  }
</style>

</html>