<?php

namespace App\Http\Controllers;

use App\Quiz_user;
use Illuminate\Http\Request;
use App\quiz;
use Session;

class QuizUserController extends Controller
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

       $quiz = quiz::all();

       $p = 0;
       $m = "";


       foreach ($quiz as $q) {
               if($input[ str_replace(' ','',$q->item1) ] == $q->answer){
                  $p++;
               }
               $request->session()->flash('qp', $input[ str_replace(' ','',$q->item1) ]);
               $request->session()->flash('qp1', $q->answer);

       }
      $name = $request->session()->get('name');

      Quiz_user::where('name','=', $name)->update(['point' => $p]);


      $request->session()->put('quizmessage', 'hello');


       return redirect('Homequiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quiz_user  $quiz_user
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz_user $quiz_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz_user  $quiz_user
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz_user $quiz_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz_user  $quiz_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz_user $quiz_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz_user  $quiz_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz_user $quiz_user)
    {
        //
    }
}
