<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\user_tables;

class User_Auth extends Controller
{
     //

    public function index() {

    }

    public function login() {
    $data['result'] = (array)DB::table('page_details')->where('page_title', 'login')->first();
    return view('user/login', [
    	"page" => $data['result'],
        "jumbotron" => json_decode($data['result']['page_jumbtron'])
    ]);
    }

    public function submit(Request $request) {
                  die(json_encode($request->ip()));
        if(!empty($request) && $request != null) {
            $data = user_tables::get()->where('user_email', $request['user_id']);
            if(!empty($data) && $data != null && count($data) == 1) {
                if($data[0]->user_password != $request['user_password']) {
                    die(json_encode("Failed Due To Incorrect Password"));
                } else if($data[0]->user_password == $request['user_password']) {

                 //   die(json_encode($data));
                    $user['user_name'] = $data[0]['user_name'];
                    $user['user_id'] = $data[0]['user_id'];
                    $user['email'] = $data[0]['user_email'];
                    $user['package'] = $data[0]['user_package'];
                    $user['company'] = $data[0]['user_company'];

                    $request->session()->put('user', $user);

                    return redirect('user/dash');
                }
            } else {
                if(count($data) >= 2) {
                    die(json_encode("Failed Due To Duplicate Account"));
                } else {
                    die(json_encode("Failed Due To Unkown Error"));
                }
            }
        }
    }
}
