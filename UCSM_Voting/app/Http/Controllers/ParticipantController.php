<?php

namespace App\Http\Controllers;

use App\participant;
use App\parti_cata;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cata = parti_cata::all();
        $bool = 'index';
        return view('Admin.participant.index',compact('cata','bool'));
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
           'photoURL'=>'required',
           'shop' => 'required'


            ]);

          $input = $request->all();
          if($file = $request->file('photoURL')){

              $name = $file->getClientOriginalName();
              $file->move('images',$name);
              $input['photoURL'] = $name;

           }




           participant::create([
              'name' => $input['name'],
              'photoURL' => $input['photoURL'],
              'cata_id' => $input['shop'],

          ]);

          return redirect('participant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(participant $participant)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = participant::find($id);
        $cata = parti_cata::all();
        $bool = 'edit';
        return view('Admin.participant.edit', compact('participant','cata','bool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'photoURL'=>'required',
            'shop' => 'required'


             ]);

           $input = $request->all();
           if($file = $request->file('photoURL')){

               $name = $file->getClientOriginalName();
               $file->move('images',$name);
               $input['photoURL'] = $name;

            }




            participant::whereId($id)->first()->update($input);
            participant::whereId($id)->update(['cata_id' => $input['shop']]);


           return redirect('participant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        participant::destroy($id);
        return redirect('participant');
    }
}
