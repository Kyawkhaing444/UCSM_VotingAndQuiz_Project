<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vote_user;
use App\participant;

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
        $this->validate($request, [
            'code'   => 'required',
          ]);
          $input = $request->all();
          $request->session()->put('code',$input['code']);
          $value = $request->session()->get('cata');
          $id = $request->session()->get('parti_id');
          if(!vote_user::where('code', $input['code'])->where($value,'=','active')->update([$value => 'notActive'])){
              return redirect('shop');
          }
          $p = participant::find($id);
          $point = (int)$p->point + 1;
          if(!participant::where('id', $id)->update(['point' => $point])){
            return redirect('/');
          }
          return redirect('Homeviews/'.$id.'/'.$value);
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
