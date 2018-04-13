
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Auth;


Auth::routes();


Route::get('/', function () {
    	$data['result'] = (array)DB::table('page_details')->where('page_title', 'welcome')->first();
    return view('welcome', [
    	"page" => $data['result'],
    	"jumbotron" => json_decode($data['result']['page_jumbtron'])
    ]);
});

Route::get('/docs', function () {
	$data['result'] = (array)DB::table('page_details')->where('page_title', 'docs')->first();
	$docs = json_decode((object)DB::table('items')->orderBy('id')->get());
    return view('docs', [
    	"page" => $data['result'],
    	"jumbotron" => json_decode($data['result']['page_jumbtron']),
    	"htmls" => $docs
    ]);
});

Route::get('/about', function () {
    $data['result'] = (array)DB::table('page_details')->where('page_title', 'about')->first();

    return view('about', [
        "page" => $data['result'],
        "jumbotron" => json_decode($data['result']['page_jumbtron']),
        "cards" => (array)json_decode($data['result']['cards'])
    ]);
});


Route::get('/user', 'User_Auth@login');
Route::post('/user_login', 'User_Auth@submit');
Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect('/');
});
Route::get('/dash', 'User@dash');

Route::get('/page_tool/{title}', 'page_tool@index')->middleware('auth');
Route::get('/page_edit_selector', 'page_tool@selector')->middleware('auth');
Route::post('/page_tool/submit_jumbo', 'page_tool@submit_jumbo');
Route::post('/page_tool/submit_jumbo_buttons', 'page_tool@submit_jumbo_buttons');

Route::get('/home', 'HomeController@index')->name('home');
