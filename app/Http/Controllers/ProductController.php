<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

  private $product;

  public function __construct(Product $product)
  {
    $this->product = $product;
  }

  public function index(Request $request)
  {
    if (session()->has('mgmt-login')) {
      $session = session()->get('mgmt-login');
    } else $session = false;

    $group_no = $request->input('group_no');
    $cate_no = $request->input('cate_no');

    switch ($group_no) {
      case '01':
        $productTitle = '점토벽돌';
        $productArr = array("점토벽돌", "와이드벽돌", "전돌", "수입벽돌", "내화벽돌");
        break;
      case '02':
        $productTitle = '고벽돌';
        $productArr = array("적고벽돌", "청고벽돌", "백고벽돌");
        break;
      case '03':
        $productTitle = '모노벽돌';
        $productArr = array("모노벽돌");
        break;
      case '04':
        $productTitle = '벽돌타일';
        $productArr = array("점토타일", "롱점토타일", "세라믹타일", "전돌타일", "현무암타일", "천연석", "인조석");
        break;
      case '05':
        $productTitle = '고벽돌타일';
        $productArr = array("적고타일", "청고타일", "백고타일");
        break;
      case '06':
        $productTitle = '모노타일';
        $productArr = array("모노타일");
        break;
      case '07':
        $productTitle = '디자인블럭';
        $productArr = array("디자인블럭");
        break;
      case '08':
        $productTitle = '바닥재';
        $productArr = array("바닥재");
        break;
      default:
        $productArr = array("");
    }

    $products = DB::table('product' . $group_no)->where('detail_idx', $cate_no)->get();
    $productImg = DB::table('files')->where('table_name', 'product' . $group_no . '_' . $cate_no)->get();

    return view('products.index', compact(['group_no', 'cate_no', 'products', 'productImg', 'productTitle', 'productArr', 'session']));
  }

  public function show(Request $request)
  {
    if (session()->has('mgmt-login')) {
      $session = session()->get('mgmt-login');
    } else $session = false;

    $group_no = $request->input('group_no');
    $cate_no = $request->input('cate_no');
    $product_no = $request->input('product_no');

    switch ($group_no) {
      case '01':
        $productTitle = '점토벽돌';
        $productArr = array("점토벽돌", "와이드벽돌", "전돌", "수입벽돌", "내화벽돌");
        break;
      case '02':
        $productTitle = '고벽돌';
        $productArr = array("적고벽돌", "청고벽돌", "백고벽돌");
        break;
      case '03':
        $productTitle = '모노벽돌';
        $productArr = array("모노벽돌");
        break;
      case '04':
        $productTitle = '벽돌타일';
        $productArr = array("점토타일", "롱점토타일", "세라믹타일", "전돌타일", "현무암타일", "천연석", "인조석");
        break;
      case '05':
        $productTitle = '고벽돌타일';
        $productArr = array("적고타일", "청고타일", "백고타일");
        break;
      case '06':
        $productTitle = '모노타일';
        $productArr = array("모노타일");
        break;
      case '07':
        $productTitle = '디자인블럭';
        $productArr = array("디자인블럭");
        break;
      case '08':
        $productTitle = '바닥재';
        $productArr = array("바닥재");
        break;
      default:
        $productArr = array("");
    }

    $products = DB::table('product' . $group_no)->where([
      ['detail_idx', $cate_no],
      ['id', $product_no]
    ])->get();

    $productImg = DB::table('files')->where([
      ['table_name', 'product' . $group_no . '_' . $cate_no],
      ['detail_idx', $product_no]
    ])->get();
    return view('products.show', compact(['group_no', 'cate_no', 'product_no', 'products', 'productImg', 'productTitle', 'productArr', 'session']));
  }

  public function create()
  {
    if (session()->has('mgmt-login')) {
      $value = session()->get('mgmt-login');
      return view('products.create', ['session' => $value]);
    } else {
      return redirect()->back();
    }
  }

  public function store(Request $request)
  {

    $group_no = $request->tableName;
    $cate_no = $request->cate_no;
    $contents = str_replace('upload/', '/assets/data/products/', $request->contents);

    /* 제품 정보 DB 입력 */
    $id = DB::table('product' . $group_no)->insertGetId([
      'detail_idx' => $cate_no,
      'data1' => $request->data1,
      'data2' => $request->data2,
      'data3' => $request->data3,
      'data4' => $request->data4,
      'data5' => $request->data5,
      'title' => $request->title,
      'contents' => $contents
    ]);

    /* 썸네일 사진 local storage & DB 입력 */
    if($request->has('thumbNailImg')) {
      $path = $request->thumbNailImg->store('images', 'public');

      DB::table('files')->insert([
        'table_name' => 'product' . $group_no . '_' . $cate_no,
        'detail_idx' => $id,
        'bf_no' => '0',
        'bf_file' => $path
      ]);

      /** 
       * update, delete시 용이하게
       * 파일명 직접 지정하여 files 테이블에도 같이 저장되게끔 구현 예정
      */
    }

    return redirect()->route('products.index', ['group_no' => $group_no, 'cate_no' => $cate_no]);
  }
}
