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

  <div class="product-detail">
    <div class="product-info">

        <div class="product-img">
          <img class="top-img" src="{{ Storage::url($productImg[0]->bf_file) }}">
        </div>

      <div class="product-descript">
        <h5>{{ $products[0]->title }}</h5>
        <div class="product-detail-descript">
          <table class="product-table">
            <tbody>
              <tr>
                <th>치수</th>
                <td>{{ $products[0]->data1 }} x {{ $products[0]->data2 }} x {{ $products[0]->data3 }}</td>
              </tr>
              <tr>
                <th>소요량(1㎡)</th>
                <td>{{ $products[0]->data4 }}장</td>
              </tr>
              <tr>
                <th>줄눈간격</th>
                <td>{{ $products[0]->data5 }} mm</td>
              </tr>
            </tbody>
          </table>
        </div>

          <button class="btn createBtn" onclick="location.href='/?product01/edit/&detail_idx=>&product_idx='">제품수정</button>
          <button class="btn createBtn" onclick="delProduct()">제품삭제</button>

      </div>

    </div>
    
    <div class="product-picture">
      <div class="hr-sect">
        <h5>제품설명 및 시공사례</h5>
      </div>
      <?= $products[0]->contents ?>
    </div>

  </div>
</div>

<style>
  .createBtn {
    font-size: 18px;
    padding: 10px;
    margin-top: 20px;
    font-weight: 400;
    border: 1px solid #c5c7d5;
    border-radius: 0px;
  }
</style>

<script>
 
</script>

@endsection