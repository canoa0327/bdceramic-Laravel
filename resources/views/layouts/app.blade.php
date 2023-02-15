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
  
{{--   <link rel="stylesheet" href="{{ URL::asset('assets/css/carousel.css') }}"> --}}
  <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/mobile.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/products.css') }}">
  <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.png') }}">

</head>

<body>
  <header>
    <div class="sidebar">
      <nav class="sidebar_menus">
        <div class="responsive_logo">
          <a href="/?main" class="responsive_logo header_link"><img src="{{ URL::asset('assets/img/logo.png') }}" width="110px"></a>
          <div class="sitebar_close">
            <a role="button" href="javascript:void(0);" class="header_link" style="margin-left: 14px"></a>
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
    <div class="header_wrap">
      <div class="header">
        <div class="header_logo">
          <h1 class="logo">
            <a href="/" title="백두세라믹 메인페이지"><img src="{{ URL::asset('assets/img/logo.png') }}" alt="백두세라믹 로고" width="120px" height="80px"></a>
          </h1>
        </div>
        <ul class="header_items">
          <li class="items_list">
            <a class="items_name" href="/?product01/list/&detail_idx=1">점토벽돌</a>
            <ul class="items_list2">
              <li>
                <a href="/?product01/list/&detail_idx=1">점토벽돌</a>
              </li>
              <li>
                <a href="/?product01/list/&detail_idx=2">와이드벽돌</a>
              </li>
              <li>
                <a href="/?product01/list/&detail_idx=3">전돌</a>
              </li>
              <li>
                <a href="/?product01/list/&detail_idx=4">수입벽돌</a>
              </li>
              <li>
                <a href="/?product01/list/&detail_idx=5">내화벽돌</a>
              </li>
            </ul>
          </li>
          <li class="items_list">
            <a class="items_name" href="/?product02/list/&detail_idx=1">고벽돌</a>
            <ul class="items_list2">
              <li>
                <a href="/?product02/list/&detail_idx=1">적고벽돌</a>
              </li>
              <li>
                <a href="/?product02/list/&detail_idx=2">청고벽돌</a>
              </li>
              <li>
                <a href="/?product02/list/&detail_idx=3">백고벽돌</a>
              </li>
            </ul>
          </li>
          <li class="items_list">
            <a class="items_name" href="/?product03/list/&detail_idx=1">모노벽돌</a>

          </li>
          <li class="items_list">
            <a class="items_name" href="/?product04/list/&detail_idx=1">벽돌타일</a>
            <ul class="items_list2">
              <li>
                <a href="/?product04/list/&detail_idx=1">점토타일</a>
              </li>
              <li>
                <a href="/?product04/list/&detail_idx=2">롱점토타일</a>
              </li>
              <li>
                <a href="/?product04/list/&detail_idx=3">세라믹타일</a>
              </li>
              <li>
                <a href="/?product04/list/&detail_idx=4">전돌타일</a>
              </li>
              <li>
                <a href="/?product04/list/&detail_idx=5">현무암타일</a>
              </li>
              <li>
                <a href="/?product04/list/&detail_idx=6">천연석</a>
              </li>
              <li>
                <a href="/?product04/list/&detail_idx=7">인조석</a>
              </li>
            </ul>
          </li>
          <li class="items_list">
            <a class="items_name" href="/?product05/list/&detail_idx=1">고벽돌타일</a>
            <ul class="items_list2">
              <li>
                <a href="/?product05/list/&detail_idx=1">적고타일</a>
              </li>
              <li>
                <a href="/?product05/list/&detail_idx=2">청고타일</a>
              </li>
              <li>
                <a href="/?product05/list/&detail_idx=3">백고타일</a>
              </li>
            </ul>
          </li>

          <li class="items_list">
            <a class="items_name" href="/?product06/list/&detail_idx=1">모노타일</a>
          </li>
          <li class="items_list">
            <a class="items_name" href="/?product07/list/&detail_idx=1">디자인블럭</a>
          </li>
          <li class="items_list">
            <a class="items_name" href="/?product08/list/&detail_idx=1">바닥재</a>
          </li>
          <li class="items_list">
            <a class="items_name" href="/?product09">시공사례</a>
          </li>
        </ul>
        <div class="responsive_icon" style="min-height: 34px;">
          <span class="icon-menu h3" style="font-size: 30px"></span>
        </div>
      </div>
    </div>
  </header>

  <div>
    @yield('content')
  </div>
</body>
<script>
  $(function() {
    $(".items_list").on("mouseover", function() {
      $(".header_wrap").addClass('down');
      $(".items_list2").addClass('down');
    });
    $(".header_wrap").on("mouseleave", function() {
      $(".header_wrap").removeClass('down');
      $(".items_list2").removeClass('down');
    });
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

</html>