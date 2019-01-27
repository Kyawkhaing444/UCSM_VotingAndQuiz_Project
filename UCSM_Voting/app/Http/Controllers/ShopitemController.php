<?php

namespace App\Http\Controllers;

use App\shopitem;
use Illuminate\Http\Request;
use App\shop;

class ShopitemController extends Controller
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
           'photoURL1' => 'required',
           'price' => 'required',

            ]);

          $input = $request->all();
          if($file = $request->file('photoURL1')){

              $name = $file->getClientOriginalName();
              $file->move('images',$name);
              $input['photoURL1'] = $name;

           }

           $s_id = shop::find($input['shop']);


           shopitem::create([
              'name' => $input['name'],
              'photoURL' => $input['photoURL1'],
              'price' => $input['price'],
            'shop_id' => $s_id->id,
          ]);

          return redirect('shop');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shopitem  $shopitem
     * @return \Illuminate\Http\Response
     */
    public function show(shopitem $shopitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shopitem  $shopitem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $shop_item = shopitem::find($id);
       $shop = shop::all();
       $bool = 'edit';
       return view('Admin.shopitem.edit',compact('shop_item','shop','bool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shopitem  $shopitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name' => 'required',
            'photoURL' => 'required',
            'price' => 'required',

             ]);

           $input = $request->all();
           if($file = $request->file('photoURL')){

               $name = $file->getClientOriginalName();
               $file->move('images',$name);
               $input['photoURL'] = $name;

            }



            shopitem::whereId($id)->first()->update($input);

           return redirect('shop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shopitem  $shopitem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       shopitem::destroy($id);
       return redirect('shop');
    }
}
