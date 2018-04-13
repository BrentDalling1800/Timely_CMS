<?php

namespace App\Http\Controllers;

use App\auth;

class User_Auth extends Controller
{
    //

    public function index() {

    }

    public function login() {
    $data['result'] = (array)DB::table('page_details')->where('page_title', 'docs')->first();
	$docs = json_decode((object)DB::table('items')->orderBy('id')->get());
    return view('docs', [
    	"page" => $data['result'],
    	"jumbotron" => json_decode($data['result']['page_jumbtron']),
    	"htmls" => $docs
    ]);
    }
}
