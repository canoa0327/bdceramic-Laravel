<?php

include_once '../../asset/navbar.php';

$param = explode('&', $_SERVER['REQUEST_URI']);

$detail_idx = explode('=', $param[1]);
$detail_name = array("점토벽돌", "와이드벽돌", "전돌", "수입벽돌", "내화벽돌");

$data_result = $db_helpers->select("*", "product01", "detail_idx = '" . $detail_idx[1] . "'");

?>

<div>
  <div class="top-contents">
    <img class="top-img" src="../../img/product01.png" alt="" width="100%">
  </div>
  <div class="title-contents">
    <div class="title-contents-inner">
      <h2>점토벽돌 - <?= $detail_name[$detail_idx[1] - 1]; ?></h2>
    </div>
  </div>
  <!-- <div class="search-contents">
    <button class="search-button" onclick="location.href='/?create';">제품등록</button>
  </div> -->

  <div class="container">
    <!-- <div class="search-contents">
      <input type="text" placeholder="검색어 입력" id="searchValue" onkeyup="enterkey()">
      <button class="search-button" onclick="searchProduct()">검색</button>
    </div> -->

    <div class="wrap">

      <?php if ($_SESSION['m_idx']) { ?>
        <div class="search-contents">
          <button class="search-button" onclick="location.href='/?create';">제품등록</button>
        </div>
      <?php } ?>


      <div class="leftMenu">
        <h2>점토벽돌</h2>
        <ul>
          <?php for ($i = 0; $i < count($detail_name); $i++) {
            $detail_num = array_search($detail_name[$i], $detail_name); ?>
            <li class="<?= $detail_name[$i] === $detail_name[$detail_idx[1] - 1] ? 'active' : '' ?>">
              <a class="<?= $detail_name[$i] === $detail_name[$detail_idx[1] - 1] ? 'active' : '' ?>" href="/?product01/list/&detail_idx=<?= $detail_num + 1 ?>">
                <?= $detail_name[$i] ?>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
      <?php if (count($data_result) <= 0) { ?>
        <div class="productList" id="list" style="justify-content: center; padding: 120px 0">
          <h4 style="text-align: center">등록된 제품이 없습니다.</h4>
        </div>
      <?php } else { ?>

        <div class="productList" id="list">
          <?php for ($i = 0; $i < count($data_result); $i++) { ?>

            <div class="productView">
              <div class="productImage">

                <?php if ($data_result[$i]['picture'] == 'y') {
                  $tableName = 'product01_' . $detail_idx[1];
                  $fileInfo = $db_helpers->select("*", "files", "table_name = '" . $tableName . "' AND table_id = '" . $data_result[$i]['idx'] . "'");
                ?>
                  <a href="/?product01/detail/&detail_idx=<?= $data_result[$i]['detail_idx'] ?>&product_idx=<?= $data_result[$i]['idx'] ?>"><img src="/data/file/product01/<?= $fileInfo[0]['bf_file'] ?>" class="productImage"></a>
                <?php } else { ?>
                  <a href="/?product01/detail/&detail_idx=<?= $data_result[$i]['detail_idx'] ?>&product_idx=<?= $data_result[$i]['idx'] ?>"><img src="./img/non_img.jpg" class="productImage" alt="제품 이미지"></a>
                <?php } ?>
              </div>
              <div class="productInfo">
                <span class="productName"><a href="/?product01/detail/&detail_idx=<?= $data_result[$i]['detail_idx'] ?>&product_idx=<?= $data_result[$i]['idx'] ?>"><?= $data_result[$i]['title'] ?></a></span>
                <span class="productName">제품규격 : <?= $data_result[$i]['data1'] ?> × <?= $data_result[$i]['data2'] ?> × <?= $data_result[$i]['data3'] ?></span>
              </div>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>

  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center" id="pageNavigation"></ul>
  </nav>
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

<?php

include_once './asset/footer.php';

?>