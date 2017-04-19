<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

/**
 * Class MessageController
 * @package App\Http\Controllers\Admin
 */
class MessageController extends Controller
{

    /**
     * MessageController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth',['except' =>['store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if ($request->get('label') === 'important') {
           $messages = Message::where('label', '=', 'important')->get();
       } else {
           $messages = Message::get();
       }
        return view('admin.message.index',['messages' => $messages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
