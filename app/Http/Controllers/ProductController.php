<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $cate_no = $request->input('cate_no');
        $product_no = $request->input('product_no');
        /* return view('products.index', ['product' => $cate_no]); */
        return view('products.index', compact(['cate_no', 'product_no']));

    }

    /* public function show(Request $request)
    {

    } */
}
