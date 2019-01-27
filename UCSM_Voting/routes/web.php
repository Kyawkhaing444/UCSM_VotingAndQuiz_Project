<?php
use App\parti_cata;
use App\participant;
use App\shop;
use App\shopitem;
use App\quiz;
use App\vote_user;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function(){
   return view('Admin.dashboard.index');
})->middleware('auth');
Route::resource('participant','ParticipantController')->middleware('auth');

Route::get('showparticipant', function(){
    $participant = participant::all();
    $parti_cata = parti_cata::all();
    return view('Admin.participant.show',compact('participant','parti_cata'));
});


Route::resource('parti_cata', 'parti_cataController')->middleware('auth');


Route::resource('shop', 'ShopController')->middleware('auth');
Route::resource('shopitem', 'ShopitemController')->middleware('auth');
Route::get('shop/{event}/delete','ShopController@destroy')->middleware('auth');

Route::resource('quiz', 'QuizController')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/logout',function(){
    if(Auth::guard('web')->check()) $redirect = '/login';
        else $redirect = '/';

        Auth::guard('web')->logout();

        return redirect($redirect);
  });


  //Home & Front_end

Route::get('list', function(){
return view('Home.home');
});

Route::get('Homeshop', function(){
  $shop = shop::all();
  return view('Home.shop',compact('shop'));
});

Route::get('Homequiz', function(){
 $quiz = quiz::all();
  return view('Home.Quizz',compact('quiz'));
});

Route::get('Homeviews/{id}', function($id){
    $parti = participant::find($id);
  return view('Home.views',compact('parti'));
});

Route::get('Homeshopitem/{id}', function($id){
  $shop_item = shopitem::where('shop_id', $id)->get();
  return view('Home.shopitem',compact('shop_item'));
});

Route::get('selection/{cata}', function($cata){
  $catago = parti_cata::where('name', $cata)->get();
  foreach($catago as $c){
    $id = $c->id;
  }
  $parti = participant::where('cata_id',$id)->get();
  return view('Home.selection',compact('parti'));
});

Route::get('gene',function(){
 for($i = 0 ; $i < 500 ; $i++){
    $str = str_random(8);
    vote_user::create(['code' => $str]);
 }

   return redirect('list');
});
