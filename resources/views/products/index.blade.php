@extends('layouts.app')

@section ('content')

<div>
  <div class="top-contents">
    <img class="top-img" src="{{ URL::asset('assets/img/product' . $group_no  . '.png')}}" alt="" width="100%">
  </div>
  <div class="title-contents">
    <div class="title-contents-inner">
      <h2>{{$productTitle}} @if(count($productArr) > 1) - {{ $productArr[$cate_no - 1] }} @endif</h2>
    </div>
  </div>

  <div class="container">
    <!-- <div class="search-contents">
      <input type="text" placeholder="검색어 입력" id="searchValue" onkeyup="enterkey()">
      <button class="search-button" onclick="searchProduct()">검색</button>
    </div> -->

    <div class="wrap">

      @if($session === true)
      <div class="search-contents">
        <button class="search-button" onclick="location.href='{{ route('products.create') }}';">제품등록</button>
      </div>
      @endif


      <div class="leftMenu">
        <h2>{{$productTitle}}</h2>
        <ul>
          @for($i = 0; $i < count($productArr); $i++)
          <li class="{{ $productArr[$i] === $productArr[$cate_no - 1] ? "active" : '' }}">
            <a class="{{ $productArr[$i] === $productArr[$cate_no - 1] ? "active" : '' }}" 
            href="/products?group_no={{ $group_no }}&cate_no={{ $i + 1 }}">{{$productArr[$i]}}</a>
          </li>
          @endfor
        </ul>
      </div>

      @if(count($products) == 0)
      <div class="productList" id="list" style="justify-content: center; padding: 120px 0">
        <h4 style="text-align: center">등록된 제품이 없습니다.</h4>
      </div>
      @endif

      <div class="productList" id="list">

        @for ( $i = 0; $i < count($products); $i++ )
        <div class="productView">
          <div class="productImage">
            <a href="/products/show?group_no={{ $group_no }}&cate_no={{ $cate_no }}&product_no={{ $products[$i]->id }}">
              {{-- <img src="{{ URL::asset('assets/thumbnail/product'.$group_no.'/'.$productImg[$i]->bf_file) }}" class="productImage"> --}}
            </a>
          </div>
          <div class="productInfo">
            <span class="productName"><a href="/products/show?group_no={{ $group_no }}&cate_no={{ $cate_no }}&product_no={{ $products[$i]->id }}">{{ $products[$i]->title }}</a></span>
            <span class="productName">제품규격 : {{ $products[$i]->data1 }} x {{ $products[$i]->data2 }} x {{ $products[$i]->data3 }}
            </span>
          </div>
        </div>
        @endfor
      </div>

    </div>
  </div>
</div>


<script>
  function searchProduct() {
    var productName = $('#searchValue').val();
    location.href = "/?product01_1/search/productName=" + productName;
  }

  function enterkey() {
    if (window.event.keyCode == 13) {
      searchProduct();
    }
  }
</script>
@endsection