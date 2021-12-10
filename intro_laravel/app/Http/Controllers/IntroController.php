<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    //basic controller
    public function salamPembuka (Request $request){
        return 'Selamat Datang (Saya dari controller)';
    }

    //controller with parameter
    public function detailProduct ($product_id){
        $product_id = 1;
    }

    //controller with double parameter
    public function detailProductDouble($product_id, $comment_id){
        $product_id = 1;
        $comment_id = 'Success';
    }
}
