<?php
use App\parti_cata;
use App\participant;
use App\shop;
use App\shopitem;
use App\quiz;
use App\vote_user;
use App\Quiz_user;
use Illuminate\Http\Request;

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
    return view('Home.preloader');
});

Route::get('/Home' ,function(){
   return view('Home.realhome');
});

Route::get('dashboard', function(){
   $parti = participant::all();
   $parti_cata = parti_cata::all();
   $Qu = Quiz_user::all();
   return view('Admin.dashboard.index',compact('parti','parti_cata'));
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
Route::get('participant/{event}/delete','ParticipantController@destroy')->middleware('auth');
Route::resource('parti_cata', 'parti_cataController')->middleware('auth');
Route::get('parti_cata/{event}/delete','parti_cataController@destroy')->middleware('auth');
Route::get('shop_item/{event}/delete','ShopitemController@destroy')->middleware('auth');
Route::resource('quiz', 'QuizController')->middleware('auth');

Route::resource('shop_item', 'ShopitemController')->middleware('auth');
Route::resource('QuizUser', 'QuizUserController')->middleware('auth:code');





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
  return view('Home.Quizzes',compact('quiz'));
})->middleware('auth:code');

Route::get('Homeviews/{id}/{cata}/{code}', function($id,$cata,$code,Request $request){
    $parti = participant::find($id);
    $request->session()->put('parti_id', $parti->id);
  return view('Home.views',compact('parti','cata','request','code'));
});

Route::get('Homeshopitem/{id}', function($id){
  $shop_item = shopitem::where('shop_id', $id)->get();
  $shop = shop::find($id);
  return view('Home.shopitem',compact('shop_item','shop'));
});

Route::get('selection/{cata}', function($cata,Request $request){
  $catago = parti_cata::where('name', $cata)->get();
  $id = 0 ;
  foreach($catago as $c){
    $id = $c->id;
  }
  $request->session()->put('cata', $cata);
  $parti = participant::where('cata_id',$id)->get();
  return view('Home.selection',compact('parti','cata'));
});

Route::get('gene',function(){
 for($i = 0 ; $i < 520 ; $i++){
    $str = str_random(8);
    vote_user::create(['code' => $str]);
 }

   return redirect('list');
});


//Voter


Route::post('vote','vote_usersController@store')->name('vote.submit');
Route::prefix('code')->group(function() {
    Route::get('/login', 'Auth\CodeController@showLoginForm')->name('code.login');
    Route::post('/login', 'Auth\CodeController@login')->name('code.login.submit');
  });

Route::get('genec',function(){

    for( $i = 1 ; $i <= 50 ; $i++){
      $str = str_random(8);
       Quiz_user::create(['password' => bcrypt($str), 'name' => 'TC-'.$i , 'code' => $str]);
    }

      return redirect('list');
   });

   Route::get('code/logout',function(){
    if(Auth::guard('web')->check()) $redirect = 'code/login';
        else $redirect = '/';

        Auth::guard('code')->logout();

        return redirect($redirect);
  });
