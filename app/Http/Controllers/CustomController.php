<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ShopifyApp;


class CustomController extends Controller
{
    //

    public function index(){
        return 'render';
    }


    public function showProducts(){
        $shop = ShopifyApp::shop();
        $data= ['product' => [
                'title' => "Arslan",
                "body_html"=>"<strong>Good snowboard!</strong>",
                "vendor"=> "Burton",
                "product_type"=> "Snowboard",
                "tags"=>"Barnes & Noble, John's Fav, &quot;Big Air&quot;"
            ]];
        $request = $shop->api()->rest('GET', '/admin/products.json');
        $products=$request->body->products;
        return view('custom')->with('products',$products);
    }


    public function addProducts(Request $request){


        $shop = ShopifyApp::shop();

        $data= ['product' => [
            'title' => $request->input('title'),
            "body_html"=>$request->input('html'),
            "vendor"=> $request->input('vendor'),
            "product_type"=> $request->input('type'),
            "tags"=>$request->input('tags')
        ]];



        $request = $shop->api()->rest('POST', '/admin/products.json',
//           =================== BODY OF THE POST API ===========================
            $data
//            =====================
        );

        return redirect()->back();
    }


}
