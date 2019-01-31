<?php

namespace App\Http\Controllers;

use App\shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = shop::all();
        $bool = 'index';
        return view('Admin.shop.index',compact('shop','bool'));
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
             'photoURL' => 'required'


          ]);

        $input = $request->all();
        if($file = $request->file('photoURL')){

            $name = $file->getClientOriginalName();
            $file->move('images',$name);
            $input['photoURL'] = $name;

         }




         shop::create([
            'name' => $input['name'],
            'photoURL' => $input['photoURL'],

        ]);

        return redirect('shop');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $shop = shop::find($id);
       $bool = 'edit';
       return view('Admin.shop.edit',compact('shop','bool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'photoURL' => 'required'


         ]);

       $input = $request->all();
       if($file = $request->file('photoURL')){

           $name = $file->getClientOriginalName();
           $file->move('images',$name);
           $input['photoURL'] = $name;

        }




        shop::whereId($id)->first()->update($input);

       return redirect('shop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        shop::destroy($id);
        return redirect('shop');
    }
}
