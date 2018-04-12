<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\user_products;

use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    //

    public function dash() {

    $data['result'] = (array)DB::table('page_details')->where('page_title', 'dash')->first();

    $products = user_products::get()->where('user_id', json_encode(Auth::user()->id))->all();

    //die(json_encode($products));

    return view('user/dash', [
    	"page" => $data['result'],
    	"jumbotron" => json_decode($data['result']['page_jumbtron']),
    	"user" => Auth::user()->name,
    	"products" => $products

    	]);
    }
}
