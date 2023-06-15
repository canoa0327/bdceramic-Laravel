<?php

$param = explode('&', $_SERVER['REQUEST_URI']);

$detail_idx = explode('=', $param[1]);
$detail_name = array("점토벽돌", "와이드벽돌", "전돌", "수입벽돌", "내화벽돌");
$product_idx = explode('=', $param[2]);

$data_result = $db_helpers->select("*", "product01", "idx = '" . $product_idx[1] . "' AND detail_idx = '" . $detail_idx[1] . "'");

$data_result = $data_result[0];

?>


<div>
  <div class="top-contents">
    <img class="top-img" src="./img/product01.png" alt="" width="100%">
  </div>
  <div class="title-contents">
    <div class="title-contents-inner">
      <h2>점토벽돌 - <?= $detail_name[$detail_idx[1] - 1]; ?></h2>
    </div>
  </div>

  <div class="product-detail">
    <div class="product-info">

      <?php if ($data_result['picture'] == 'y') {
        $tableName = 'product01_' . $detail_idx[1];
        $fileInfo = $db_helpers->select("*", "files", "table_name = '" . $tableName . "' AND table_id = '" . $data_result['idx'] . "'");
      ?>
        <div class="product-img">
          <img class="top-img" src="/data/file/product01/<?= $fileInfo[0]['bf_file'] ?>">
        </div>
      <?php } else { ?>
        <div class="product-img"><img src="./img/non_img.jpg" class="productImage" alt="제품 이미지"></div>
      <?php } ?>
      <div class="product-descript">
        <h5><?= $data_result['title'] ?></h5>
        <div class="product-detail-descript">
          <table class="product-table">
            <tbody>
              <tr>
                <th>치수</th>
                <td><?= $data_result['data1'] ?> x <?= $data_result['data2'] ?> x <?= $data_result['data3'] ?></td>
              </tr>
              <tr>
                <th>소요량(1㎡)</th>
                <td><?= $data_result['data4'] ?>장</td>
              </tr>
              <tr>
                <th>줄눈간격</th>
                <td><?= $data_result['data5'] ?> mm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <?php if ($_SESSION['m_idx']) { ?>
          <button class="btn createBtn" onclick="location.href='/?product01/edit/&detail_idx=<?= $data_result['detail_idx'] ?>&product_idx=<?= $data_result['idx'] ?>'">제품수정</button>
          <button class="btn createBtn" onclick="delProduct()">제품삭제</button>
        <?php } ?>
      </div>

    </div>
    
    <div class="product-picture">
      <div class="hr-sect">
        <h5>제품설명 및 시공사례</h5>
      </div>
      <?= $data_result['contents'] ?>
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
  function delProduct() {
    var confirmflag = confirm("제품을 삭제하시겠습니까?");
    if (confirmflag) {
      var result = getAjax('/prcs/prcs', 'post', {
        type: "delProduct",
        product_idx: "<?= $product_idx[1] ?>",
        detail_idx: "<?= $detail_idx[1] ?>",
        tableName: "product01"
      });
      if (result.state == 'success') {
        var returnIdx = <?= $detail_idx[1] ?>;
        alert(result.msg);
        location.href = "/?product01/list/&detail_idx=" + returnIdx;
      } else {
        alert(result.msg);
      }
    } else {
      return false;
    }
  }
</script>