<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\page_details;

class page_tool extends Controller
{
    public function index($Request) {



    	if($Request == 'selector') {
    		$this->selector();
    	}
    	//die(json_encode($Request));
    	$item = DB::table('page_details')->where('page_title', $Request)->first();
    	
   		return view('page/tool', [
    		"page" => (array)$item,
    		"jumbotron" => json_decode($item->page_jumbtron),
    		"user" => "Brent Dalling"
  	  	]);

	}

	public function selector(){

		$item = DB::table('page_details')->where('page_title', 'selector')->first();
    	$page = (array)DB::table('page_details')->get()->all();
   		return view('selector', [
    		"page" => (array)$item,
    		"jumbotron" => json_decode($item->page_jumbtron),
    		"pages" => (array)$page,
    		"user" => "Brent Dalling"
  	  	]);
	}

  public function submit_jumbo(Request $request) {

  $item = request()->all();
  $newJumbo = page_details::where('page_title', $item['page'])->get()->first();
  $newJumbo = json_decode($newJumbo['page_jumbtron']);
  $newJumbo->title = $item['title'];
  $newJumbo->sub_title = $item['sub'];
  $newJumbo->color = $item['color'];
  $newJumbo->background->image = $item['background'];
  $newJumbo->background->position = $item['position'];

  if ($item == null || empty($item)){
    $data['message'] = "Empty Or Null Data From Form. Check fields and refresh. If still not working contact an admin.";
    $data['code'] = "fail";
  } else {
            page_details::where('page_title', $item['page'])->update(['updated_at' => date("Y-m-d",time())]);
            page_details::where('page_title', $item['page'])->update(['page_cover_img' => $item['background']]);

            page_details::where('page_title', $item['page'])->update(['page_jumbtron' => json_encode($newJumbo)]);

            $data['title'] = $item['title'];
            $data['sub'] = $item['sub'];

            die(json_encode($data));
  }
  }


public function submit_jumbo_buttons(Request $request) {
  $item = request()->all();

  $newJumbo = page_details::where('page_title', $item['page'])->get()->first();
  $newJumbo = json_decode($newJumbo['page_jumbtron']);
  
  $newJumbo->button->a->text = $item['button_0']['text'];
  $newJumbo->button->a->url = $item['button_0']['url'];
  $newJumbo->button->a->css = $item['button_0']['css'];

  $newJumbo->button->b->text = $item['button_1']['text'];
  $newJumbo->button->b->url = $item['button_1']['url'];
  $newJumbo->button->b->css = $item['button_1']['css'];


  page_details::where('page_title', $item['page'])->update(['page_jumbtron' => json_encode($newJumbo)]);
  die(json_encode($newJumbo->button));


    }
}
