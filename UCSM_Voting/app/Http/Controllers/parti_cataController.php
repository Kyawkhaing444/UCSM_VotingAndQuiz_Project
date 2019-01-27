<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parti_cata;

class parti_cataController extends Controller
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
        $this->validate($request,[

          'name' => 'required',

            ]);

          $input = $request->all();
           parti_cata::create([
              'name' => $input['name'],

          ]);

          return redirect('participant');
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
       $parti_cata = parti_cata::find($id);
       $bool = 'edit';
       return view('Admin.parti_cata.edit',compact('parti_cata','bool'));
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
        $this->validate($request,[

            'name' => 'required',

              ]);

            $input = $request->all();

            parti_cata::whereId($id)->first()->update($input);

            return redirect('participant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        parti_cata::destroy($id);
        return redirect('participant');
    }
}
