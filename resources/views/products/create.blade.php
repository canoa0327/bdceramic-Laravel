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
<form id="registerForm" name="registerForm" action="/prcs/prcs" method="post" enctype="multipart/form-data"
  onsubmit="return FormSubmit(this);">
  <input type="hidden" class="form-control noExChar" name="type" value="create" readonly />
  <div class="container">
    <div class="write_contents">
      <input type="hidden" name="type" value="create" readonly>
      <select class="form-select mb-4 col-6" aria-label="Default select example" id="tableName" name="tableName">
      </select>
      <select class="form-select mb-4 col-6" aria-label="Default select example" id="detailNum" name="detailNum">
      </select>
      <div class="input-group flex-nowrap mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping">제품명</span>
        </div>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="input-group col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 pr-lg-3 mb-3 pl-0 pr-0">
        <input type="file" class="form-control" accept="image/*" id="imgFiles1" name="imgFiles[]" placeholder=""
          onchange="checkFiles(this.files)">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="product_pic" onclick="$('#imgFiles1').click()">썸네일
            사진 선택</button>
        </div>
      </div>
      <div class="input-group col-xl-4 pl-0 pr-0 mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping">치수</span>
        </div>
        <input type="text" class="form-control" id="data1" name="data1" placeholder="가로길이">
        <label for="" class="input-group-text">X</label>
        <input type="text" class="form-control" id="data2" name="data2" placeholder="세로길이">
        <label for="" class="input-group-text">X</label>
        <input type="text" class="form-control" id="data3" name="data3" placeholder="높이">
        <div class="input-group-append">

        </div>
      </div>
      <div class="input-group col-xl-3 pl-0 pr-0 mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping">소요량(1㎡)</span>
        </div>
        <input type="text" class="form-control" id="data4" name="data4">
        <div class="input-group-append">
          <label for="" class="input-group-text">장</label>
        </div>
      </div>
      <div class="input-group col-xl-3 pl-0 pr-0 mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addon-wrapping">줄눈간격(mm)</span>
        </div>
        <input type="text" class="form-control" id="data5" name="data5">
        <div class="input-group-append">
          <label for="" class="input-group-text">mm</label>
        </div>
      </div>

      <!-- <textarea id="summernote" name="summernote" style="width: 100%; min-width:300px; height: 300px;"></textarea> -->
      <div id="smarteditor">
        <textarea name="editorTxt" id="editorTxt" rows="20" cols="10" placeholder="내용을 입력해주세요"
          style="width: 100%; min-width:300px; height: 600px;"></textarea>
      </div>
      <div class="row justify-content-center m-md-0 mr-1 ml-1">
        <button type="submit" class="btn col-md-2 createBtn">작성하기</button>
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
      sSkinURI: "/smarteditor/SmartEditor2Skin.html",
      fCreator: "createSEditor2"
    });
  }

  $(document).ready(function() {
    smartEditor();
  })
</script>
<script>
  $(document).ready(function() {
    /* $('#summernote').summernote({
      height: 500,
      minHeight: 500,
      maxHeight: 500,
      lang: "ko-KR",
      placeholder: '제품 상세설명 및 시공사진 등록.',
      toolbar: [
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['style', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
        ['color', ['forecolor', 'color']],
        ['table', ['table']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['picture', 'link', 'video']],
        ['view', ['fullscreen', 'help']]
      ],
      fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', '맑은 고딕', '궁서', '굴림체',
        '굴림', '돋음체', '바탕체'
      ],
      fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '28', '30', '36',
        '50', '72'
      ],
      callbacks: {
        onImageUpload: function(files, editor, welEditable) {
          for (var i = 0; i < files.length; i++) {
            if (i > 10) {
              alert('사진은 최대 10장까지 등록할 수 있습니다.');
              return;
            }
          }
          for (var i = 0; i < files.length; i++) {
            if (i > 10) {
              alert('사진은 최대 10장까지 등록할 수 있습니다.');
              return;
            }
            sendFile(files[i], editor, welEditable);
          }
        }
      }
    }); */

    /* function sendFile(file, editor, welEditable) {
      data = new FormData();
      data.append("file", file);
      $.ajax({
        url: "/prcs/imageTemp",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        type: "POST",
        success: function(data) {
          var image = $('<img class="images">').attr('src', "" + data);
          $('#summernote').summernote('insertNode', image[0]);
          console.log($('#summernote').summernote('insertNode', image[0]));
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus + "" + errorThrown);
        }
      });
    } */

    var area0 = ["대분류", "점토벽돌", "고벽돌", "모노벽돌", "벽돌타일", "고벽돌타일", "모노타일", "디자인블럭", "바닥재"];
    var area1 = ["점토벽돌", "와이드벽돌", "전돌", "수입벽돌", "내화벽돌"];
    var area2 = ["적고벽돌", "청고벽돌", "백고벽돌"];
    var area3 = ["모노벽돌"];
    var area4 = ["점토타일", "롱점토타일", "세라믹타일", "전돌타일", "현무암타일", "천연석", "인조석"];
    var area5 = ["적고타일", "청고타일", "백고타일"];
    var area6 = ["모노타일"];
    var area7 = ["디자인블럭"];
    var area8 = ["바닥재"];

    $("select[name^=tableName]").each(function() {
      $selsido = $(this);
      $.each(eval(area0), function(index, item) {
        $selsido.append("<option value='product0" + index + "'>" + this + "</option>");
      });
      $selsido.next().append("<option value='0'>소분류</option>");
    });

    $("select[name^=tableName]").change(function() {
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

  function FormSubmit(f) {
    if ($('#tableName option:selected').val() == '0') {
      alert('카테고리를 설정해주세요');
      $('#tableName').focus();
      return false;
    }

    if (!$('#title').val()) {
      alert('제목을 입력해주세요.');
      $('#title').focus();
      return false;
    }

    if (!$('#data1').val()) {
      alert('치수를 입력해주세요.');
      $('#data1').focus();
      return false;
    }

    if (!$('#data2').val()) {
      alert('치수를 입력해주세요.');
      $('#data2').focus();
      return false;
    }

    if (!$('#data3').val()) {
      alert('치수를 입력해주세요.');
      $('#data3').focus();
      return false;
    }

    if (!$('#data4').val()) {
      alert('소요량을 입력해주세요.');
      $('#data4').focus();
      return false;
    }

    if (!$('#data5').val()) {
      alert('줄눈간격을 입력해주세요.');
      $('#data5').focus();
      return false;
    }

    if (confirm('제품을 등록하시겠습니까?')) {
      oEditors.getById["editorTxt"].exec("UPDATE_CONTENTS_FIELD", []);
      f.submit();
      return false;
    } else return false;

  }
</script>

@endsection