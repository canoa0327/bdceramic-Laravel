@extends('layouts.app')

@section ('content')

<div class="top-contents">
  <img class="top-img" src="{{ URL::asset('assets/img/1.jpg') }}" alt="" width="100%">
</div>
<div class="title-contents">
  <div class="title-contents-inner">
    <h2>제품등록</h2>
  </div>
</div>
<form id="registerForm" name="registerForm" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="container">
    <div class="write_contents">
      <select class="form-select mb-4 col-6" aria-label="Default select example" id="tableName" name="tableName">
      </select>
      <select class="form-select mb-4 col-6" aria-label="Default select example" id="cate_no" name="cate_no">
      </select>
      <div class="input-group flex-nowrap mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping">제품명</span>
        </div>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="input-group col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 pr-lg-3 mb-3 pl-0 pr-0">
        {{-- <input type="file" class="form-control" accept="image/*" id="imgFiles1" name="imgFiles[]" placeholder=""
          onchange="checkFiles(this.files)"> --}}
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="product_pic" onclick="$('#imgFiles1').click()">썸네일
            사진 선택</button>
        </div>
      </div>
      <div class="input-group col-xl-4 pl-0 pr-0 mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping">치수</span>
        </div>
        <input type="text" class="form-control" id="data1" name="data1" placeholder="가로길이" required>
        <label for="" class="input-group-text">X</label>
        <input type="text" class="form-control" id="data2" name="data2" placeholder="세로길이" required>
        <label for="" class="input-group-text">X</label>
        <input type="text" class="form-control" id="data3" name="data3" placeholder="높이" required>
        <div class="input-group-append">

        </div>
      </div>
      <div class="input-group col-xl-3 pl-0 pr-0 mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping">소요량(1㎡)</span>
        </div>
        <input type="text" class="form-control" id="data4" name="data4" required>
        <div class="input-group-append">
          <label for="" class="input-group-text">장</label>
        </div>
      </div>
      <div class="input-group col-xl-3 pl-0 pr-0 mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping">줄눈간격(mm)</span>
        </div>
        <input type="text" class="form-control" id="data5" name="data5" required>
        <div class="input-group-append">
          <label for="" class="input-group-text">mm</label>
        </div>
      </div>

      <!-- <textarea id="summernote" name="summernote" style="width: 100%; min-width:300px; height: 300px;"></textarea> -->
      <div id="smarteditor">
        <textarea name="contents" id="editorTxt" rows="20" cols="10" placeholder="내용을 입력해주세요"
          style="width: 100%; min-width:300px; height: 600px;"></textarea>
      </div>
      <div class="row justify-content-center m-md-0 mr-1 ml-1">
        <button type="button" class="btn col-md-2 createBtn" onclick="FormSubmit();">작성하기</button>
      </div>
    </div>
  </div>
</form>

<style>
  @media screen and (min-width: 1200px) {
    .container {
      max-width: 1350px;
    }
  }

  .body {
    font-family: 'Noto Sans KR' !important;
  }

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
  let oEditors = [];

  smartEditor = function() {
    nhn.husky.EZCreator.createInIFrame({
      oAppRef: oEditors,
      elPlaceHolder: "editorTxt",
      sSkinURI: "/assets/smarteditor/SmartEditor2Skin.html",
      fCreator: "createSEditor2"
    });
  }

  $(document).ready(function() {
    smartEditor();
  })
</script>
<script>
  $(document).ready(function() {

    var area0 = ["대분류", "점토벽돌", "고벽돌", "모노벽돌", "벽돌타일", "고벽돌타일", "모노타일", "디자인블럭", "바닥재"];
    var area1 = ["점토벽돌", "와이드벽돌", "전돌", "수입벽돌", "내화벽돌"];
    var area2 = ["적고벽돌", "청고벽돌", "백고벽돌"];
    var area3 = ["모노벽돌"];
    var area4 = ["점토타일", "롱점토타일", "세라믹타일", "전돌타일", "현무암타일", "천연석", "인조석"];
    var area5 = ["적고타일", "청고타일", "백고타일"];
    var area6 = ["모노타일"];
    var area7 = ["디자인블럭"];
    var area8 = ["바닥재"];

    $("select[id^=tableName]").each(function() {
      $selsido = $(this);
      $.each(eval(area0), function(index, item) {
        $selsido.append("<option value='0" + index + "'>" + this + "</option>");
      });
      $selsido.next().append("<option value='0'>소분류</option>");
    });

    $("select[id^=tableName]").change(function() {
      var area = "area" + $("option", $(this)).index($("option:selected", $(
        this)))
      var $detailName = $(this).next();
      $("option", $detailName).remove();

      if (area == "area0")
        $detailName.append("<option value='0'>소분류</option>");
      else {
        $.each(eval(area), function(index, item) {
          index++;
          $detailName.append("<option value='" + index + "'>" + this + "</option>");
        });
      }
    });
  });

  function checkFiles(files) {
    if (files.length > 5) {
      alert("5개이상 첨부할 수 없습니다");
      var list = new DataTransfer;
      for (let i = 0; i < 5; i++) {
        list.items.add(files[i]);
      }
      document.getElementById('imgFiles').files = list.files;
    }
  }

  function FormSubmit() {
    if ($('#tableName option:selected').val() == '0') {
      alert('카테고리를 설정해주세요');
      $('#tableName').focus();
      return false;
    }

    if (confirm('제품을 등록하시겠습니까?')) {
      oEditors.getById["editorTxt"].exec("UPDATE_CONTENTS_FIELD", []);
      $('#registerForm').submit();
      return false;
    } else return false;

  }
</script>

@endsection