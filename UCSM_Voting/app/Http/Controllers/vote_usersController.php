<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vote_user;
use App\participant;
use Session;

class vote_usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $input = $request->all();

          $value = $request->session()->get('cata');
          $id = $request->session()->get('parti_id');
          if($input['code']==""){
            Session::flash('ErrorMessage','Please , enter your code!If there\'s any problem, Plz Contact Technology Club\'s Counter,Thank You!');
            $input['code'] = "1";
            return redirect('Homeviews/'.$id.'/'.$value.'/'.$input['code']);
          }
          else if(!vote_user::where('code','=', $input['code'])->exists()){
            Session::flash('ErrorMessage','Your code is incorrect! If there\'s any problem, Plz Contact Technology Club\'s Counter,Thank You!');
            $input['code'] = "1";
            return redirect('Homeviews/'.$id.'/'.$value.'/'.$input['code']);
          }
          else if(!vote_user::where('code', $input['code'])->where($value,'=','active')->update([$value => 'notActive'])){
            Session::flash('ErrorMessage',"You can only vote one time.If there\'s any problem, Plz Contact Technology Club\'s Counter,Thank You!");
            $input['code'] = "1";
            return redirect('Homeviews/'.$id.'/'.$value.'/'.$input['code']);
          }
          $p = participant::find($id);
          $point = (int)$p->point + 1;
          if(!participant::where('id', $id)->update(['point' => $point])){
            Session::flash('ErrorMessage','Thank You!');
            return redirect('Homeviews/'.$id.'/'.$value.'/'.$input['code']);
          }
          Session::flash('Success','Thank You!');
          return redirect('Homeviews/'.$id.'/'.$value.'/'.$input['code']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
